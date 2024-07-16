<?php
session_start();

$user=$_POST['username'];
$password=$_POST['password'];


$host="localhost";
$dbuser="root";
$dbpassword="";
$database="mca1";

$conn= mysqli_connect($host,$dbuser,$dbpassword,$database);

// $sql="SELECT * FROM register WHERE username ='$user' and password ='$password'";
$sql= "SELECT * FROM register WHERE username='$user' and   password = '$password'";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['name']=$user;
    header("location:home1.html");
}
else{
    echo "<script> alert('incorrect username or password') </script>";
}

?>