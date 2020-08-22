<?php
require_once("db.php");
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://":"http://") . $_SERVER['HTTP_HOST'] . "/user";

session_start();

if(isset($_POST['act'])) {
    switch ($_POST['act']) {
        case 'kritiksaran':
            echo json_encode(['data' => $_POST['textbox']]);
            $textbox = $_POST['textbox'];
            $iduser = $_POST['idUser'];
            $sql= "INSERT INTO kritik_saran (id_user,kritik) VALUES ('$iduser','$textbox')";
            echo var_dump($sql);

            if($conn ->query($sql) === TRUE){
                echo "New record created successfully";
            }else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
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
	        		$logged_in_user = mysqli_fetch_assoc($results);
	        		$_SESSION['user'] = $logged_in_user;
	        		$_SESSION['success']  = "You are now logged in";
	        		$_SESSION['username'] = $logged_in_user['username'];
	        		$_SESSION['nama_lengkap'] = $logged_in_user['nama_lengkap'];
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

        case 'getInvoiceDetail':
            $oid = $_POST['order_id'];
            $invoice = $conn->query("SELECT * FROM tbl_order_item WHERE order_id='$oid'");
            echo json_encode($invoice->fetch_all(MYSQLI_ASSOC));
            break;

        case 'signup':
            // echo var_dump($_POST);
            $username=$_POST["username"];
            $nama_lengkap=$_POST["nama_lengkap"];
            $email=$_POST["email"];
            $user_type="user";
            $password=md5($_POST["password"]);
            $mobile_number=$_POST["mobile_number"];
            $address=$_POST["address"];
            $id_location=0;
            $sql = "INSERT INTO users (username, nama_lengkap, email, user_type, password, mobile_number, address, id_locations)
            VALUES ('$username', '$nama_lengkap', '$email', '$user_type', '$password', '$mobile_number', '$address', '$id_location')";

            // echo var_dump($sql);
            if ($conn->query($sql) === TRUE) {
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
	        	$results = mysqli_query($conn, $query);

                if (mysqli_num_rows($results) == 1) { // user found
                    // check if user is admin or user
	        		$logged_in_user = mysqli_fetch_assoc($results);
	        		$_SESSION['user'] = $logged_in_user;
	        		$_SESSION['success']  = "You are now logged in";
	        		$_SESSION['username'] = $logged_in_user['username'];
	        		$_SESSION['nama_lengkap'] = $logged_in_user['nama_lengkap'];
	        		$_SESSION['userid'] = $logged_in_user['id'];
	        		$_SESSION['email'] = $logged_in_user['email'];
	        		$_SESSION['mobile'] = $logged_in_user['mobile_number'];
                    $_SESSION['address'] = $logged_in_user['address'];
                }

                $data["status"]=1;
                echo json_encode($data);
            //   echo "New record created successfully";
            } else {
                $data["status"]=-1;
                $data["message"]="Failed to sign up, please try again later";
                echo json_encode($data);
            //   echo "Error: " . $sql . "<br>" . $conn->error;
            }
            break;

        case 'logout':
            session_destroy();
            if(!isset($_SESSION["iduser"])){
                $data["status"]=1;
                echo json_encode($data);
            }
            else{
                $data["status"]=-1;
                $data["message"]="Error while destroying the session";
                echo json_encode($data);
            }
            break;

        case 'invoiceToPDF':
            $td = json_decode($_POST['transactionData'], true);
            $oid = $td['order_id'];
            $od = $td['order_date'];
            $iq = $conn->query("SELECT * FROM tbl_order_item WHERE order_id='$oid'");
            $invoice = $iq->fetch_all(MYSQLI_ASSOC);

            $html = file_get_contents("pdf_templates/invoice.html");
            $html = str_replace("{nama_lengkap}", $_SESSION['nama_lengkap'], $html);
            $html = str_replace("{alamat}", $_SESSION['address'], $html);
            $html = str_replace("{order_id}", $oid, $html);
            $html = str_replace("{order_date}", $od, $html);

            $tbl = "";
            $totalBeforeTax = $totalTax = $totalAfterTax = 0.0;
            foreach ($invoice as $i => $inv) {
                $ct = $i+1;
                $tbl.="<tr>"
                ."<td>$ct</td>"
                ."<td>".$inv['item_name']."</td>"
                ."<td>".$inv['order_item_quantity']."</td>"
                ."<td>".$inv['order_item_price']."</td>"
                ."<td>".$inv['order_item_actual_amount']."</td>"
                ."<td>".$inv['order_item_tax1_rate']."</td>"
                ."<td>".$inv['order_item_tax1_amount']."</td>"
                ."<td>".$inv['order_item_final_amount']."</td>"
                ."</tr>";
                $totalBeforeTax+=$inv['order_item_actual_amount'];
                $totalTax+=$inv['order_item_tax1_amount'];
                $totalAfterTax+=$inv['order_item_final_amount'];
            }
            $html = str_replace("{table_body}", $tbl, $html);
            $html = str_replace("{totalBeforeTax}", number_format($totalBeforeTax, 2, '.', ''), $html);
            $html = str_replace("{totalTax}", number_format($totalTax, 2, '.', ''), $html);
            $html = str_replace("{totalAfterTax}", number_format($totalAfterTax, 2, '.', ''), $html);

            // echo $html;
            $dompdf = new Dompdf();
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->loadHtml($html);

            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream("invoice_".$oid."_".$od.".pdf");
            break;
        default:
            echo json_encode(['data' => 'No Data!']);
            break;
    }
}

?>
