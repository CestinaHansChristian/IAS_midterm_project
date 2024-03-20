<?php
    include("db_con.php");
    $contact_list = "SELECT account_id,acc_user FROM accounts";

    $contact_list_res = $sqlConn->query($contact_list);
    while ($row_contact_list = $contact_list_res->fetch_assoc()) {
        echo "
            <li class='border-2 border-black font-semibold gap-x-2'>
                <input type='radio' name='users' value='$row_contact_list[account_id]' id='userId'> $row_contact_list[acc_user]</input>
            </li>
            ";
    }
?>