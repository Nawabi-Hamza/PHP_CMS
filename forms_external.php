<?php
    if(isset($_POST['submit'])){
        $arrayNames = ['hamza','ali_admin','shafi'];
        $username = $_POST['uesrname'];
        $password = $_POST['password'];
        $min = 5 ;
        $max = 7 ;
        if(strlen($username)<$min){
            echo 'your name should be more then ' . $min . 'character<br>';
        }
        if(in_array($username,$arrayNames)){
            echo 'This username exist please select another user name';
        }
        else{
            echo 'welcome <br>';
            echo 'your name is '.$username.'<br>';
            echo 'and your password is '.$password.'<br>';
        }

    }
?>