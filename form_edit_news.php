<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

<h1>~ Form edit ~</h1>
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

<form method="post" action="process_edit.php">
	<table>
		<input type="hidden" name="index" value="<?php echo $index ?>">
		<tr>
			<td>Title</td>
			<td>
				<input type="text" name="title" value="<?php echo $a_news['title'] ?>">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" ><?php echo $a_news['content'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Link image</td>
			<td>
				<input type="text" name="link_img" value="<?php echo $a_news['link_img'] ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="" value="confirm">
			</td>
		</tr>
		
	</table>
</form>

</body>
</html>