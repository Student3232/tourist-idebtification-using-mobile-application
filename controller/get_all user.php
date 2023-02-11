<?php
require("dbconnection.php");
try {
    $queryGetAllAcount = " SELECT * FROM users ";
    $result = mysqli_query($connect, $queryGetAllAcount);
    while($row = mysqli_fetch_array($result))
    {
        print_r($row);
    }
} catch (\Throwable $th) {
    echo $th;
}