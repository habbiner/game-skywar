<?php
    header('Access-Control-Allow-Origin: *');

    include 'login.php';

    $con = mysqli_connect($host, $db_username, $db_password, $db_name);
    $sql = "SELECT *
            FROM scores
            ORDER BY score DESC
            LIMIT 10";	
    $result = mysqli_query($con, $sql);
    while($rows = mysqli_fetch_array($result)){
        echo $rows['name'] . "|" . $rows['score'] . "|";
    }

    mysqli_close($con);
?>