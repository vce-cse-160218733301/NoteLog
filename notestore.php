<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$usename=$_POST['username'];
$note=$_POST['enote'];
$date=$_POST['edate'];
$time=$_POST['etime'];
$insertquery="insert into event values('$usename','$note','$date','$time')";
$res= mysqli_query($con,$insertquery);
if($res)
{
?>
<script>
    alert("Log Noted sucessfully");
    window.history.forward();
    window.location.replace("http://localhost/NoteLog/signup/userpage.html");
</script>
<?php 
}
else
{
?>
<script>
    alert("Try Again Once!");
    window.history.forward();
    window.location.replace("http://localhost/NoteLog/signup/addlog.html");
</script>
<?php
}
}
mysqli_close($con);
?>
