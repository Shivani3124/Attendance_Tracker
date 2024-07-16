<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
<body style="background-color:#add1e9;">

<h1 style="margin-left:300px; text-shadow:3px 4px 6px #3498db;">CLASS : BCA(Bachelor of computer Application)</h1>
<table border="1" cellspacing="0px" style="width:100%; text-align:center; background-color: rgb(202, 216, 226);">
    <form action="" method="POST">
<tr>
    <th style="text-align:center;">Student Name</th>
    <th style="text-align:center;">P</th>
    <th style="text-align:center;">A</th>
    <th style="text-align:center;">L</th>
    <th style="text-align:center;">H</th>
</tr>
<?php
require_once("config.php");
$fetchingStudents = mysqli_query($db,"SELECT * FROM student_bca") OR die (mysqli_error($db));

while($data = mysqli_fetch_assoc($fetchingStudents))
{
    $student_name=$data['student_name'];
    $student_id =$data['id'];
    ?>

    <tr>
        <td><?php echo $student_name; ?></td>
        <td><input type="checkbox" name="studentPresent[]" value="<?php echo $student_id; ?>"></td>
        <td><input type="checkbox" name="studentAbsent[]" value="<?php echo $student_id; ?>"></td>
        <td><input type="checkbox" name="studentLeave[]" value="<?php echo $student_id; ?>"></td>
        <td><input type="checkbox" name="studentHoliday[]" value="<?php echo $student_id; ?>"></td>

    </tr>
    <?php


    
}
?>
<tr>
    <td style="background-color:#3498db;">select date (optional)</td>
    <td colspan="4" style="background-color:rgb(170, 238, 235);" ><input type="date" name="selected_date"></td>
</tr>
<tr>
    <td colspan="5" style="background-color:rgb(194, 207, 207)">
    <!-- <input style="background-color: #509aca; padding: 7px 20px;" type="submit" name="addAttendanceBTN"> -->
    <input class="btn btn-primary" type="submit" value="Submit" name="addAttendanceBTN">
</td>
</tr>
    </form>
    </table>
    <button><a href="attensheet(BCA).php" style="display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    
">View_Attandance_Record(bca)</a></button>
   <button><a href="addingStudents(BCA).php" style="display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    
">Add Student</a></button>
  <button><a href="delete(bca).php" style="display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    
">Delete Student</a></button>
    <?php
    
    if(isset($_POST['addAttendanceBTN']))
    {
        if($_POST['selected_date']== NULL)
        {
$selected_date = date("Y-m-d");
        }
        else{
            $selected_date = $_POST['selected_date']; 
        }
    $attendance_month = date("M",strtotime($selected_date));
    $attendance_year = date("Y",strtotime($selected_date));

    if(isset($_POST['studentPresent'])){
        $studentPresent=$_POST['studentPresent'];
        $attendance="p";
        foreach($studentPresent as $std){
            mysqli_query($db,"INSERT INTO atten_bca (student_id,curr_date,attendance_month,attendance_year,attendance) 
            VALUES('".$std."','".$selected_date."','".$attendance_month."','".$attendance_year."','".$attendance."')") 
            OR die (mysqli_error($db));
        }
        // $query=

    }
    if(isset($_POST['studentAbsent'])){
        $studentAbsent=$_POST['studentAbsent'];
        $attendance="A";
        foreach($studentAbsent as $std){
            mysqli_query($db,"INSERT INTO atten_bca (student_id,curr_date,attendance_month,attendance_year,attendance) 
            VALUES('".$std."','".$selected_date."','".$attendance_month."','".$attendance_year."','".$attendance."')") 
            OR die (mysqli_error($db));
        }

    }
    if(isset($_POST['studentLeave'])){
        $studentLeave=$_POST['studentLeave'];
        $attendance="L";
        foreach($studentLeave as $std){
            mysqli_query($db,"INSERT INTO atten_bca (student_id,curr_date,attendance_month,attendance_year,attendance) 
            VALUES('".$std."','".$selected_date."','".$attendance_month."','".$attendance_year."','".$attendance."')") 
            OR die (mysqli_error($db));
        }

    }
    if(isset($_POST['studentHoliday'])){
        $studentHoliday=$_POST['studentHoliday'];
        $attendance="H";
        foreach($studentHoliday as $std){
            mysqli_query($db,"INSERT INTO atten_bca (student_id,curr_date,attendance_month,attendance_year,attendance) 
            VALUES('".$std."','".$selected_date."','".$attendance_month."','".$attendance_year."','".$attendance."')") 
            OR die (mysqli_error($db));
        }

    }
echo "Attendance Added successfull";

    }
    ?>
