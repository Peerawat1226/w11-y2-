<?php
include 'connectdb.php';

$id = $_GET['id']; 


$sql = "DELETE FROM authors WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    
    header("location: topic_list.php");
} else {
    echo "ลบไม่สำเร็จ: " . mysqli_error($conn);
}
mysqli_close($conn);
?>