<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;
use Dmitriy\Shop\Models\FileModel;


class UserInfoModel {
    private $fileModel;
    private $db;
    
    public function __construct() {
        $this->fileModel = new FileModel();
        $this->db = new DB();
    }
    
    function getInfoUser($param){
        $sql = "SELECT * from user_info WHERE login = ?;";
        return $this->db->getSQL([$param], $sql);
    }
    
    function updInfoUser($params){
        $sql = "UPDATE user_info SET name=:name, surname=:surname, middle_name=:middle_name, birthday=:birthday, sex=:sex, about=:about, avatar=:avatar WHERE login=:login;";
        return $this->db->addSQL($params, $sql);
    }
    
    function uploadAvatar($path){
        return $this->fileModel->imageUpload($path, "../public/static/upload/");
    } 
}

?>