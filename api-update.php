<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"), true);


$id = $data['uid'];
$uname = $data['uname'];
$uusername = $data['uusername'];
$uemail = $data['uemail'];
$uaddress = $data['uaddress'];

include 'db.php';

$sql = "UPDATE user_tbl SET name ='{$uname}', username = '{$uusername}' , email = '{$uemail}', address = '{$uaddress}' WHERE id = '{$id}';

if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'User Record Inserted.', 'status' => true));

} else {
    echo json_encode(array('message' => 'User Record Not Inserted.', 'status' => false));
}


?>