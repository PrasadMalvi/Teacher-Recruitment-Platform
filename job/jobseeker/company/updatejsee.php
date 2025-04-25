<?php
 include("dbconnect.php");
 $js_id=$_POST["js_id"];
  $fname=$_POST["fname"];
  $mname=$_POST["mname"];
  $lname=$_POST["lname"];
  $dob=$_POST["dob"];
  $gender=$_POST["gender"];
  $addr=$_POST["addr"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $pcode=$_POST["pcode"];
  $phone=$_POST["phone"];
  $mobile=$_POST["mobile"];
  $emailid=$_POST["emailid"];
  $sql="update job_seeker set js_fname='$fname',js_mname='$mname',js_lname='$lname',js_dob='$dob',gender='$gender',js_address='$addr',js_city='$city',js_state='$state',js_pincode='$pcode',js_phone_no='$phone',js_mobile_no='$mobile',js_e_mail='$emailid' where js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("RECORD UPDATED");
  document.location="viewjsee.php";
  </script>