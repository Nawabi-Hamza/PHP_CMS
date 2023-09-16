<?php
include "./connection.php";
// show user id
function showIdOption(){
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query error: ".mysqli_error($conn));
    }
    while($rows = mysqli_fetch_assoc($result)){
        $id = $rows['id'];
        echo "<option value='$id'>$id</option>";
    }
}

// create new users
function createUser(){
    global $conn;
    $name = $_POST['username'];
    $password = $_POST['password'];
   
    $query = "INSERT INTO users (username,password) VALUES ('$name','$password')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query error: ".mysqli_error($conn));
    }else{
        echo "welcome $name your password is $password";
    }
}

// delete user 
function deleteUser(){
    global $conn;
        $id = $_POST['id'];
        $query = "DELETE FROM users WHERE id='$id'";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Error " . mysqli_error($conn));
        }else{
            echo "user deleted successfuly...";
        }
}


// update user
function updateUser(){
    global $conn;
        $name = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET username='$name',password='$password' WHERE id='$id'";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Error " . mysqli_error($conn));
        }else{
            echo "$name updated successfuly...";
        }
}


// show users

function fetchUsers(){
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query error: ".mysqli_error($conn));
    }
    while($row=mysqli_fetch_assoc($result)){
        
       echo ' <pre class="bg-light my-3 p-2">';
        
                echo "<h5 class='text-primary'>".$row['username']."</h5>";
                print_r($row);
    
        echo '</pre>';
        
            }
}
?>