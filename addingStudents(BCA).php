<style>
    .btn1{
        "display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    }
    .btn1:hover{
        background-color: green;
    }
    input{
        padding:7px;
    }
</style>
<body style="background-color:#add1e9;"> 
<center>
<form action="" method="POST" style="margin-top: 250px;">

    <input type="text" name="student_name" placeholder="student_name" required autofocus/> 
    <input type="submit" value="Add Student" name="submit" class="btn1" style=" cursor: pointer;"><br><br><br>
    <button><a href="attensheet(BCA).php" style="display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    
">View_Attandance_Record(bca)</a></button></html>
</form>
</center></body>
<?php
if(isset($_POST['submit']))
{
require_once("config.php");
    $student_name = $_POST['student_name'];

    $sql= "INSERT INTO student_bca(student_name) VALUE ('$student_name')";
$exeQuery = mysqli_query($db,$sql) OR die (mysqli_error($db));

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."student has been added successfully!";
}
?>
