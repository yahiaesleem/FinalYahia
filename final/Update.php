<?php
// require_once 'db_connect.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $id = $_POST['id'];
//     $name = $_POST['name'];

//     $stmt = $conn->prepare("UPDATE students SET name = :name WHERE id = :id");
//     $stmt->bindParam(':name', $name);
//     $stmt->bindParam(':id', $id);

//     if ($stmt->execute()) {
//         echo "تم تعديل بيانات الطالب بنجاح";
//     } else {
//         echo "حدث خطأ أثناء تعديل بيانات الطالب";
//     }
// }
?>

<!-- <form action="edit_student.php" method="POST">
    <label for="id">معرف الطالب:</label>
    <input type="text" name="id" id="id">
    <label for="name">اسم الطالب الجديد:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="تعديل بيانات الطالب">
</form> -->

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