<?php

include_once 'config.php';

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$passwordHash = password_hash($password, PASSWORD_DEFAULT);

	if (empty($name) || empty($email) || empty($password) ) {
	
		echo "You need to fill all the fields";
		header("refresh:2; url=signup.php");

	}
	else{

		$sql = "SELECT email FROM users WHERE email=:email";

		$tempSql = $con->prepare($sql);
		$tempSql->bindParam(":email", $email);
		$tempSql->execute();

		if ($tempSql->rowCount() > 0) {
			echo "This email has already been used to open an acount!";
			header("refresh:2; url=signup.php");

		}
		else{

			$sql = "INSERT INTO users(username, email, password) VALUES (:username, :email, :password)";

			$sqlQuery = $con->prepare($sql);

			$sqlQuery->bindParam(":username", $name);
			$sqlQuery->bindParam(":email", $email);
			$sqlQuery->bindParam(":password", $passwordHash);

			$sqlQuery->execute();

			header("Location: login.php");
		}
	}
}
?>