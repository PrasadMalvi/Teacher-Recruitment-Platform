<?php
 include("dbconnect.php");
  $fname=$_POST["fname"];
  $mname=$_POST["mname"];
  $lname=$_POST["lname"];
  $dob=$_POST["dob"];
  $addr=$_POST["addr"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $pcode=$_POST["pcode"];
  $phone=$_POST["phone"];
  $mobile=$_POST["mobile_no"];
  $emailid=$_POST["emailid"];
  $sql="insert into job_seeker values(null,'$fname','$mname','$lname','$dob','$addr','$city','$state','$pcode','$phone','$mobile','$emailid')";
  $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("RECORD INSERTED");
  document.location="viewjsee.php";
  </script>