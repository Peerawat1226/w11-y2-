<?php
include 'connectdb.php';


$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$university = $_POST['university'];


$sql = "INSERT INTO authors (title, first_name, last_name, email, phone, university) 
        VALUES ('$title', '$first_name', '$last_name', '$email', '$phone', '$university')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "บันทึกข้อมูลสำเร็จ";
    echo "<br><a href='topic_list.php'>กลับไปหน้าหลัก</a>";
    
} else {
    echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
}

mysqli_close($conn);
?>