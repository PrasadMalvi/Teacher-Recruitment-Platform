<?php
   include("dbconnect.php");
   $jb_name=$_POST["jb_name"];
   $jb_desc=$_POST["jb_desc"];
   $jb_type=$_POST["jb_type"];
   $jb_cat_id=$_POST["jb_category_id"];
   $frm_dt=$_POST["jb_from_date"];
   $interview_dt=$_POST["interview_dt"];
   $eligibility=$_POST["eligibility"];
   $num_post=$_POST["num_post"];
   $l_dt_appli=$_POST["l_dt_appli"];
   $comp_id=$_POST["cmp_id"];
   $jb_city=$_POST["jb_city"];
   $jb_state=$_POST["jb_state"];
   $jb_pcode=$_POST["jb_pcode"];
   
   
  
   
   $sql="insert into jobs values(null,'$jb_name','$jb_desc','$jb_type','$jb_cat_id','$frm_dt','$interview_dt','$eligibility','$num_post','$l_dt_appli','$comp_id','$jb_city','$jb_state','$jb_pcode')";
   $res=mysqli_query($conn,$sql);
   //echo $sql;
   ?>
   <script type="text/javascript">
   alert("record inserted");
   document.location="viewjobs.php";
   </script>
  