<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		<?php
		$jsid=$_REQUEST["jsid"];
		$sql_js="select * from job_seeker where js_id='$jsid'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		?>
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
        <h2>Experience DETAILS of <?php  echo $row_js['js_fname']." ".$row_js['js_mname']." ".$row_js['js_lname']; ?></h2> 
<form id="formID" name="form1" method="post" action="savexpd.php" >
  <table width="51%" height="196" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience</td>
      <td width="65%"><p>
        <label>          </label>
      </p>
        <p>
          <label>
            <textarea name="exp_name" required="l" id="exp_name"></textarea>
            <input name="jsid" type="hidden" id="jsid" value="<?php echo $jsid; ?>">
            <br />
            <br />
          </label>
        </p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp; Experience Description</td>
      <td><label> <br />
          <textarea name="exp_desc" required="l" id="exp_desc"></textarea>
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From Date</td>
      <td><label> <br />
	  <input name="frm_dt" type="text" id="frm_dt" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	  
     
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;To Date</td>
      <td><label> <br />
	  <input name="to_dt" type="text" id="to_dt" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	  
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input name="submit" type="submit" id="submit" value="Submit" />
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