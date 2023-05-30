<?php
// include 'home.php';
// header("Content-Type:application/json");
// $db = new dataDb();
// $db->createDbConnection();
// if($_SERVER["REQUEST_METHOD"]=="GET"){
//     if(isset($_GET["id"])){
//         $db->getEmployeeById($_GET["id"]);
//     }else{
//         $db->getAllEmployee();
//     }
// }
?>

<?php
include 'home.php';
header("Content-Type:application/json");
$db_helper = new dataDb();
$db_helper->createDbConnection();
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $db_helper->getAllEmployee();
}
?>