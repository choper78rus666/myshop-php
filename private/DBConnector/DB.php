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
        about VARCHAR (150) DEFAULT '',
        avatar VARCHAR (25) DEFAULT 'default.jpg');
        
        CREATE TABLE IF NOT EXISTS catalog (
        id INT AUTO_INCREMENT PRIMARY KEY,
        category VARCHAR (25) DEFAULT 'other',
        title VARCHAR (200) DEFAULT '',
        image VARCHAR (50) DEFAULT 'defaul.png',
        about VARCHAR (500) DEFAULT '',
        price INT (10) NOT NULL DEFAULT '0',
        count INT(11) NOT NULL DEFAULT '0');
        
        CREATE TABLE IF NOT EXISTS cart (
        id_cart INT AUTO_INCREMENT PRIMARY KEY,
        session_id VARCHAR (50) NOT NULL,
        login VARCHAR (25) DEFAULT '',
        last_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
        
        CREATE TABLE IF NOT EXISTS cart_item (
        id_cart INT NOT NULL,
        item_id INT (11) NOT NULL,
        count INT (11) NOT NULL
        )";
        
        $conection->exec($sql);
        return $conection;
    }
    
    function addSQL($params, $sql) {
        $connect = $this->connectDB();
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getSQL($param=NULL, $sql, $all=false) {
        $connect = $this->connectDB();
        if(isset($param)){
            $statment = $connect->prepare($sql);
            $statment->execute($param);
            return $all ? $statment->fetchAll(PDO::FETCH_ASSOC) : $statment->fetch(PDO::FETCH_ASSOC);
        } else {
            $statment = $connect->query($sql);
            return $statment->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}

?>