<?
namespace Dmitriy\Shop\Models;

class FileModel {
    
    function getDataFile($filename) {
        $users = $this->getDataFromFile($filename);
        return unserialize($users);
    }

    function getDataFromFile($filename){
        $fp = fopen($filename, "r");
        if($fp){
            while(($data = fread($fp, 16384)) !== false){
                return $data;
            }

            fclose($fp);
        }
        return false;
    }

    function addDataToFile($data, $upload_path){
        if(file_put_contents($filename, serialize($data)) !== false){
            return true;
        }
        return false;
    }
    
    function imageUpload($path, $upload_path){
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
                    move_uploaded_file($temp, $upload_path.$name);
                    return "Upload complete!"; 

                    }
            } else {;
                return "Format not allowed!";
                }
            }
    }
}
?>