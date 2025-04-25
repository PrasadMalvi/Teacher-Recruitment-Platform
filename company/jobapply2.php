<?php
include("dbconnect.php");
$jid=$_POST["jb_opening_id"];
$app_id=$_POST["app_id"];
$js_id=$_POST["js_id"];
$cmp_id=$_POST["cmp_id"];
$date_r=$_POST['date_r'];
$date_j=$_POST['date_j'];

$offer_ltr=$_FILES['offer_ltr']['name'];
 $tmp_location=$_FILES['offer_ltr']['tmp_name'];
 $target="../offer/".$offer_ltr;
 move_uploaded_file($tmp_location,$target);
 
$sql="insert into employee_details values(null,'$js_id','$jid','$date_r','$date_j','$app_id','$cmp_id','$offer_ltr')";
mysqli_query($conn,$sql);
 $sql;

$sql1="update job_application set status='Recruited' where app_id='$app_id'";
mysqli_query($conn,$sql1);
 $sql1;

$sql2="select * from jobs where jb_opening_id='$jid'";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);

$a=$row2['num_posts'];
$a=$a-1;

$sql3="update jobs set num_posts='$a' where jb_opening_id='$jid'";
mysqli_query($conn,$sql3); 

?>

<script type="text/javascript">
	alert("Candidate Selected...");
	document.location="viewempdetail.php";
</script>
