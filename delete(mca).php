<style>
    .btn2{
        "display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    }
    .btn2:hover{
        background-color: green;
    }
    input{
        padding:7px;
    }
</style>
<body style="background-color:#add1e9;">
<center>
<form action="" method="POST" style="margin-top: 250px;"> 

    <input type="text" name="student" placeholder="student_name" required autofocus/> 
    <input type="submit" value="delete Student" name="delete" class="btn2"><br><br><br>
    <button><a href="attensheet(MCA).php" style="display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    
">View_Attandance_Record(mca)</a></button></html>
</form>
</center>
<?php
if(isset($_POST['delete']))
{
require_once("config.php");
    $student_name = $_POST['student'];

    $sql= "DELETE FROM student_attendance WHERE student_name='$student_name'";
$exeQuery = mysqli_query($db,$sql) OR die (mysqli_error($db));

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."student has been deleted successfully!";
}
?>
