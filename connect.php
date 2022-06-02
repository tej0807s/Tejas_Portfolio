<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $services = $_POST['services'];
    $subject = $_POST['subject'];

    $conn = new mysqli('localhost','root','','Tejas');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn_>prepare("insert into registration(name,gamil,services,subject)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$services,$subject);
        $stmt->execute();
        echo "registratiob Sucessfull...";
        $stmt->close();
        $conn->close();
    }
?>