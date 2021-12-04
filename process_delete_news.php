<?php

$index = $_GET['index'];

include 'connect.php';

$sql = "delete from news where news.index = $index";
echo $sql;

$news = mysqli_query($connect, $sql);

$error = mysqli_error($connect);
echo $error;

mysqli_close($connect);
