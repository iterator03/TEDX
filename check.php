<?php
include ("dbconfig.php");
session_start(); 
?>
<?php
$query = "SELECT * FROM soft_quiz WHERE QuizID =1 AND ques_no =1";
$q=mysqli_query($con,$query);
$t= mysqli_fetch_array($q);
$duration = $t["time"];
echo $duration;
echo "<br/>";
$_SESSION["duration"]= $duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");
$start_time = $_SESSION["start_time"];
echo $start_time;
echo "<br/>";
$end_time =date('Y-m-d H:i:s',strtotime('+'.$_SESSION["duration"].'seconds',strtotime($_SESSION["start_time"])));
echo $end_time;


$from_time = date('Y-m-d H:i:s');

$timefirst = strtotime($from_time);
$timesecond = strtotime($end_time);
$diff = $timesecond- $timefirst;
echo gmdate("H:i:s",$diff);
?>