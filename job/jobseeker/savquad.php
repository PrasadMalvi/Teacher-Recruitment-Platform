<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('admin_header.php');?>
    <!-- Sidebar menu-->
    <?php include('admin_side_bar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        

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
  echo $sql="insert into qualification_details values(null,'$js_id','$q_name','$uni_name','$coll_name','$yr_of_pass','$tot_marks','$obtain_marks','$perc','$grd')";
 $res=mysqli_query($conn,$sql);
  ?>
  <script type="text/javascript">
  alert("record inserted");
 document.location="viewquad.php";
  </script>