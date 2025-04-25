<?php
$exp_id=$_REQUEST["exp_id"];
include("dbconnect.php");
$sql="delete from expereince details where exp_id='$exp_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("ROW DELETED");
document.location="viewexpd.php";
</script>