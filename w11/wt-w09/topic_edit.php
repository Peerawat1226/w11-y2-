<?php
include 'connectdb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM authors WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<form action="topic_edit_save.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    ชื่อ: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
    นามสกุล: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
    อีเมล: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
    <button type="submit">บันทึกการแก้ไข</button>
</form>