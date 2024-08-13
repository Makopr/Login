<?php
    $email = $_POST["email"];
    
    $name = $_POST["name"];

    $pass = $_POST["pass"];
    $pass = md5($pass."asd22");
    
    $mysql = new mysqli("localhost", "root", "", "register-bg");
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
    if ($result->fetch_assoc() == true){
        $mysql->close();
        echo json_encode(array('email' => "1"));
    }
    else {
        $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $mysql->close();
        if ($result->fetch_assoc() == true){
            echo json_encode(array('email' => $email));
        }
        else{
            echo json_encode(array('email' => "0"));
        }   
    }
?>