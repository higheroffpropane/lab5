<?php
    include('connect.php');
    $index = $_POST['index'] ?? null;
    $element = $_POST['element'] ?? null;


    $res=mysqli_query($link, "UPDATE sort SET val=$element WHERE id=$index");

?>