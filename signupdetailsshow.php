<?php
include 'connection.php';
$uname= $_POST['username'];
$pwd= $_POST['password'];
if(isset($_POST['submit']))
{
$selectquery="select * from signup where username='$uname' and password='$pwd'";
$querys = mysqli_query($con,$selectquery);
$num=mysqli_num_rows($querys);
if($num>0)
{
    //echo("<h1 style='color:red;text-align:center;font-size:20px;background-color:orange;padding:30px;border:5px solid brown;border-radius:50%;'>USERS</h1>");
    //echo("<hr><hr>");
    //echo("<br><div style='margin:30px;color:yellow;font-size:20px;background-color:blue;padding:30px;border:5px solid brown;border-radius:50px;'>User Name: ".$res['username']."<br></div>");
?>
<script>
    window.location.replace("http://localhost/NoteLog/signup/userpage.html"); 
</script>
<?php
}
else
{
?>
<script>
    alert("please enter correct user-name and password.");
    window.location.replace("http://localhost/NoteLog/signup/signin.html");
</script>
<?php
}
}
mysqli_close($con);
?>