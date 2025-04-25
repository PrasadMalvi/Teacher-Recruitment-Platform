<?php
  include("dbconnect.php");
  $js_id=$_POST["jsid"];
  $q_name=$_POST["q_name"];
  $uni_name=$_POST["uni_name"];
  $coll_name=$_POST["coll_name"];
  $yr_of_pass=$_POST["yr_of_pass"];
  $tot_marks=$_POST["tot_marks"];
  $obtain_marks=$_POST["obtain_marks"];
  $perc=$_POST["perc"];
  $grd=$_POST["grd"];
  $sql="insert into qualification_details values(null,'$js_id','$q_name','$uni_name','$coll_name','$yr_of_pass','$tot_marks','$obtain_marks','$perc','$grd')";
  $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("record inserted");
  if(confirm('More Qualifications you have?'))
       document.location="newquad.php?jsid=<?php echo $js_id; ?>";
else
 {
      if(confirm('You have an Experience?'))
       document.location="newexpd.php?jsid=<?php echo $js_id; ?>";
	 else  
       document.location="viewjsee.php";
 }	 
  </script>