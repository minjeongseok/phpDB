<?php

    $servername = "localhost";
    $username = "root";
    $password = "1234";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>DB 연결 성공</p>";
    } catch(PDOException $e) {
        echo "<p>DB 연결 실패</p>";
        echo "<br>";
        echo $e->getMessage();
        exit;
    }

    try {
        $dbname = "firstdb";
        $sql = "CREATE DATABASE ". $dbname;
        // $sql = "DROP DATABASE ". $dbname;
        $conn->exec($sql);
        echo $dbname. "<p> 생성 성공</p>";
        // echo $dbname. "<p> 삭제 성공</p>";
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;

?>
