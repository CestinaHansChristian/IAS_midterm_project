<?php 
    include("db_con.php");

    $username = $_POST["user"];
    $password = $_POST["pass"];

    $createQuery = "SELECT acc_pass FROM accounts WHERE acc_user ='$username'";

    $result = $sqlConn->query($createQuery);

    $row = $result->fetch_assoc();
    if(password_verify($password,$row['acc_pass'])) {
        echo true;
    } else {
        echo false;
    }
?>