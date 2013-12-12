<?php

$id = $_POST['id'];
$jsonarray = ['idNummer' => $id + 40];
echo json_encode($jsonarray);

?>