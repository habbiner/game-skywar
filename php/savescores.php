<?php
    include 'login.php';
    if (isset($_GET['name']) && isset($_GET['score'])) {
        $con = mysqli_connect($host, $db_username, $db_password, $db_name);
        $name = strip_tags(mysqli_real_escape_string($con, $_GET['name']));
        $score = strip_tags(mysqli_real_escape_string($con, $_GET['score']));
        $sql = mysqli_query($con, "INSERT INTO $db_name.$db_table (name, score) VALUES ('$name','$score');" );
        
        if ($sql) {
            echo 'Your score was saved. Congrats!';
        } else {
            echo 'There was a problem saving your score. Please try again later.';
        }
        mysqli_close($con);
    } else {
            echo 'Your name or score wasn't passed in the request. Make sure you add ?name=NAME_HERE&score=1337 to the tags.';
        }
?>
