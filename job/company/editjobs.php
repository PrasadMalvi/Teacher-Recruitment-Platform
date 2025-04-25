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
    <h2>EDIT JOB DETAILS</h2> 
		
    <p>
   
<?php
 $jb_opening_id=$_REQUEST["jb_opening_id"];
  include("dbconnect.php");
  $sql="select * from jobs where jb_opening_id='$jb_opening_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>    
    <p>
    <form name="form1" method="post" action="updatejobs.php" id="formID">
  <table width="61%" height="210" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="28%">Job Name</td>
      <td width="72%"><label> <br />
      <input name="jb_name" type="text" id="jb_name" value="<?php echo $row["jb_name"];?>" class="validate[required,custom[onlyLetter]]">
        <input name="jb_opening_id" type="hidden" id="jb_opening_id" value="<?php echo $row["jb_opening_id"]; ?>">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Job Description</td>
      <td><label> <br />
          <textarea name="jb_desc" class="validate[required]" id="jb_desc"><?php echo $row["jb_descrip"];?></textarea>
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><label> <br />
      <input name="jb_type" type="text" id="jb_type" value="<?php echo $row["jb_type"];?>" class="validate[required]">
          <br />
      </label></td>
    </tr>
	
    <tr>
      <td>Job Category Id</td>
      <td><label> <br />
          <select name="jb_category_id" id="jb_category_id">
		  <option value="">select</option>
		  <?php
		include('dbconnect.php');
		$sql1="select * from job_category";
		$res=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res))
		{
		?>
		
          <option value="<?php echo $row1['jb_category_id']; ?>"
		   <?php if($row1['jb_category_id']==$row1['jb_category_id'])
		   { echo "selected";} ?>
		   > <?php echo $row1['jb_category']; ?></option>
          <?php
		}
		?>
        </select>
                 
          <br />
      </label></td>
    </tr>
    <tr>
      <td>From Date</td>
      <td><label> <br />
	  <input name="jb_from_date" type="text" id="jb_from_date" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['jb_from_date']; ?>">
	   
     
          <br />
      </label></td>
    </tr>
  
      <td>Interview Date</td>
      <td><label> <br />
	  <input name="interview_dt" type="text" id="interview_dt" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['jb_interview_date']; ?>">
	
     
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Eligibility</td>
      <td><label> <br />
          <textarea name="eligibility" class="validate[required]" id="eligibility"><?php echo $row["eligibility"];?></textarea>
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Number Post</td>
      <td><label> <br />
      <input name="num_post" type="text" id="num_post" value="<?php echo $row["num_posts"];?>" class="validate[required,custom[onlyNumber]]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Last Date For Application</td>
      <td><label> <br />
	  <input name="l_dt_appli" type="text" id="l_dt_appli" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['last_date_app']; ?>">
	  
      
        <br />
      </label></td>
    </tr>
    <tr>
      <td><p>&nbsp;&nbsp;&nbsp;Job Location City </p>
        </td>
      <td><p>&nbsp;
        </p>
        <p>
          <input name="jb_city" type="text" id="jb_city" value="<?php echo $row["jb_loc_city"];?>" class="validate[required]">
        </p>
        <p>&nbsp;        </p></td>
    </tr>
    <tr>
      <td><p>&nbsp;&nbsp;&nbsp;Job Location Pincode</p>
        </td>
      <td><p>&nbsp;
        </p>
        <p>
          <input name="jb_state" type="text" id="jb_state" value="<?php echo $row["jb_loc_pcode"];?>" class="validate[required]">
        </p>
        <p>&nbsp;        </p></td>
    </tr>
    <tr>
      <td><p>&nbsp;&nbsp;&nbsp;Job Location State </p>
        </td>
      <td><p>&nbsp;
        </p>
        <p>
          <input name="jb_pcode" type="text" id="jb_pcode" value="<?php echo $row["jb_loc_state"];?>" class="validate[required]">
</p>
        <p>&nbsp;        </p></td>
    </tr>
    <tr>
      <td>Company Id</td>
      <td><label> <br />
          <select name="cmp_id" id="cmp_id">
		<option value="">select</option>
		<?php
		include('dbconnect.php');
		$sql2="select * from company_details";
		$res1=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res1))
		{
		?>
		
          <option value="<?php echo $row2['cmp_id']; ?>" <?php if($row2['cmp_id']==$row2['cmp_id']){ echo "selected";} ?>> <?php echo $row2['cmp_name']; ?></option>
          <?php
		}
		?>
          </select>        
          <br />
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

