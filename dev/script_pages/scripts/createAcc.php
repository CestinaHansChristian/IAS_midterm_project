<?php
    include("db_con.php");

    $username = $_POST["user"];
    $password = $_POST["pass"];

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $createQuery = "INSERT INTO accounts(acc_user,acc_pass)
                    VALUES('$username','$hashed_pass');
                    ";
    $sqlConn->query($createQuery);
?>