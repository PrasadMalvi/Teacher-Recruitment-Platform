<?php 
$cmp_id=$_REQUEST["cmp_id"];
include("dbconnect.php");
$sql="delete from company_details where cmp_id='$cmp_id'";
mysqli_query($conn,$sql);
?>
<script type="text/javascript">
alert("Record deleted");
document.location="viewcompdetail.php";
</script>