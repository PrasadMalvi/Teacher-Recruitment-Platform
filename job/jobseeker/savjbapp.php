<?php
  include("dbconnect.php");
  $jb_open_id=$_POST["jb_open_id"];
  $js_id=$_POST["js_id"];
  $applied_dt=$_POST["applied_date"];
  $status=$_POST["status"];
  $comm=$_POST["comments"];
  $sql="insert into job_application values(null,'$jb_open_id','$js_id','$applied_dt','$status','$comm')";
  $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("record inserted");
  document.location="viewjbapp.php";
  </script>