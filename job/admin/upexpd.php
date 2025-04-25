<?php
   include("dbconnect.php");
   $exp_id=$_POST["exp_id"];
   $js_id=$_POST["js_id"];
   $exp_name=$_POST["exp_name"];
   $exp_desc=$_POST["exp_desc"];
   $frm_dt=$_POST["frm_dt"];
   $to_dt=$_POST["to_dt"];
   $sql="update experience_details set js_id='$js_id',exp_name='$exp_name',exp_descip='$exp_desc',from_date='$frm_dt',to_date='$to_dt' where exp_id='$exp_id'";
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("record updated");
   document.location="viewexpd.php";
   </script>