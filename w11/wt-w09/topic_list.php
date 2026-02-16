<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-id-w11</title>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>        
        <div class="container">
            <div class="row"> 
                <div class="jumbotron" style="background-color: cornflowerblue;">
                    <?php include 'topbanner.php';?>
                </div>
            </div>
            <div class="row">
                <?php include 'menu.php';?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p>Login Area</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h2>เครื่่องมือ</h2>
                    <a href="topic_add.php" class="btn btn-link">เพิ่มเครื่องมือ</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>รหัส</th>
                                <th>ตัวย่อ</th>
                                <th>คำอธิบาย (ไทย)</th>
                                <th>คำอธิบาย (อังกฤษ)</th>
                                <th>ภาพไอคอน</th>
                                <th colspan="2">เครื่องมือ</th>
                            </tr>                
                        </thead>
                        <tbody>
                            <?php
                                include 'connectdb.php';
                                $sql = 'SELECT * FROM authors ORDER BY id ASC'; 
                                $result = mysqli_query($conn, $sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td>' . $row['title'] . '</td>';      
                                echo '<td>' . $row['first_name'] . '</td>'; 
                                echo '<td>' . $row['last_name'] . '</td>';  
                                echo '<td>' . $row['email'] . '</td>';      
                            ?>
                                <a href="topic_edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='topic_delete.php?id=<?php echo $row["id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
                        </tbody>    
                    </table>
                </div>    
            </div>
            <div class="row">
                <address>คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</address>
            </div>
        </div>    
    </body>
</html>