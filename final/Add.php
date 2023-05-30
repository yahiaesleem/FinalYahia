<?php
// require_once 'db_connect.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = $_POST['name'];

//     $stmt = $conn->prepare("INSERT INTO students (name) VALUES (:name)");
//     $stmt->bindParam(':name', $name);

//     if ($stmt->execute()) {
//         echo "تمت إضافة الطالب بنجاح";
//     } else {
//         echo "حدث خطأ أثناء إضافة الطالب";
//     }
// }
// ?>

<!-- // <form action="add_student.php" method="POST">
//     <label for="name">اسم الطالب:</label>
//     <input type="text" name="name" id="name">
//     <input type="submit" value="إضافة طالب">
// </form> -->





<?php
include 'home.php';
header("Content-Type:application/json");
$db = new dataDb();
$db->createDbConnection();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["name"];
$email = $_POST["email"];

$db->addEmployee($name,$email);
}
?>
