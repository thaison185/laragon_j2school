<form method="post" action="process_insert.php">
	<table>
		<tr>
			<td>Title</td>
			<td>
				<input type="text" name="title" id="title">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" id="content"></textarea>
			</td>
		</tr>
		<tr>
			<td>Link image</td>
			<td>
				<input type="text" name="link_img" id="link_img">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" onclick="return validate()" name="" value="add">
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