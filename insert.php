<?php 
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost", "root", "");
    $sql = "insert into 4each_keijiban (handlename, title, comments) values (?, ?, ?)";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindValue(1, $_POST['handlename']);
    $stmt -> bindValue(2, $_POST['title']);
    $stmt -> bindValue(3, $_POST['comments']);
    
    $stmt -> execute();
    header("Location:http://localhost/4each_keijiban/index.php");
?>
