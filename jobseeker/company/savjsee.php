<?php
 include("dbconnect.php");
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
  $sql="insert into job_seeker values(null,'$fname','$mname','$lname','$dob','$gender','$addr','$city','$state','$pcode','$phone','$mobile','$emailid')";
  $res=mysqli_query($conn,$sql);
  $id=mysql_insert_id();
  ?>
  <script type="text/javascript">
  alert("RECORD INSERTED");
  document.location="newquad.php?jsid=<?php echo $id; ?>";
  </script>