<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"), true);


$userId = $data['uid'];

include 'db.php';

$sql = "DELETE FROM user_tbl WHERE id = {$userId} ";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Data Deleted.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Data Not Deleted.', 'status' => false));
}


?>