<?php

$_POST = json_decode(file_get_contents('php://input'), true);

    error_reporting(0);
    $conn = new PDO("mysql:host=localhost;dbname=gym", "root", "");   
    
       $ins_query=$conn->prepare("insert into users (Name, Phone, Email, Date_of_birth,Gender)
        values( :name,:mobile , :email,:dob,:gender)");
       $ins_query->bindParam(':name', $_POST["firstname"]);
       $ins_query->bindParam(':mobile', $_POST['phoneNumber']);
       $ins_query->bindParam(':email', $_POST['email']);
       $ins_query->bindParam(':dob', $_POST['birthDate']);
       $ins_query->bindParam(':gender', $_POST['gender']);
       $chk_ins=$ins_query->execute();
    
    $result = $conn->prepare("select * from users");
    $result->execute();
    echo json_encode($result->fetchAll());
?> 