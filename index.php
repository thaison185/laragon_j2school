<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style type="text/css">
		a{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>

<h1>~ LCV News ~</h1>

<a href="form_insert.php">Add News</a>

<?php
include 'connect.php';

$page = 1;
if(isset($_GET['page']))
	$page = $_GET['page'];

$search_key = '';
if(isset($_GET['search_key']))
	$search_key = $_GET['search_key'];

$sql = "select count(*) from news
 where news.title like '%$search_key%'";
//echo $sql;

$query_result = mysqli_query($connect, $sql);
$number_of_news = mysqli_fetch_array($query_result)['count(*)'];
$number_of_news_per_page = 2;

$offset_value = ($page - 1)*$number_of_news_per_page;
$sql = "select * from news
 where news.title like '%$search_key%'
 limit $number_of_news_per_page offset $offset_value";
//echo $sql;

$news = mysqli_query($connect, $sql);

mysqli_close($connect);
?>

<table width="100%" border="1">
	<caption>
		<form>
			<input type="search" name="search_key">
		</form>
	</caption>
	<tr>
		<td width="5%">Index</td>
		<td width="65%">Title</td>
		<td width="30%">Image</td>
	</tr>

	<?php foreach ($news as $a_news) { ?>
		<tr>
			<td><?php echo $a_news['index'] ?></td>
			<td>
				<a href="news_detail.php?index=<?php echo $a_news['index'] ?>">
					<?php echo $a_news['title'] ?>
				</a>
			</td>
			<td>
				<img src="<?php echo $a_news['link_img'] ?>" height='200px'>
			</td>
			<td>
				<a href="form_edit_news.php?index=<?php echo $a_news['index'] ?>" style='color: green;'>edit</a>
				<br>
				<br>
				<a href="process_delete_news.php?index=<?php echo $a_news['index'] ?>" style='color: red;'>delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<?php for ($i=1; $i <= ceil($number_of_news/$number_of_news_per_page); $i++) { ?>
	<a href="index.php?page=<?php echo $i ?>&search_key=<?php echo $search_key ?>">
		<?php echo $i ?>
	</a>
<?php } ?>
	

</body>
</html>