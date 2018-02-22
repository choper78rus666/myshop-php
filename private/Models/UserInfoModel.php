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
    
    function getInfoUser($user){
        return $this->db->getInfoUser($user);
    }
    
    function updInfoUser($data){
        return $this->db->updInfoUser($data);
    }
    
    function uploadAvatar($path){
        return $this->fileModel->imageUpload($path, "../public/static/upload/");
    } 
}

?>