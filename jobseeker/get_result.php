<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Job For Me</title>
</head>

<body>
<?php
 $user_name=$_SESSION["uname"];
include("dbconnect.php");
$cor=0;
$wrong=0;
for($i=1; $i<=10; $i++)
{
$ans=$_POST["answer$i"];
if(isset($_POST["option$i"]))
{
$ans1=$_POST["option$i"];
if($ans==$ans1)
{
$cor++;
}
else
{
$wrong++;
}
}
}

$sql="select * from job_seeker where js_fname='$user_name'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$js_id=$row["js_id"];
$sql="insert into js_results values(null,'$js_id','".date('Y-m-d')."','$cor','$wrong')";
//mysqli_query($conn,$sql);
?><br/>

</body>
</html>
<script type="text/javascript">
alert("Exam Ended");
document.location="takeexam.php";
</script>