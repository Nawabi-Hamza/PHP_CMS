<?php

$conn = mysqli_connect(
    hostname:'localhost',
    username:'root',
    password:'admin',
    database:'roxo'
);


if(!$conn){
    // die for stop the
    die('Error to connection ...');
}

?>