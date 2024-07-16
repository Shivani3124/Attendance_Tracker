<?php

$user=filter_input(INPUT_POST,"username");
$email=filter_input(INPUT_POST,"email");
$pass=filter_input(INPUT_POST,"password");


if(!empty($user)){
    if(!empty($pass)){
      $host="localhost";
      $username="root";
      $dbpassword="";
      $db_name="mca1";

        $conn= new mysqli($host,$username,$dbpassword,$db_name);

        if(mysqli_connect_error()){
            echo "connection error";
        }
        else {

            $sql= "INSERT INTO register (username,email,password)
                  VALUES ('$user','$email','$pass')";

                  if($conn->query($sql)){
                    header("location:login.php");
        }
        $conn->close();
    }
}
    else{
        echo "<script> alert('password must be required.'); </script>";
    }

}
else{
    echo "<script> alert('username must be required.'); </script>";
}

?>