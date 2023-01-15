<?php
require('functions.php');
$count = 0;
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>sorting</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="insert" class="container">
            <div class="text-center fs-1">Массив</div>
            <?php 
            include('connect.php');
            $res = mysqli_query($link, "SELECT * FROM sort");
            $count = mysqli_num_rows($res);
            $cur = mysqli_fetch_assoc($res);
            while ($cur) {?>
                <div class="row mt-2 justify-content-center">
                    <div class="col text-center">
                            <div class="fs-3"> <?=$cur['val']?> </div>
                    </div>
                </div>
                <?php
                $cur = mysqli_fetch_assoc($res);
            } 
            ?>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <button id="btn_create" class="btn btn-dark" onclick="bubbleSort(<?=$count?>)">Отсортировать <?=$count?></button>
            </div>
        </div>
        
    </body>
</html>