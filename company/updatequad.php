<?php
  include("dbconnect.php");
 $quali_id=$_POST["quali_id"];

  $js_id=$_POST["js_id"];
  $q_name=$_POST["q_name"];
   $uni_name=$_POST["unversity_name"];

  $coll_name=$_POST["coll_name"];
  $yr_of_pass=$_POST["year_of_passing"];
  $tot_marks=$_POST["tot_marks"];
  $obtain_marks=$_POST["obtain_marks"];
  $perc=$_POST["perc"];
  $grd=$_POST["grd"];
  $sql="update qualification_details set js_id='$js_id',q_name='$q_name',university_name='$uni_name',coll_name='$coll_name',year_of_passing='$yr_of_pass',tot_marks='$tot_marks',obtain_marks='$obtain_marks',perc='$perc',grade='$grd' where quali_id='$quali_id'";
   mysqli_query($conn,$sql);
   ?>
  <script type="text/javascript">
  alert("record updated");
 document.location="viewquad.php";
  </script>