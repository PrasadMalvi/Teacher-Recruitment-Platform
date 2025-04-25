<?php
 $jb_opening_id=$_REQUEST["jb_opening_id"];
 include("dbconnect.php");
 $sql="delete from jobs where jb_opening_id='$jb_opening_id'";
 mysqli_query($conn,$sql);
 ?>
 <script type="text/javascript">
 alert("Row deleted");
 document.location="viewjobs.php";
 </script>