<?php
$user=filter_input(INPUT_POST,"username");
$pass=filter_input(INPUT_POST,"password");

if(!empty($user) and $user=="adminBCA"){
    if(!empty($pass) and $pass="admin123B"){
        header("location:attensheet(BCA).php");
    }
    else{
        echo "<script> alert('password must be required.'); </script>";
    }
}
else{
    echo "<script> alert('username must be required.'); </script>";
}
?>