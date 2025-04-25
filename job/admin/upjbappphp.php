<?php
  include("dbconnect.php");
  $app_id=$_POST["app_id"];
  $jb_open_id=$_POST["jb_open_id"];
  $js_id=$_POST["js_id"];
  $applied_dt=$_POST["applied_date"];
  $status=$_POST["status"];
  $comm=$_POST["comments"];
  $sql="update job_application set jb_opening_id='$jb_open_id',js_id='$js_id',applied_date='$applied_dt',status='$status',comments='$comm' where app_id='app_id'";
  $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("record updated");
  document.location="viewjbapp.php";
  </script>