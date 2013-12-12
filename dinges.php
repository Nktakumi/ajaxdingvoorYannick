<?php
// header('Content-Type: application/json');
//Als ik errors niet uitzet stuurt hij ook gelijk een notice dat $id niet bestaat, wtf
error_reporting(0); 
if(isset($_POST['id'])) {
	$id = $_POST['id'];
	$id += 40;
}
$jsonarray = ['idNummer' => $id];
echo json_encode($jsonarray);

?>