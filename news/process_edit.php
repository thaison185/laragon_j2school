<?php

$index = $_POST['index'];
$title = $_POST['title'];
$content = $_POST['content'];
$link_img = $_POST['link_img'];

include 'connect.php';

$sql = "update news
set title = '$title',
content = '$content',
link_img = '$link_img'
where news.index = $index;
";

echo $sql;

mysqli_query($connect, $sql);

$error = mysqli_error($connect);
echo $error;

mysqli_close($connect);