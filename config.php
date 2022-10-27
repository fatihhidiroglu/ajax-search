<?php
    $con = mysqli_connect("db","root","root","ajax");

    if (!$con) {
        echo "Connection Failed" . mysqli_connect_error();
    }
?>