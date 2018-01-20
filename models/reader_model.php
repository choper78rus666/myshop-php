<?
function getAllUsers() {
    $users = getDataFromFile("../files/users_lst.txt");
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

function addDataToFile($data, $filename){
    if(file_put_contents($filename, serialize($data)) !== false){
        return true;
    }
    return false;
}

?>