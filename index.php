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
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>

<script>




</script>