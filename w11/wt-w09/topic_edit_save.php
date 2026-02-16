<?php
include 'connectdb.php';
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$sql = "UPDATE authors SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$id";
$result = mysqli_query($conn, $sql);

if($result) { header("location: topic_list.php"); }
?>