<?php
	session_start();
	include 'database.php';
	if (isset($_POST['login'])) {
        
        $name = ($_POST['email']);
        $password = ($_POST['password']);
        
        $sql = "SELECT * FROM `second` WHERE `Password` = '$password' AND `email`= '$email' AND `type`='user'";
        $result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['user'] = $name;
            echo '<script>alert("Login Successfull"); window.location.href="index.php";</script>';
        } else {
                echo '<script>alert("Login Error:"); window.location.href = "signup.php"</script>';
        }
	}
?>