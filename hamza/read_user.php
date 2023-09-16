<?php
include './database.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("error".mysqli_error($connection));
    }
        
     
?>
<?php include './template/header.php' ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="btn-group my-3 gap-2">
            <a href="./create_user.php"><button class="btn btn-primary">Create</button></a>
            <a href='update_user.php'><button class='btn btn-warning'>Update</button></a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr class="">
                <?php
                    print_r('<td>'.$row['id'].'</td>');
                    print_r('<td>'.$row['username'].'</td>');
                    print_r('<td>'.$row['password'].'</td>');
                    print_r('<td>'."<a href='./delete_user.php'><button class='btn btn-sm btn-danger'>Delete</button></a>".'</td>');
                ?>
                </tr>
            <?php
                }    
            ?>
            </tbody>
        </table>
    </div>
    
<!--    
    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td> -->
    <pre>
        
    </pre>
    
    </div>
</div>
<?php include './template/footer.php' ?>