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
        
        CREATE TABLE IF NOT EXISTS user_info (
        login VARCHAR (25) NOT NULL PRIMARY KEY,
        name VARCHAR (25) DEFAULT '',
        surname VARCHAR (100) DEFAULT '',
        middle_name VARCHAR (25) DEFAULT '',
        birthday DATE DEFAULT NULL,
        sex VARCHAR (25) DEFAULT 'male',
        about VARCHAR (25) DEFAULT '',
        avatar VARCHAR (25) DEFAULT 'default.jpg');";
        
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
        $sql = "SELECT * from accounts WHERE login = ?";
        $param = [$param];
        $statment = $connect->prepare($sql);
        $statment->execute($param);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }
    
    function updInfoUser($params){
        $connect = $this->connectDB();
        $sql = "UPDATE user_info SET name=:name, surname=:surname, middle_name=:middle_name, birthday=:birthday, sex=:sex, about=:about, avatar=:avatar WHERE login=:login";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getInfoUser($param) {
        $connect = $this->connectDB();
        $sql = "SELECT * from user_info WHERE login = ?";
        $param = [$param];
        $statment = $connect->prepare($sql);
        $statment->execute($param);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }
}

?>