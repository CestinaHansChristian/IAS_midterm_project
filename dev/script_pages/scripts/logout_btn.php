<?php
    $logout_btn_is_clicked = $_POST["logout_btn_is_clicked"];
    if($logout_btn_is_clicked) {
        header("Location:../login.php");
    }
?>