<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$insertquery = "insert into signup values('$username','$password')";
$res=mysqli_query($con,$insertquery);
if($res)
{
?>
<script>
    alert("SignUp sucessfully");
    window.location.replace("http://localhost/NoteLog/signup/signin.html");
</script>
<?php 
}
else
{
?>
<script>
    alert("Try Again!\n\nAlready same user_name is exists.");
    window.location.replace("http://localhost/NoteLog/signup/signup.html");
</script>
<?php
}
}
mysqli_close($con);
echo("<div style='font-size:30px;color:blue;border:5px solid brown;border-radius:50px;background-color:yellow;'><a href='signin.html' target='_blank'>SIGN IN</a></div>");
?>
