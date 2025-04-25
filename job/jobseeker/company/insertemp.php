<?php
$jid=$_REQUEST["jb_opening_id"];
$app_id=$_REQUEST["app_id"];
$js_id=$_REQUEST["js_id"];
$cmp_id=$_REQUEST["cmp_id"];
$date=date('Y-m-d');

include("dbconnect.php");
$sql="insert into employee_details values(null,'$js_id','$jid','$date','$app_id','$cmp_id')";
mysqli_query($conn,$sql);
 $sql;

$sql1="update job_application set status='Recruited' where app_id='$app_id'";
mysqli_query($conn,$sql1);
 $sql1;

$sql2="select * from jobs where jb_opening_id='$jid'";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);

$a=$row2[num_posts];
$a=$a-1;

$sql3="update jobs set num_posts='$a' where jb_opening_id='$jid'";
mysqli_query($conn,$sql3); 

?>

<script type="text/javascript">
	alert("Candidate Selected...");
	document.location="viewempdetail.php";
</script>
