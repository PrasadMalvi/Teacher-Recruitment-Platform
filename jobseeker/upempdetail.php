
<?php
   include("dbconnect.php");
    $emp_id=$_POST["emp_id"];
   $js_id=$_POST["js_id"];
   $job_id=$_POST["job_id"];
   $dt_recruit=$_POST["dt_recruit"];
   $dt_join=$_POST["dt_join"];
   $sql="update employee_details set js_id='$js_id',jb_id='$job_id',dt_of_recruitment='$dt_recruit',dt_of_joining='$dt_join' where emp_id='$emp_id'";
  $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("Record updated");
   document.location="viewempdetail.php";
   </script>
   