<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->03
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>New Company Details</h2> 
		
		
		<form name="form1" method="post" action="savcompdetail.php" id="formID">
<table width="34%" height="265" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="56%">Company Name </td>
    <td width="44%"><label> <br />
    <input name="cmp_name" type="text" id="cmp_name" class="validate[required]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Company Description</td>
    <td><label><br />
        <textarea name="cmp_desc" required="l" id="cmp_desc"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Company Address </td>
    <td><label><br />
        <textarea name="cmp_addr" required="l" id="cmp_addr"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Contact_person_name </td>
    <td><label><br />
      <input name="contact_person_name" type="text" id="contact_person_name" class="validate[required]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>comp_phone_no</td>
    <td><label><br />
      <input name="cmp_phone_no" type="text" id="cmp_phone_no" class="validate[required,custom[telephone],length[10,10]]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>comp_mobile_no</td>
    <td><label> <br />
    <input name="cmp_mobile" type="text" id="cmp_mobile" class="validate[required,custom[telephone],length[10,10]]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>E-mail_id</td>
    <td><label><br />
      <input name="cmp_e_mail_id" type="text" id="cmp_e_mail_id" class="validate[required,custom[email]]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>website</td>
    <td><label><br />
      <input name="cmp_website" type="text" id="cmp_website" class="validate[required]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="Submit">
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
