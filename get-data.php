<?php
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

$servername = "localhost";
$username = "wwwsatin_mail";
$password = "mail@2018";
$dbname = "wwwsatin_mail";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$data = json_decode(file_get_contents("php://input"),true);


$name = $data['name'];
$mobile= $data['mobile_number'];
$email = $data['email'];
$body = $data['data_given'][0];
$status = $data['data_given'][1];
$session = $data['data_given'][2];
$remarks = $data['data_given'][3];

if(isset($mobile))
{

    $sql = "INSERT INTO `register_mail` (`name`, `mobile`, `email`, `body`, `status`, `session`, `remarks`) VALUES ('$name', '$mobile', '$email', '$body', '$status', '$session', '$remarks')";
    
    if (mysqli_query($conn, $sql)) {
    //    echo "New record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);


// --------------------------------------
$response = array(
'key' => 200,
'message' => 'Success'
);

/*
require 'PHPMailerAutoload.php';

$to      = 'rajpraba14@gmail.com';
$subject = 'First Mail';
$message = 'hello';
$headers = 'From: info@satinskin.in' . "\r\n" .
    'Reply-To: info@satinskin.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
*/
echo json_encode($response);

?>