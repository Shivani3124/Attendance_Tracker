<?php
// date_default_timezone_set("Asia/Kolkata");
require_once("config.php");
// require_once("addingStudents.php");
date_default_timezone_set('Asia/Kolkata');

$firstDayOfMonth= date("d-m-Y");
$totalDaysInMonth = date("t",strtotime($firstDayOfMonth));
//fetching students
$fetchingStudents = mysqli_query($db,"SELECT * FROM student_bca") OR die (mysqli_error($db));
$student=mysqli_query($db,"SELECT student_name FROM student_bca");
// echo mysqli_num_rows($fetchingStudents);
$totalNumberOfStudents = mysqli_num_rows($fetchingStudents);

$studentsNameArray = array();
$studentIdArray = array();
// print_r($studentsNameArray);
$count = 0;
while( $student=mysqli_fetch_assoc($fetchingStudents))
{
     $studentsNameArray[]= $student['student_name'];
     $studentIdArray[]= $student['id'];


}
// print_r($studentIdArray);
?>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
 <body style="background-color:#add1e9;">    
<table border="1" cellspacing="0" cellpadding="5" width="100%"  class="table table-striped">
    <header style=" background-color: #3498db;
    text-align: center;
    padding: 20px 0;">
        <h1 style=" background-color: #3498db;
    text-align: center;
    padding: 20px 0; text-shadow:2px 3px 7px black;">Attendance Tracker <br>ATTENDANCE OF BCA </h1>

    </header><br><br>
    <h3>Attendance of month: <u>
            <font color="red">
                <?php echo strtoupper(date("F",strtotime($firstDayOfMonth)))?>
            </font>
        </u></h3>
    <?php
    for($i=1;$i<=$totalNumberOfStudents +2 ;$i++)
    {
        if($i == 1)
        {
            echo "<tr>";
            echo "<td rowspan='2'>Names</td>";
            for($j=1;$j<=$totalDaysInMonth;$j++)
            {
                echo "<td>$j</td>";
            }
    echo "</tr>";
        }
        else if($i==2)
        {
            echo "<tr>";
           
            for($j=0;$j<$totalDaysInMonth;$j++)
            {
                echo "<td>" .date("D",strtotime("+$j days",strtotime($firstDayOfMonth))) ."</td>";
            }
    echo "</tr>";
        }
        else 
        {
            echo "<tr>";
           echo "<td>".$studentsNameArray[$count]."</td>";
            for($j=1;$j<=$totalDaysInMonth;$j++)
            {
                $dateofAttendance = date("Y-m-$j");
                // $q="SELECT attendance FROM attendance WHERE student_id='".$studentIdArray[$count]."' AND curr_date='".$dateofAttendance."'";
                 $fetchingStudents_atten= mysqli_query($db,"SELECT attendance FROM atten_bca 
                 WHERE student_id='".$studentIdArray[$count]."' 
                 AND curr_date='".$dateofAttendance."'") OR die (mysqli_error($db));
                
                $isAttendanceAdded = mysqli_num_rows($fetchingStudents_atten);
                if($isAttendanceAdded > 0)
                {
$studentAttendance= mysqli_fetch_assoc($fetchingStudents_atten);
if($studentAttendance['attendance'] == "A")
{
    $color="#f23c33";
}
else if($studentAttendance['attendance'] == "p"){
    $color="#3ccf2b";


}
else if($studentAttendance['attendance'] == "L"){
    $color="#48d6d9";


}
else if($studentAttendance['attendance'] == "H"){
    $color="#f062a2";


}
echo "<td bgcolor='$color'>".$studentAttendance['attendance']."</td>";

                }
                
else{
    echo "<td></td>";
}
                
}      
    echo "</tr>";
   

    $count++;
        }
        }
        
    
    ?>
</table>
<button><a href="home1.html" style="display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    
">Go to home page</a></button>
</html>