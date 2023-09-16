<?php
include "./database.php";
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "Something went wrong ...";
    }
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    // print_r($id);
    $query = "UPDATE users SET username='$name' , password='$password' WHERE id = '$id'";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('error');
    }else{
        echo "$name Updated Successfuly....";
    }
}

?>


<?php include "./template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 my-3">
            <div class="btn-group gap-2">
                <a href="read_user.php" class="">
                    <button class="btn btn-success my-2">Show User</button>
                </a>
                <a href="create_user.php" class="">
                    <button class="btn btn-success my-2">Create User</button>
                </a>
            </div>
            <form action="update_user.php" method="post" class="form-control  py-5 px-3">
                <h1 class="text-center text-success">Update User</h1>
                <label for="name">Username:</label>
                <input type="text" name="username" class="form-control mt-3">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control my-3">
                <label for="" class="form-label">User ID:</label>
                    <select class="form-select form-select-lg mb-3" name="id" id="">
                        <option selected>Select User</option>
                        <?php 
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $name = $row['username']
                        ?>
                        <?php 
                            echo "<option value='$id' >".$id.' : '.$name.'</option>'  ;
                        ?>
                        <?php 
                            }
                        ?>
                    </select>
                <button class="btn btn-success" type="submit" name="submit">Update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php include "./template/footer.php"; ?>