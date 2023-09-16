<?php
    // include './functions.php';
    // showUsers();
    // global $conn;
    include './connection.php';
    include './functions.php';
?>



<?php
include './template/header.php';
?>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-4 p-4">
            <h3>Read User</h3>

                <?php
                    fetchUsers();     
                ?>
            </div>
        </div>
    </div>
<?php
include './template/footer.php';
?>