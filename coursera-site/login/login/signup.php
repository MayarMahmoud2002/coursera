<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was post

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$courses = $_POST['courses'];


	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$id = random_num(20);
		$query = "insert into registration (id,user_name,password,courses) values ('$id','$user_name','$password','$courses')";

		mysqli_query($con, $query);

		header("Location: success.html");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>3amk saleh</title>
</head>

<body>

	<h1 style="font-size:80px; text-align: center;font-style: italic; color: blue;">Coursera Courses</h1>
	<h1 style="font-size: 40px; text-align: left">About Us :</h1>
	<p style="font-size: 25px">
		Coursera Courses is a global company that offers courses in all scientific disciplines to students around the
		world for free at the hands of specialists around the world , If you want to know more about us, visit this
		<a href="https://ar.wikipedia.org/wiki/%D9%83%D9%88%D8%B1%D8%B3%D9%8A%D8%B1%D8%A7" style="font-style:italic ; font-size: 30 ; color: blue ;">
			Website </a>
	<h1 style="font-size: 40px; text-align: left"> Availabe courses :</h1>



	<details style="margin:30px; ">
		<summary>programming courses </summary>
		<p>C++ Language</p>
		<p>Python Language</p>
		<p>Java Language</p>
		<p\>Php Language</p>

	</details>

	<details style="margin:30px; ">
		<summary>Medical courses </summary>
		<p> Thermometer</p>
		<p>Stethoscope</p>
		<p>Endoscope</p>
		<p\>plain x -ray</p>

	</details>

	<details style="margin:30px; ">
		<summary>Language courses </summary>
		<p> English</p>
		<p>Turkey</p>
		<p>German</p>
		<p\>French</p>

	</details>

	<details style="margin:30px; ">
		<summary>Rights courses </summary>
		<p>Criminal Science</p>
		<p>Human Rights</p>
		<p>Women's Studies</p>
		<p\>Political Science</p>

	</details>


	<embed src="coursera1.png " width="350" style="margin-left: 1000px; margin-top: -250px;">

	</h1>
	</p>
	<embed src="Coursera.gif " width="450" style=" -webkit-margin-start: 30px ;margin-bottom: -350px;">
	<h1 style="font-size: 40px; text-align:left ; margin-left: 800px;">Create An Account </h1>

	<style type="text/css">
		#text {

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button {

			padding: 10px;
			width: 100px;
			color: white;
			background-color: black;
			border: none;
		}

		#box {

			background-color: whitesmoke;
			margin: auto;
			width: 400px;
			padding: 20px;
		}
	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Sign up</div>

			<input id="text" type="text" placeholder="User Name" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Password" name="password"><br><br>
			<label class="course" style="margin: 0 70px 0px 5px; ">choose your course : </label>
			<select name="courses" id="coures">
				<option value="programming courses">programming courses</option>
				<option value="Medical courses">Medical courses</option>
				<option value="Language courses">Language courses</option>
				<option value="Rights courses">Rights courses</option>
			</select> <br><br>
			
			<input id="button" type="submit" value="Sign up"><br><br>

			<a href="login.php">Click to Login if you already have an Account</a><br><br>
		</form>
	</div>
</body>

</html>