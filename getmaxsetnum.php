<?php



/***********************
**Get maximum set number
**Descreption： basic functions include read ids and manipulation with 
***             databases. 
**@ March,2016
***********************/

//include file and use DB function to setup connections
require_once 'include/DB_Functions.php';
$db = new DB_Functions();
$response = array();
$num = $db->getMaxSetnum();
$response["maxquiz"] = $num;
//construction json array
echo json_encode($response);

?>