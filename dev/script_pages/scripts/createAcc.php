<?php
    function generate_check_prime() {
        $number = rand(2,1000);
        for ($i=2; $i < $number; $i++) { 
            if(($number % $i) == 0) {
                return generate_check_prime();
            }
        }
        return $number;
    }
    include("db_con.php");
    $username = $_POST["user"];
    $password = $_POST["pass"];
    $prime_num = generate_check_prime();

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $createQuery = "INSERT INTO accounts(acc_user,unique_id,acc_pass)
                    VALUES('$username','$prime_num','$hashed_pass');
                    ";
    $sqlConn->query($createQuery);
?>