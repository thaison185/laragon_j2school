<?php

$title = $_POST['title'];
$content = $_POST['content'];
$link_img = $_POST['link_img'];

include 'connect.php';

$sql = "insert into news(title,content,link_img)
values('$title','$content','$link_img')";

echo $sql;

mysqli_query($connect, $sql);

$error = mysqli_error($connect);
echo $error;

mysqli_close($connect);