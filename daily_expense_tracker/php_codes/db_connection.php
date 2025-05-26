<?php

    $connect = mysqli_connect('localhost:3307', 'root', 'db_password', 'data_daily_expense_tracker');

    //check connection
    if ($connect-> connect_error) {
        echo "Connection failed!";
    } else {
        echo " ";
    }

?>