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
 $cmp_id=$_REQUEST["cmp_id"];
  include("dbconnect.php");
  $sql="select * from company_details where cmp_id='$cmp_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upcompdetail.php" id="formID">
<table width="42%" height="305" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="56%">Comp_name</td>
    <td width="44%"><label>
      <input name="cmp_name" type="text" id="cmp_name" value="<?php echo $row["cmp_name"];?>" class="validate[required]">
      <input name="cmp_id" type="hidden" id="cmp_id">
    </label></td>
  </tr>
  <tr>
    <td>Comp_description</td>
    <td><label>
      <input name="cmp_desc" type="text" id="cmp_desc" value="<?php echo $row["cmp_descrip"];?>" class="validate[required]">
    </label></td>
  </tr>
  <tr>
    <td>Comp_address</td>
    <td><label>
      <input name="cmp_addr" type="text" id="cmp_addr" value="<?php echo $row["cmp_addr"];?>" class="validate[required]">
    </label></td>
  </tr>
  <tr>
    <td>Contact_person_name </td>
    <td><label>
      <input name="contact_person_name" type="text" id="contact_person_name" value="<?php echo $row["contact_person_name"];?>" class="validate[required]">
    </label></td>
  </tr>
  <tr>
    <td>comp_phone_no</td>
    <td><label>
      <input name="cmp_phone_no" type="text" id="cmp_phone_no" value="<?php echo $row["cmp_phone_no"];?>" class="validate[required,custom[telephone],length[10,10]]">
    </label></td>
  </tr>
  <tr>
    <td>comp_mobile_no</td>
    <td><label>
      <input name="cmp_mobile" type="text" id="cmp_mobile" value="<?php echo $row["cmp_mobile"];?>" class="validate[required,custom[telephone],length[10,10]]">
    </label></td>
  </tr>
  <tr>
    <td>E-mail_id</td>
    <td><label>
      <input name="cmp_e_mail_id" type="text" id="cmp_e_mail_id" value="<?php echo $row["cmp_e_mail_id"];?>" "validate[required,custom[email]]">
    </label></td>
  </tr>
  <tr>
    <td>website</td>
    <td><label>
      <input name="cmp_website" type="text" id="cmp_website" value="<?php echo $row["cmp_website"];?>" class="validate[required]">
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