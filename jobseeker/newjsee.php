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
    <h2> NEW JOB DETAILS</h2> 
		
    <p>


<form name="form1" method="post" action="savjsee.php" id="formID">
  <table width="31%" height="366" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="43%">First Name</td>
      <td width="57%"><label> <br />
      <input name="fname" type="text" id="fname" class="validate[required,custom[onlyLetter]]" />
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Middle Name</td>
      <td><label><br />
        <input name="mname" type="text" id="mname"  class="validate[required,custom[onlyLetter]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label><br />
        <input name="lname" type="text" id="lname" class="validate[required,custom[onlyLetter]]" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Date Of Birth</td>
      <td><label> <br />
      <input name="dob" type="text" id="dob" class="validate[required,custom[date]]" />
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><p>&nbsp;</p>
        <p>
          <label>
          <textarea name="addr" id="addr" class="validate[required]" ><?php echo $row["js_addr"];?></textarea>
          </label>
          </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>City</td>
      <td><label> <br />
      <input name="city" type="text" id="city" class="validate[required]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>State</td>
      <td><label><br />
        <input name="state" type="text" id="state" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label><br />
        <input name="pcode" type="text" id="pcode" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><label><br />
        <input name="phone" type="text" id="phone" class="validate[required,custom[telephone],length[10,10]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label><br />
        <input name="mobile" type="text" id="mobile" class="validate[required,custom[telephone],length[10,10]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>E-Mail Id</td>
      <td><label><br />
        <input name="emailid" type="emailid" id="emailid" class="validate[required,custom[email]]" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
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




