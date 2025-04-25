<?php
   include("dbconnect.php");
   $js_id=$_POST["js_id"];
   $job_id=$_POST["jb_opening_id"];
   $dt_recruit=$_POST["dt_recruit"];
   $dt_join=$_POST["dt_join"];
   $sql="insert into employee_details values(null,'$js_id','$job_id','$dt_recruit','$dt_join')";
   //echo $sql;
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("Record inserted");
   document.location="viewempdetail.php";
   </script>
   