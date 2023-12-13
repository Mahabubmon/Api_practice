<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"), true);


$uname = $data['uname'];
$uusername = $data['uusername'];
$uemail = $data['uemail'];
$uaddress = $data['uaddress'];

include 'db.php';

$sql = "INSERT INTO user_tbl(name, username, email, address) VALUES ('{$uname}','{$uusername}','{$uemail}','{$uaddress}')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'User Record Inserted.', 'status' => true));

} else {
    echo json_encode(array('message' => 'User Record Not Inserted.', 'status' => false));
}


?>