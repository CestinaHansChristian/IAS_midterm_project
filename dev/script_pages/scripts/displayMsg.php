<?php
    include("db_con.php");
    session_start();
    $user_logged = $_SESSION['user_logged'];
    $getMessage = "SELECT message_box
                    FROM message_tbl
                    WHERE sender_id ='$user_logged'
                    ";
    $result_send_message = $sqlConn->query($getMessage);

while( $row_sent_message = $result_send_message->fetch_assoc()) {
    echo "
    <div class='message-container flex flex-row-reverse'>
        <div class='flex gap-x-2'>
            <div class='message border-2 border-black place-content-center grid rounded-lg bg-violet-400 px-5'>
                $row_sent_message[message_box]
            </div>
            <div class='image bg-orange-300 w-12 h-12 rounded-full border-2 border-orange-500'>
                $_SESSION[user_name]
            </div>
        </div>
    </div>
        ";
}
?>