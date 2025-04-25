<?php
   include("dbconnect.php");
   $jb_opening_id=$_POST["jb_opening_id"];
   $jb_name=$_POST["jb_name"];
   $jb_desc=$_POST["jb_desc"];
   $jb_type=$_POST["jb_type"];
   $jb_cat_id=$_POST["jb_cat_id"];
   $frm_dt=$_POST["frm_dt"];
   $interview_dt=$_POST["interview_dt"];
   $eligibility=$_POST["eligibility"];
   $num_post=$_POST["num_post"];
   $l_dt_appli=$_POST["l_dt_appli"];
   $comp_id=$_POST["comp_id"];
   $jb_city=$_POST["jb_city"];
   $jb_pcode=$_POST["jb_pcode"];
   $jb_state=$_POST["jb_state"];
   $sql="update jobs set jb_name='$jb_name',jb_descrip='$jb_desc',jb_type='$jb_type',jb_category_id='$jb_cat_id',jb_from_date='$frm_dt',jb_interview_date='$interview_dt',eligibility='$eligibility',num_posts='$num_post',last_date_app='$l_dt_appli',cmp_id='$comp_id',jb_loc_city='$jb_city',jb_loc_pcode='$jb_pcode',jb_loc_state='$jb_state' where jb_opening_id='$jb_opening_id'";
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("record updated");
   document.location="viewjobs.php";
   </script>