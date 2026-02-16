<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "w11";                       
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
    mysqli_query($conn, 'SET NAMES \'utf8\'');
?>
