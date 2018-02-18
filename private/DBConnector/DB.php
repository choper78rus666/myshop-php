<?
namespace Dmitriy\Shop\DBConnector;
use PDO;

class DB {
    private $servername = 'localhost';
    private $db_name = 'MyShop';
    private $username = 'root';
    private $pwd = '';
    
    function connectDB(){
        $conection = new PDO("mysql:host=$this->servername;dbname=$this->db_name", $this->username, $this->pwd);
        $sql = "CREATE TABLE IF NOT EXISTS accounts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        login VARCHAR (25) NOT NULL,
        pwd VARCHAR (100) NOT NULL,
        email VARCHAR (25) NOT NULL,
        state VARCHAR (25) NOT NULL);
        
        CREATE TABLE IF NOT EXISTS accountsVK (
        id INT(11) PRIMARY KEY,
        first_name VARCHAR (25) NOT NULL,
        last_name VARCHAR (25) NOT NULL,
        nickname VARCHAR (25) NOT NULL,
        login VARCHAR (25) DEFAULT '');
        
        CREATE TABLE IF NOT EXISTS user_info (
        login VARCHAR (25) NOT NULL PRIMARY KEY,
        name VARCHAR (25) DEFAULT '',
        surname VARCHAR (100) DEFAULT '',
        middle_name VARCHAR (25) DEFAULT '',
        birthday DATE DEFAULT NULL,
        sex VARCHAR (25) DEFAULT 'male',
        about VARCHAR (25) DEFAULT '',
        avatar VARCHAR (25) DEFAULT 'default.jpg');
        
        CREATE TABLE IF NOT EXISTS catalog (
        id INT AUTO_INCREMENT PRIMARY KEY,
        category VARCHAR (25) DEFAULT 'other',
        title VARCHAR (200) DEFAULT '',
        image VARCHAR (50) DEFAULT 'defaul.png',
        about VARCHAR (5000) DEFAULT '',
        price INT (10) NOT NULL DEFAULT '0',
        aviable bit(1) DEFAULT b'0');";
        
        $conection->exec($sql);
        return $conection;
    }
    
    function addAccount($params) {
        $connect = $this->connectDB();
        $sql = "INSERT INTO accounts (login, pwd, email, state) VALUES (:login, :pwd, :email, :state);
        INSERT INTO user_info (login) VALUES (:login);
        ";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getAccount($param) {
        $connect = $this->connectDB();
        $sql = "SELECT * from accounts WHERE login = ?;";
        $param = [$param];
        $statment = $connect->prepare($sql);
        $statment->execute($param);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }
    
    function addAccountVK($params) {
        $connect = $this->connectDB();
        $sql = "INSERT INTO accountsVK (id, first_name, last_name, nickname) VALUES (:id, :first_name, :last_name, :nickname);";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getAccountVK($param) {
        $connect = $this->connectDB();
        $sql = "SELECT * from accountsVK WHERE id = ?;";
        $param = [$param];
        $statment = $connect->prepare($sql);
        $statment->execute($param);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }
    
    function updAccountVK($params){
        $connect = $this->connectDB();
        $sql = "UPDATE accountsVK SET login = :login WHERE id=:id;";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function updInfoUser($params){
        $connect = $this->connectDB();
        $sql = "UPDATE user_info SET name=:name, surname=:surname, middle_name=:middle_name, birthday=:birthday, sex=:sex, about=:about, avatar=:avatar WHERE login=:login;";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getInfoUser($param) {
        $connect = $this->connectDB();
        $sql = "SELECT * from user_info WHERE login = ?;";
        $param = [$param];
        $statment = $connect->prepare($sql);
        $statment->execute($param);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }
    
    function addItem($params) {
        $connect = $this->connectDB();
        $sql = "INSERT INTO catalog (id, category, title, image, about, price, aviable) VALUES (:id, 'other', :title, :image, :about, :price, '1');";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function updItem($params){
        $connect = $this->connectDB();
        $sql = "UPDATE catalog SET category=:category, title=:title, image=:image, about=:about, price=:price, aviable=:aviable WHERE id=:id;";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getItems($param = NULL) {
        $connect = $this->connectDB();
        $sql = "SELECT * FROM catalog" . (isset($param) ? " WHERE id = ?" : ";");
        if(isset($param)){
            $param = [$param];
            $statment = $connect->prepare($sql);
            $statment->execute($param);
            return $statment->fetch(PDO::FETCH_ASSOC);
        } else {
            $statment = $connect->query($sql);
            return $statment->fetchAll(PDO::FETCH_ASSOC);
        }
        
        
    }
}

?>