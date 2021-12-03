<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.span_regex{
			color: red;
		}
	</style>
</head>
<body>
<form method="post" action="process.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				<b>Validate Form</b>
			</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" id="name" name="name">
				<span id="span_regex_name" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" id="username" name="username">
				<span id="span_regex_username" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="1">nam
				<input type="radio" name="gender" value="0">nữ
				<span id="span_regex_gender" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Date of birth</td>
			<td>
				<input type="date" name="date_of_birth">
				<span id="span_regex_date_of_birht" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<textarea id="address" name="address"></textarea>
				<span id="span_regex_address" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" id="email" name="email">
				<span id="span_regex_email" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" id="password" name="password">
				<span id="span_regex_password" class="span_regex"></span>
			</td>
		</tr>
		<tr>
			<td>Interests</td>
			<td>
				<select name="interests">
					<option>chơi game</option>
					<option>nghe nhạc</option>
					<option>vẽ tranh</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
	<input type="submit" onclick="return check_regex()" name=""></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	function check_regex() {
		let regex_check = true;
		let regex;

		let name = document.getElementById('name').value;
		regex = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(\ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)+$/;
		if(!regex.test(name))
		{
			document.getElementById('span_regex_name').innerHTML = "Tên không hợp lệ! (Tên không chứa các ký tự đặc biệt )";
			regex_check = false;
		}
		else
		{
			document.getElementById('span_regex_name').innerHTML = '';
		}
		
		let username = document.getElementById('username').value;
		regex = /^(?=.*[a-zA-Z])[\w._]{8,20}$/;
		if(!regex.test(username))
		{
			document.getElementById('span_regex_username').innerHTML = "Username không hợp lệ! (dài từ 8-20 ký tự, chứa các kí tự a-z,A-Z,0-9,dấu .,dấu _ )";
			regex_check = false;
		}
		else
		{
			document.getElementById('span_regex_username').innerHTML = '';
		}
		
		let gender_array = document.getElementsByName('gender');
		if(!(gender_array[0].checked || gender_array[1].checked))
		{
			document.getElementById('span_regex_gender').innerHTML = "Giới tính không được để trống!";
			regex_check = false;
		}
		else
		{
			document.getElementById('span_regex_gender').innerHTML = '';
		}
		
		let address = document.getElementById('address').value;
		if(address.length === 0)
		{
			document.getElementById('span_regex_address').innerHTML = "Địa chỉ không được để trống!";
			regex_check = false;
		}
		else
		{
			document.getElementById('span_regex_address').innerHTML = '';
		}
		
		let email = document.getElementById('email').value;
		regex = /^\w+@\w+(\.\w+)+$/;
		if(!regex.test(email))
		{
			document.getElementById('span_regex_email').innerHTML = "Mail không hợp lệ!";
			regex_check = false;
		}
		else
		{
			document.getElementById('span_regex_email').innerHTML = '';
		}
		
		let password = document.getElementById('password').value;
		regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,}$/;
		if(!regex.test(password))
		{
			document.getElementById('span_regex_password').innerHTML = "Mật khẩu không hợp lệ! (mật khẩu phải chứa ít nhất 8 ký tự, ít nhất 1 chữ cái thường, 1 chữ cái in hoa và 1 số)";
			regex_check = false;
		}
		else
		{
			document.getElementById('span_regex_password').innerHTML = '';
		}

		if(regex_check)
			return true;
		else
			return false;
	}
</script>
</body>
</html>
