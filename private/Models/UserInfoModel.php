<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class UserInfoModel {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    
    function getInfoUser($user){
        return $this->db->getInfoUser($user);
    }
    
    function updInfoUser($data){
        return $this->db->updInfoUser($data);
    }
    
    function uploadAvatar($path){
       
        $name= $path["file"]["name"];
        $type= $path["file"]["type"];
        $size= $path["file"]["size"];
        $temp= $path["file"]["tmp_name"];
        $error= $path["file"]["error"];

        if ($error > 0){
            return "Error uploading file! code $error.";
        } else {
            if($type === "image/jpeg" || $type === "image/png"){
                if($size > 2097152){
                    return "Format file size too big!";
                } else {
                    move_uploaded_file($temp, "../public/static/upload/" .$name);
                    return "Upload complete!"; 

                    }
            } else {;
                return "Format not allowed!";
                }
            }
    } 
}

?>