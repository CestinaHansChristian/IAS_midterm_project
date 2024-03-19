<?php
    $message_sent = $_POST['message_field'];
    $sent_to = $_POST['sent_to'];
    
    $sent_message = "INSERT INTO message(sender_id,message_box,receiver_id)
                    VALUES('$message_field','$sent_to');
                    ";
?>