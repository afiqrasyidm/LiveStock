<?php
	require 'database.php';

	function newuser()
	{
		$conn = connectDB();

		$fullname = test_input($_POST['fullname']);
		$username = test_input($_POST['username']);
		$email = test_input($_POST['email']);
		$password =  password_hash($_POST['password'], PASSWORD_BCRYPT);
		$noHp = test_input($_POST['no_hp']);

		$query = "INSERT INTO user(fullname,username,password,email,no_hp) VALUES ('$fullname','$username','$password','$email','$noHp')";

		$data = $conn->query($query)or die($conn->connect_error);
		if($data)
		{
			echo "<script>
				window.location.href='index.php';
				alert('Your Registration is Success');
				</script>";
		}else{
			echo "<script>
				window.location.href='index.php';
				alert('Your Registration is Failed');
				</script>";
		}
	}

	function SignUp()
	{
		$conn = connectDB();

	if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
	{
		$query = $conn->query("SELECT * FROM user WHERE username = '$_POST[username]'") or die($conn->mysqli_error());

		if(!$row = mysqli_fetch_array($query))
		{
			newuser();
		}
		else
		{
			echo "<script>
				window.location.href='index.php';
				alert('You are already registered');
				</script>";;
		}
	}
	}
	if(isset($_POST['submit']))
	{
		SignUp();
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>