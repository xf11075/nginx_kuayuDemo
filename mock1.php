<?php

if(!empty($_GET["id"])){
	$id = $_GET["id"];
}else{
	$id = null;
}

$arr = array(
	"status" => 1,
	"msg" => "",
	"data" => array("a" => "a","b" => [1,2]),
);
echo json_encode($arr);

?>