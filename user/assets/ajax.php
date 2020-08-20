<?php
require_once("db.php");

if(isset($_POST['act'])) {
    switch ($_POST['act']) {
        case 'getJenisBarang':
            echo json_encode(['data' => 'kontol']);
            break;

        case 'kritiksaran':
            echo json_encode(['data' => $_POST['textbox']]);
            break;

        case 'login':
            // echo json_encode($_POST);
            $data=array();
            $errors=array();
            $username = $_POST['username'];
            $password = $_POST['password'];

	        // make sure form is filled properly
	        if (empty($username)) {
                $data["status"]=-1;
                $data["message"]="Username is required";
                array_push($errors, "Username is required");
                echo json_encode($data);
	        }
	        if (empty($password)) {
                $data["status"]=-1;
                $data["message"]="Password is required";
                array_push($errors, "Password is required");
                echo json_encode($data);
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
                    $data['status']=1;
                    echo json_encode($data);
	        	}else {
                    $data["status"]=-1;
                    $data["message"]="Wrong username/password combination";
                    array_push($errors, "Wrong username/password combination");
                    echo json_encode($data);
	        	}
	        }
            break;


        default:
            echo json_encode(['data' => 'No Data!']);
            break;
    }
}

?>
