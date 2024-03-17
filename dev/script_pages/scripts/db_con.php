<?php 
    $sqlConn = mysqli_connect("localhost","root","","onlinetext");

    if(!$sqlConn) {
        die("". mysqli_connect_error());
    }

?>