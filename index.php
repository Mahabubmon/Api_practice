<?php
include 'data-api.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
</head>

<body>
    <div class="container mt-4">
        <form id="addUserForm">
            <div class="mb-3">
                <label for="uname" class="form-label">Name</label>
                <input type="text" class="form-control" id="uname" name="uname" required>
            </div>
            <div class="mb-3">
                <label for="uusername" class="form-label">Username</label>
                <input type="text" class="form-control" id="uusername" name="uusername" required>
            </div>
            <div class="mb-3">
                <label for="uemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="uemail" name="uemail" required>
            </div>
            <div class="mb-3">
                <label for="uaddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="uaddress" name="uaddress" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="addUser()">Add User</button>
        </form>
        <hr>
        <table id="userTable" class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $user) {
                    echo "<tr>
                    <td>{$user['id']}</td>
                    <td>{$user['name']}</td>
                    <td>{$user['username']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['address']}</td>
                    <td><button class='btn btn-warning btn-edit'  id='btnedit' data-id='" . $user['id'] . "'>Edit</button><button  id='btndel' class='btn btn-danger btn-delete' style='margin-left: 5px;'  data-id='" . $user['id'] . "' onclick='deleteUser(" . $user['id'] . ")' >Delete</button></td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>







</body>

</html>

<script>
    // Function to add a new user
    function addUser() {
        // Get form data
        var formData = {
            uname: $("#uname").val(),
            uusername: $("#uusername").val(),
            uemail: $("#uemail").val(),
            uaddress: $("#uaddress").val(),
        };

        // Make a POST request to insert data
        $.ajax({
            type: "POST",
            url: "api-insert.php", // Replace with the actual path to your PHP script
            data: JSON.stringify(formData),
            contentType: "application/json",
            success: function (response) {
                // Reload the table with updated data
                $('#userTable').DataTable().ajax.reload();
                // Clear the form fields
                $('#addUserForm')[0].reset();
            },
            error: function (error) {
                console.error("Error adding user:", error);
            }
        });
    }

    $(document).ready(function () {
        // Initialize DataTable
        $('#userTable').DataTable();
    });






    function deleteUser(userId) {
        $.ajax({
            type: "DELETE",
            url: "api-delete.php", // Replace with the actual path to your PHP delete script
            data: JSON.stringify({ uid: userId }),
            contentType: "application/json",
            success: function (response) {
                // Reload the table with updated data
                $('#userTable').DataTable().ajax.reload();
            },
            error: function (error) {
                console.error("Error deleting user:", error);
            }
        });
    }
</script>