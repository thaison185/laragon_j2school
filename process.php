<?php

$name = $_POST['name'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$interests = $_POST['interests'];

echo nl2br ("form that u just sumit:\n");
echo nl2br ("name: $name\n");
echo nl2br ("username: $username\n");
echo nl2br ("gender: ");
if($gender == 1)
	echo nl2br ("male\n");
else
	echo nl2br ("female\n");
echo nl2br ("date of birth: $date_of_birth\n");
echo nl2br ("address: $address\n");
echo nl2br ("email: $email\n");
echo nl2br ("password: $password\n");
echo nl2br ("interests: $interests\n");