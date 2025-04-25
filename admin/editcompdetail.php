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
        <div>
          <h1><i class="fa fa-table"></i>&nbsp;  College Details</h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home fa-lg"></a></i></li>
       <!--   <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>-->
        </ul>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">



<?php
 
  include("dbconnect.php");
  $cmp_id=$_REQUEST["cmp_id"];
  $sql="select * from company_details where cmp_id='$cmp_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upcompdetail.php" id="formID">
 <input name="cmp_id" type="hidden" id="cmp_id" value="<?php echo  $cmp_id; ?>">
<table width="42%" height="305" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="56%">Company Name</td>
    <td width="44%"><label> <br>
        <input name="cmp_name" type="text" class="form-control validate[required]" id="cmp_name" value="<?php echo $row["cmp_name"];?>">
     
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Description</td>
    <td><label> <br>
        <textarea name="cmp_desc" class="form-control" required="l" id="cmp_desc"><?php echo $row["cmp_descrip"];?></textarea>
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Address</td>
    <td><label> <br>
        <textarea name="cmp_addr" class="form-control" required="l" id="cmp_addr"><?php echo $row["cmp_addr"];?></textarea>
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Contact Person Name </td>
    <td><label> <br>
    <input name="contact_person_name" class="form-control" type="text" id="contact_person_name" value="<?php echo $row["contact_person_name"];?>" class="validate[required]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Phone No</td>
    <td><label> <br>
    <input name="cmp_phone_no" class="form-control" type="text" id="cmp_phone_no" value="<?php echo $row["cmp_phone_no"];?>" class="validate[required,custom[telephone]]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Mobile No</td>
    <td><label><br>
      <input name="cmp_mobile" class="form-control" type="text" id="cmp_mobile" value="<?php echo $row["cmp_mobile"];?>" class="validate[required,custom[telephone],length[10,10]]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>E-mail Id</td>
    <td><label> <br>
        <input name="cmp_e_mail_id" class="form-control" type="text" id="cmp_e_mail_id" value="<?php echo $row["cmp_e_mail_id"];?>" "validate[required,custom[email]]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Website</td>
    <td><label> <br>
    <input name="cmp_website" type="text" class="form-control" id="cmp_website" value="<?php echo $row["cmp_website"];?>" class="validate[required]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input name="Submit" type="submit" id="Submit" value="Update">
        </div>
    </label></td>
  </tr>
</table>
</form>
</div>
    </div>
                     
                    
    <div class="sidebar" id="sidebar">
	<!--Side Bar Start -->
   <?php 
   include_once('admin_side_bar.php');
   
   ?>
         
  <!--Side Bar End -->
    </div>
    <div class="clear"></div>
    </div> <!--end of center_content-->
        
</div>

    	<?php include_once('admin_footer.php');?>

</body>
</html>