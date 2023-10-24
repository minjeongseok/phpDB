<?php

    // MySQLi OOP
    $servername = "localhost";
    $username = "root";
    $password = "1234";

    /*
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error) {
        echo "DB 연결에 실패했습니다.";
        echo $conn->connect_error;
        exit;
    }

    echo "DB 연결에 성공했습니다.";
    */

    /*
    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn) {
        echo "DB연결에 실패";
        exit;
        die("DB연결에 실패했습니다.");
    }

    echo "DB연결에 성공";
    */

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        echo "DB 연결에 성공";
    } catch(PDOException $e) {
        echo "DB 연결 실패";
        echo "<br>";
        echo $e->getMessage();
    }
    

?>