<?
function check_data($str){
    $data = json_decode($str, true);
    
    if(isset($data['login'])){
        foreach($data as $key => $db){
            $data[$key] = check_input($data[$key]);
            if(!$data[$key]){
                return false;
            }
        }
        return $data;
    }
    return false;
}

function check_input($str){
    $str = strip_tags(trim($str));
    return empty($str)? false : $str;
}

?>