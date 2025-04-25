<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('admin_header.php');?>
    <!-- Sidebar menu-->
<?php include('admin_side_bar.php');?>
    <main class="app-content" style="width:fit-content;">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Qualification DETAILS </h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home fa-lg"></i></a></li>
         <!-- <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>-->
        </ul>
      </div>
	 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body"> 
<?php
$jid=$_REQUEST["jb_opening_id"];
$app_id=$_REQUEST["app_id"];
$js_id=$_REQUEST["js_id"];
$cmp_id=$_REQUEST["cmp_id"];
$date=date('Y-m-d');

?>
<form action="jobapply2.php" enctype="multipart/form-data" method="post"  name="form1">
  <table width="400" border="1" align="center">
    <tr>
      <td width="180">Job Seeker Id </td>
      <td width="140"><input type="text" name="js_id" value="<?php echo $js_id;?>"></td>
    </tr>
    <tr>
      <td>Job Opening Id </td>
      <td><input type="text" name="jb_opening_id" value="<?php echo $jid;?>"></td>
    </tr>
    <tr>
      <td>Date of Recruitment</td>
      <td><input type="text" name="date_r" value="<?php echo $date ;?>"></td>
    </tr>
    <tr>
      <td>Date of Joining </td>
      <td><input type="date" name="date_j" ></td>
    </tr>
    <tr>
      <td>Application Id </td>
      <td><input type="text" name="app_id" value="<?php echo $app_id; ?>"></td>
    </tr>
    <tr>
      <td>Company id </td>
      <td><input type="text" name="cmp_id" value="<?php echo $cmp_id ;?>"></td>
    </tr>
    <tr>
      <td>Offer Letter </td>
      <td>      <input type="file" name="offer_ltr"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-info" >
      </div></td>
    </tr>
  </table>
</form>

