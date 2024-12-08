<?php

require 'config.php';

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$password = $_POST["password"];

	if (empty($email) || empty($password)) {
		echo "fill all the fields!";
		header("refresh:2; url=login.php");
	}
	else{

		$sql = "SELECT * FROM users WHERE email=:email";

		$insertSQL = $con->prepare($sql);
		$insertSQL->bindParam(":email", $email);
		$insertSQL->execute();

		if($insertSQL->rowCount() > 0){

			$data = $insertSQL->fetch();

			if (password_verify($password, $data["password"])) {
				
				$_SESSION['username'] = $data["username"];
				$_SESSION['admin'] = $data["admin"];

				header("Location:index.php");

			}else{
				echo "Password Incorrect!!";
				header("refresh:2; url=login.php");
			}

		}else{
			echo "User not found!";
		}
	}
}

?>