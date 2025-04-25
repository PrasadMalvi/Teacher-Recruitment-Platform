<?php
session_start();

include('dbconnect.php');
$pass = $_GET['password'];
$sql = "select * from admin where user_name = '".$_SESSION['uname']."' and password = '".$pass."'";
$res = mysqli_query($conn,$sql);
if(mysql_num_rows($res)>0)
{
	echo "<input type=\"hidden\" id=\"status\" name=\"status\" value=\"1\" /><font color=\"green\">Correct Password...</font>";
} else
{
	echo "<input type=\"hidden\" id=\"status\" name=\"status\" value=\"\" /><font color=\"red\">Incorrect Password...</font>";
}
?>