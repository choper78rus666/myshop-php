<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class UserInfoModel {
    
    function infoUser($data){
        return;
       // return $this->uploadAvatar($data['avatar']);
    }
    
    function uploadAvatar($path){
       //properties of the uploaded file
        $name= $path["file"]["name"];
        $type= $path["file"]["type"];
        $size= $path["file"]["size"];
        $temp= $path["file"]["tmp_name"];
        $error= $path["file"]["error"];

        if ($error > 0)
            die("Error uploading file! code $error.");
        else
           {
            if($type=="image/png" || $size > 2000000)//condition for the file
            {
            die("Format  not allowed or file size too big!");
            }
            else
            {
             move_uploaded_file($temp, "../private/upload/" .$name);
                
             return $temp."Upload complete!"; 
             }
        }

    }
        
    
    
}

?>