<?php
   include("dbconnect.php");
   $js_id=$_POST["jsid"];
   $exp_name=$_POST["exp_name"];
   $exp_desc=$_POST["exp_desc"];
   $frm_dt=$_POST["date1"];
   $to_dt=$_POST["date"];
   echo $sql="insert into experience_details values(null,'$js_id','$exp_name','$exp_desc','$frm_dt','$to_dt')";
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("record inserted");
   document.location="viewexpd.php";
   </script>