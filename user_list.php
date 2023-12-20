<?php
// include 'data-api.php';
// if ($_POST('type') == 'Data_show') {
//     foreach ($result as $user) {
//         echo "<tr>
//                     <td>{$user['id']}</td>
//                     <td>{$user['name']}</td>
//                     <td>{$user['username']}</td>
//                     <td>{$user['email']}</td>
//                     <td>{$user['address']}</td>
//                     <td><button class='btn btn-warning btn-edit'  id='btnedit' data-id='" . $user['id'] . "'>Edit</button><button  id='btndel' class='btn btn-danger btn-delete' style='margin-left: 5px;'  data-id='" . $user['id'] . "' onclick='deleteUser(" . $user['id'] . ")' >Delete</button></td>
//                     </tr>";
//     }
// }
?>


<?php
// include 'db.php';
// $sql = "SELECT * FROM student ORDER BY id DESC";
// $result = mysqli_query($conn, $sql);
include 'data-api.php';

if ($_POST['type'] == 'Data_show') {
    $output = "";
    foreach ($result as $user) {
        $output .= "<tr>
                    <td>{$user['id']}</td>
                    <td>{$user['name']}</td>
                    <td>{$user['username']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['address']}</td>
                    <td><button class='btn btn-warning btn-edit'  id='btnedit' data-id='" . $user['id'] . "'>Edit</button><button  id='btndel' class='btn btn-danger btn-delete' style='margin-left: 5px;'  data-id='" . $user['id'] . "' onclick='deleteUser(" . $user['id'] . ")' >Delete</button></td>
                    </tr>";
    }
    echo $output;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>