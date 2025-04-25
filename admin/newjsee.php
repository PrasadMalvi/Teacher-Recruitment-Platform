<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		 <?php
// Load the calendar class
require('../calendar/tc_calendar.php');
?>
  <link href="images/grid_style.css"" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
	
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>  JOB SEEKER DETAILS</h2> 
		
    <p>


<form name="form1" method="post" action="savjsee.php" id="formID">
  <table width="49%" height="366" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="32%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; First Name</td>
      <td width="68%"><label> <br />
      <input name="fname" type="text" id="fname" class="validate[required,custom[onlyLetter]]" />
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name</td>
      <td><label><br />
        <input name="mname" type="text" id="mname"  class="validate[required,custom[onlyLetter]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp; Last Name</td>
      <td><label><br />
        <input name="lname" type="text" id="lname" class="validate[required,custom[onlyLetter]]" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth</td>
      <td><label> <br />
	   <input name="dob" type="text" id="dob" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	
      
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Gender</td>
      <td><input name="gender" type="radio" value="Male">
        Male 
          <input name="gender" type="radio" value="Female">
          Female</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address</td>
      <td><p>&nbsp;</p>
        <p>
          <label>
          <textarea name="addr" id="addr" required="l" ></textarea>
          </label>
          </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</td>
      <td><label> <br />
      <input name="city" type="text" id="city" class="validate[required]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</td>
      <td><label><br />
        <input name="state" type="text" id="state" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pincode</td>
      <td><label><br />
        <input name="pcode" type="text" id="pcode" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone</td>
      <td><label><br />
        <input name="phone" type="text" id="phone" class="validate[required,custom[telephone],length[10,10]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;Mobile</td>
      <td><label><br />
        <input name="mobile" type="text" id="mobile" class="validate[required,custom[telephone],length[10,10]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;E-Mail Id</td>
      <td><label><br />
        <input name="emailid" type="emailid" id="emailid" class="validate[required,custom[email]]" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
          <input type="reset" name="Reset" value="Reset">
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




