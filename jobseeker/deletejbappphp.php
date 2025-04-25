<?php
$app_id=$_REQUEST["app_id"];
include("dbconnect.php");
$sql="delete from job_application where app_id='$app_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("Row deleted");
document.location="viewjbapp.php";
</script>