<?php
 $js_id=$_REQUEST["js_id"];
  include("dbconnect.php");
  $sql="delete from job_seeker where js_id='$js_id'";
  mysqli_query($conn,$sql);
  ?>
  <script>
  alert("Row deleted");
  document.location="viewjsee.php";
  </script>
