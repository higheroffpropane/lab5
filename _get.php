<?php
    include('connect.php');
    $index = $_POST['index'] ?? null;

    if ($index) {
        $res = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM sort WHERE id='$index'"));
        echo $res['val']; 
    }
?>