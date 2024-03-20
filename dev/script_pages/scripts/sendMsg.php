<?php
    include("db_con.php");
    session_start();
    $message_sent = $_POST['message_field'];
    $sent_to = $_POST['sent_to'];
    $sender_id = $_SESSION['user_logged'];
    
    $sent_message = "INSERT INTO message_tbl(sender_id,message_box,reciever_id)
                    VALUES('$sender_id','$message_sent','$sent_to');
                    ";
    $sqlConn->query($sent_message);
?>