<?php
    if(!isset($_SESSION['page'][0])) {
        header('Location:dev/script_pages/login.php',true);
    }
?>