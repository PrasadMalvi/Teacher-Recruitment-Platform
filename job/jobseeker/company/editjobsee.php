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
    <h2> NEW JOB DETAILS</h2> 
		
    <p>
 <?php
 $js_id=$_REQUEST["js_id"];
  include("dbconnect.php");
  $sql="select * from job_seeker where js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<body>
<form id="formID" name="form1" method="post" action="updatejsee.php">
  <table width="59%" height="366" cellpadding="0" cellspacing="0">
    <tr>
      <td width="24%">&nbsp;&nbsp;&nbsp;First Name</td>
      <td width="76%"><label> <br>
      <input name="fname" type="text" id="fname" value="<?php echo $row["js_fname"];?>" class="validate[required,custom[onlyLetter]]"/>
      <input name="js_id" type="hidden" id="js_id" value="<?php echo $row["js_id"]?>">
      <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Middle Name</td>
      <td><label> <br>
      <input name="mname" type="text" id="mname" value="<?php echo $row["js_mname"];?>" class="validate[required,custom[onlyLetter]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Last Name</td>
      <td><label> <br>
      <input name="lname" type="text" id="lname" value="<?php echo $row["js_lname"];?>" class="validate[required,custom[onlyLetter]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth</td>
      <td><label> <br>
	  <input name="dob" type="text" id="dob" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row["js_dob"];?>">
	     
	  
      
        <br>
      </label></td>
    </tr>
	   <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Gender</td>
      <td><input name="gender" type="radio" value="Male" <?php if($row["gender"]=="Male"){ echo "selected"; } ?>>
        Male 
          <input name="gender" type="radio" value="Female"  <?php if($row["gender"]=="Female"){ echo "selected"; } ?>>
          Female</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Address</td>
      <td><p>&nbsp;</p>
        <p>
          <label>
          <textarea name="addr" required="l" id="addr" ><?php echo $row["js_address"];?></textarea>
          </label>
          </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;City</td>
      <td><label> <br>
      <input name="city" type="text" id="city" value="<?php echo $row["js_city"];?>" class="validate[required]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</td>
      <td><label> <br>
      <input name="state" type="text" id="state" value="<?php echo $row["js_state"];?>"class="validate[required]" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Pincode</td>
      <td><label> <br>
      <input name="pcode" type="text" id="pcode" value="<?php echo $row["js_pincode"];?>" class="validate[required]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Phone No </td>
      <td><label> <br>
      <input name="phone" type="text" id="phone" value="<?php echo $row["js_phone_no"];?>" class="validate[required,custom[telephone],length[10,10]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;Mobile No </td>
      <td><label> <br>
      <input name="mobile" type="text" id="mobile" value="<?php echo $row["js_mobile_no"];?>" class="validate[required,custom[telephone],length[10,10]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;E-Mail Id</td>
      <td><label> <br>
      <input name="emailid" type="text" id="emailid" value="<?php echo $row["js_e_mail"];?>" class="validate[required,custom[email]]"/>
        <br>
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
</body>
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
