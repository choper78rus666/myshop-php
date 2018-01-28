<?
include "reader_model.php";
$shows_json = getDataFromFile('../private/files/item_base.txt');
$shows_json .= ']';

$item = json_decode($shows_json, true); // преаброзуем JSON с true не в объекты

?>