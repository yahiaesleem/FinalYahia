<?php
include 'home.php';
header("Content-Type:application/json");
$db = new dataDb();
$db->createDbConnection();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$id = $_POST["id"];
$db->deleteEmployee($id);
}
?>