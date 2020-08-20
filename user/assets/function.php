<?php
require 'db.php';
    $errors=array();
    if($_POST["act"]=="login"){

	    $username = $_POST['username'];
	    $password = $_POST['password'];

	    // make sure form is filled properly
	    if (empty($username)) {
	    	array_push($errors, "Username is required");
	    }
	    if (empty($password)) {
	    	array_push($errors, "Password is required");
	    }

	    // attempt login if no errors on form
	    if (count($errors) == 0) {
	    	$password = md5($password);

	    	$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
	    	$results = mysqli_query($conn, $query);

	    	if (mysqli_num_rows($results) == 1) { // user found
                // check if user is admin or user
                session_start();
	    		$logged_in_user = mysqli_fetch_assoc($results);
	    		$_SESSION['user'] = $logged_in_user;
	    		$_SESSION['success']  = "You are now logged in";
	    		$_SESSION['username'] = $logged_in_user['username'];
	    		$_SESSION['userid'] = $logged_in_user['id'];
	    		$_SESSION['email'] = $logged_in_user['email'];				
	    		$_SESSION['mobile'] = $logged_in_user['mobile_number'];
                $_SESSION['address'] = $logged_in_user['address'];
                echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."'</script>";
	    	}else {
	    		array_push($errors, "Wrong username/password combination");
	    	}
	    }
    }
?>