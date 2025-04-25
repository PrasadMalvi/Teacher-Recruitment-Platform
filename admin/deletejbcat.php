<?php
$jb_category_id=$_REQUEST["jb_category_id"];
include("dbconnect.php");
$sql="delete from job_category where jb_category_id='$jb_category_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("ROW DELETED");
document.location="viewexpd.php";
</script>