<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $password = $_POST['password'];
        echo "your name is $name and your password $password";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bs.min.css">
    <script src="../assets/bs.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-xs-4 col-xs-offset-4 w-50">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success my-3">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>