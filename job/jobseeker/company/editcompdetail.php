<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>New Employee Details</h2> 

<?php
 
  include("dbconnect.php");
  $cmp_id=$_REQUEST["cmp_id"];
  $sql="select * from company_details where cmp_id='$cmp_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upcompdetail.php" id="formID">
 <input name="cmp_id" type="hidden" id="cmp_id" value="<?php echo  $cmp_id; ?>">
<table width="42%" height="305" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="56%">Company Name</td>
    <td width="44%"><label> <br>
        <input name="cmp_name" type="text" class="validate[required]" id="cmp_name" value="<?php echo $row["cmp_name"];?>">
     
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Description</td>
    <td><label> <br>
        <textarea name="cmp_desc" required="l" id="cmp_desc"><?php echo $row["cmp_descrip"];?></textarea>
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Address</td>
    <td><label> <br>
        <textarea name="cmp_addr" required="l" id="cmp_addr"><?php echo $row["cmp_addr"];?></textarea>
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Contact Person Name </td>
    <td><label> <br>
    <input name="contact_person_name" type="text" id="contact_person_name" value="<?php echo $row["contact_person_name"];?>" class="validate[required]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Phone No</td>
    <td><label> <br>
    <input name="cmp_phone_no" type="text" id="cmp_phone_no" value="<?php echo $row["cmp_phone_no"];?>" class="validate[required,custom[telephone]]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Company Mobile No</td>
    <td><label><br>
      <input name="cmp_mobile" type="text" id="cmp_mobile" value="<?php echo $row["cmp_mobile"];?>" class="validate[required,custom[telephone],length[10,10]]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>E-mail Id</td>
    <td><label> <br>
        <input name="cmp_e_mail_id" type="text" id="cmp_e_mail_id" value="<?php echo $row["cmp_e_mail_id"];?>" "validate[required,custom[email]]">
      <br>
    </label></td>
  </tr>
  <tr>
    <td>Website</td>
    <td><label> <br>
    <input name="cmp_website" type="text" id="cmp_website" value="<?php echo $row["cmp_website"];?>" class="validate[required]">
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
        <?php include_once('admin_footer.php');?>

</div>

    	
</body>
</html>