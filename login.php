<?php
	require 'database.php';

	$loginbisa="";
	$error= "";

	if(isset($_POST['username'])){
		if(login($_POST['username'], $_POST['password'])){
			//tambahkan session, kemudian redirect
			 session_start();
			 $loginbisa = "HAHA";
			
			$username = $_POST['username'];

			$conn = connectDB();

			$sql = "SELECT username, email FROM user WHERE username = '$username'";

			$checkUserData = $conn->query($sql);

			$userData = $checkUserData->fetch_assoc();

			$_SESSION['username'] = $userData["username"];
			$_SESSION['email'] = $userData["email"];
			
			
			echo "<script>
				window.location.href='index.php';
				alert('Login success');
				</script>";
		}else{
			echo "<script>
				window.location.href='index.php';
				alert('invalid username/password');
				</script>";
		}
	}

	function login($username, $password){
		
		//validate()
		//cek ke database
		$conn = connectDB();
		
		$checkUser = "SELECT username, password FROM user WHERE username='$username'";
		$resultCheckUser = $conn->query($checkUser);
		


		if($resultCheckUser->num_rows > 0 && $row = mysqli_fetch_assoc($resultCheckUser)){
			$dbpassword = $row['password'];
			if(password_verify($password,$dbpassword)){
				$conn->close();
				return true;
			}
		}
		else {
		
			$conn->close();
			return false;
		}
	}
?>