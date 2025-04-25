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
    <h2>  JOB DETAILS</h2> 
		
    <p>
   
<form name="form1" method="post" action="savjobs.php" id="formID">
  <table width="59%" height="536" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" height="55">&nbsp;&nbsp;&nbsp;Job </td>
      <td width="63%"><label> <br>
      <input name="jb_name" type="text" id="jb_name" class="validate[required,custom[onlyLetter]]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="49">&nbsp;&nbsp;&nbsp;Job Description</td>
      <td><label> <br>
          <textarea name="jb_desc" class="validate[required]" id="jb_desc"></textarea>
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="34"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type</td>
      <td><label> <br>
      <input name="jb_type" type="text" id="jb_type" class="validate[required]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="52">&nbsp;&nbsp;&nbsp;&nbsp;Job Category Id</td>
      <td><label> <br>
      </label>
        <label for="select"></label>
        <select name="jb_category_id" id="jb_category_id">
		<option value="">select</option>
		<?php
		include('dbconnect.php');
		$sql="select * from job_category";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
		
          <option value="<?php echo $row['jb_category_id']; ?>"> <?php echo $row['jb_category']; ?></option>
          <?php
		}
		?>
        </select>
        <label>        <br>
        </label></td>
    </tr>
    <tr>
      <td height="51">&nbsp;&nbsp;&nbsp;&nbsp;From Date</td>
      <td><label> <br>
	      <input name="jb_from_date" type="text" id="jb_from_date" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	      <br>
      </label></td>
    </tr>
    <tr>
      <td height="55">&nbsp;&nbsp;&nbsp;&nbsp;Interview Date</td>
      <td><label> 
	   <input name="interview_dt" type="text" id="interview_dt" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	   
	
      </label></td>
    </tr>
    <tr>
      <td height="54">&nbsp;&nbsp;&nbsp;&nbsp; Eligibility</td>
      <td><label>
        <textarea name="eligibility" class="validate[required]" id="eligibility"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number Post</td>
      <td><label>
        <input name="num_post" type="text" id="num_post" class="validate[required,custom[onlyNumber]]"/>
      </label></td>
    </tr>
    <tr>
      <td height="43">&nbsp;&nbsp;&nbsp;Last Date For Application</td>
      <td><label> <br>
	   <input name="l_dt_appli" type="text" id="l_dt_appli" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	   
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;&nbsp;Job location city         </td>
      <td><input name="jb_city" type="text" id="jb_city" class="validate[required]"></td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;&nbsp;Job location State </td>
      <td><input name="jb_state" type="text" id="jb_state" class="validate[required]"></td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;&nbsp;Job location pincode </td>
      <td><input name="jb_pcode" type="text" id="jb_pcode" class="validate[required]"></td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;&nbsp;Company Id</td>
      <td><label> <br>
      </label>
        <label for="label"></label>
        <label for="select"></label>
        <select name="cmp_id" id="cmp_id">
		<option value="">select</option>
		<?php
		include('dbconnect.php');
		$sql1="select * from company_details";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
		
          <option value="<?php echo $row1['cmp_id']; ?>"> <?php echo $row1['cmp_name']; ?></option>
          <?php
		}
		?>
        </select>
        <label>        <br>
        </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
                <div align="center">
                  <input type="submit" name="Submit" value="Submit">
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
