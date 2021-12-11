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
		<input type="hidden" name="index" id="index" value="<?php echo $index ?>">
		<tr>
			<td>Title</td>
			<td>
				<input type="text" name="title" id="title" value="<?php echo $a_news['title'] ?>">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" id="content"><?php echo $a_news['content'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Link image</td>
			<td>
				<input type="text" name="link_img" id="link_img" value="<?php echo $a_news['link_img'] ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" onclick="return validate()" name="" value="confirm">
			</td>
		</tr>
		
	</table>
</form>
<div id="error"></div>
<script type="text/javascript">
	function validate() { 
		let title = document.getElementById('title').value;
		let content = document.getElementById('content').value;
		let link_img = document.getElementById('link_img').value;

		if(title.length === 0 || content.length === 0)
			return false;

		let regex = /[<>]/;
		if(regex.test(title) || regex.test(content) || regex.test(link_img))
		{
			document.getElementById('error').innerHTML = 'hakcer 2k8 tha e';
			return false;
		}
		return true;
	}
</script>
</body>
</html>