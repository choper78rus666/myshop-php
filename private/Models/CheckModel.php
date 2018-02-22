<?
namespace Dmitriy\Shop\Models;

class CheckModel {
    
    function check_data($str){
        $data = json_decode($str, true);

        if(isset($data)){
            foreach($data as $key => $db){
                $data[$key] = $this->check_input($data[$key]);
            }
            return $data;
        }
        return false;
    }

    function check_input($str){
        $str = strip_tags(trim($str));
        return empty($str)? false : $str;
    }
}
?>