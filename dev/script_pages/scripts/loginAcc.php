<?php 
    include("db_con.php");
    session_start();
    $_SESSION['user_logged'];
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $createQuery = "SELECT * FROM accounts WHERE acc_user ='$username'";

    $result = $sqlConn->query($createQuery);
    while($row = $result->fetch_assoc()) {
        if(password_verify($password,$row['acc_pass'])) {
            $_SESSION['user_logged'] = $row['account_id'];
            $_SESSION['user_name'] = $row['acc_user'];
            echo true;
        } else {
            echo false;
        }
    }
?>