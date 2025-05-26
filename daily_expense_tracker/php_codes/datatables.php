<?php

    require 'db_connection.php';

    $sql = "SELECT * FROM `tbl_expenses`;";
    $result = mysqli_query($connect, $sql);
    $fetchData = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>