<?
function check_data($str){
    $data = json_decode($str, true);
    
        if(isset($data['userName'])){
        $boo = true;
        $data['userName'] = check_input($data['userName']) ?: $boo = false;
        $db['login'] = check_input($data['login']) ?: $boo = false;
        $db['pwd'] = check_input($data['pwd']) ?: $boo = false;
        $db['email'] = check_input($data['email']) ?: $boo = false;
        if(!$boo){
            return false;
        } else {
            return $data;
        }
    } 
    return false;
}

function check_input($str){
    $str = strip_tags(trim($str));
    return empty($str)? false : $str;
}

?>