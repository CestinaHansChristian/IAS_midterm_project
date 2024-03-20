<?php
    session_start();
    include("db_con.php");
    $user_logged = $_SESSION['user_logged'];
    $getMessage = "SELECT message_tbl.message_box,accounts.acc_user
                    FROM message_tbl
                    LEFT JOIN accounts ON message_tbl.sender_id = accounts.account_id
                    WHERE reciever_id ='$user_logged'
                    ";
    $result_message = $sqlConn->query($getMessage);
    while ($row = $result_message->fetch_assoc()) {
        echo "
        <li class='message-container flex'>
            <div class='flex gap-x-2 flex-row-reverse'>
                <div class='flex flex-row-reverse gap-x-2'>
                    <div id='message_sent' class='message border-2 border-black place-content-center grid px-5 rounded-lg bg-violet-400'>
                        $row[message_box]
                    </div>
                    <div class='grid place-content-center bg-green-300 w-12 h-12 rounded-xl border-2 border-orange-500'>
                        <p>$row[acc_user]</p>
                    </div>
                </div>
            </div>
        </li>
            ";

        // echo $row['message_box'] . $row['account_id'];
    }
?>