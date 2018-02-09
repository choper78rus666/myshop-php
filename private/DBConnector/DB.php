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
        return $conection;
    }
    
    function addAccount($params) {
        $table_name = 'accounts';
        $connect = $this->connectDB();
        $sql = "INSERT INTO $table_name (userName, login, pwd, email, state) VALUES (:userName, :login, :pwd, :email, :state)";
        $statment = $connect->prepare($sql);
        return $statment->execute($params);
    }
    
    function getAccount($param) {
        $connect = $this->connectDB();
        $table_name = 'accounts';
        $sql = "SELECT * from $table_name WHERE login = ?";
        $param = [$param];
        $statment = $connect->prepare($sql);
        $statment->execute($param);
        $data = $statment->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}

?>