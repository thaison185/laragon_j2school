<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

<h1>~ News detail ~</h1>
<a href="index.php">&lt back</a>
<?php

$index = $_GET['index'];

include 'connect.php';

$sql = "select * from news where news.index = $index";
//echo $sql;

$news = mysqli_query($connect, $sql);
$a_news = mysqli_fetch_array($news);

$error = mysqli_error($connect);
echo $error;

mysqli_close($connect);
?>

<h1>
	<?php echo $a_news['title'] ?>
</h1>
<br>
<?php echo nl2br($a_news['content']) ?>;
<br>
<img src="<?php echo $a_news['link_img'] ?>" height='500px'>

</body>
</html>