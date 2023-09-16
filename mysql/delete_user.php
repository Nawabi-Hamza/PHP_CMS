<?php
    include './functions.php';
    if(isset($_POST['submit'])){
        deleteUser();        
    }
?>



<?php include './template/header.php'; ?>
<div class="container">
        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-xs-4 col-xs-offset-4 w-50">
                <h3>Delete User</h3>
                <form action="delete_user.php" method="post">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="id">User</label>
                        <select name="id" id="id" class="form-control">
                            <?php
                                showIdOption()
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-danger my-5">Delete</button>
                </form>
            </div>
        </div>
    </div>
 <?php include './template/footer.php'; ?>