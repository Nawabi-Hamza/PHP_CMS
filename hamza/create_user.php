<?php
include "./database.php";
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $min = 3;
    if(strlen($name)<$min || strlen($password)<$min){
            echo "<h6 class='text-center text-success my-3'>your name and password should be more then $min character !</h6>";
            // echo "";
    }else{
        $query = "INSERT INTO users (username,password) VALUES ('$name','$password')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("error: ".mysqli_error($connection));
        }else{
            echo "<h1 class='text-center text-success'>Welcome $name</h1>";
        }
    }
}



?>

<?php include "./template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 my-3">
            <a href="read_user.php" class="">
                <button class="btn btn-success my-2">Read User</button>
            </a>
            <form action="create_user.php" method="post" class="form-control  py-5 px-3">
                <h1 class="text-center text-success">Create User</h1>
                <label for="name">Username:</label>
                <input type="text" name="username" class="form-control mt-3">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control my-3">
                <button class="btn btn-success" type="submit" name="submit">Save</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php include "./template/footer.php"; ?>
