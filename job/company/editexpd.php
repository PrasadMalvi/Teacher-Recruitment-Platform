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
    <h2>New Company Details</h2> 
    <p>
      <?php
 $exp_id=$_REQUEST["exp_id"];
  include("dbconnect.php");
  $sql="select * from experience_details where exp_id='$exp_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
</p>
    <p>&nbsp;</p>
    <p>&nbsp;    </p>
    <form  name="form1" method="post" action="upexpd.php" id="formID">
  <table width="53%" height="196" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Seeker Id</td>
      <td width="70%"><p>
        <label>          </label>
      </p>
        <p>
          <label>
            <select name="js_id" id="js_id">
			<option value="">select</option>
		  <?php
		include('dbconnect.php');
		$sql2="select * from job_seeker";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		?>
         <option value="<?php echo $row2['js_id']; ?>" <?php if($row2['js_id']==$row['js_id']){ echo "selected";} ?>> <?php echo $row2['js_fname']." ".$row2['js_mname']." ".$row2['js_lname']; ?></option>
          <?php
		}
		?>
          </select>   
            <input name="exp_id" type="hidden" id="exp_id" value="<?php echo $row["exp_id"];?>">
          </label>
        </p>
        <p>
          <label>        </label>
        </p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience Name</td>
      <td><p>
        <label>          </label>
      </p>
        <p>
          <label>
          <input name="exp_name" type="text" id="exp_name" value="<?php echo $row["exp_name"];?>" class="validate[required]" />
          </label>
        </p>
        <p>
          <label>        </label>
        </p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience Description</td>
      <td><label>
        <textarea name="exp_desc" required="l" id="exp_desc"><?php echo $row["exp_descip"];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From Date</td>
      <td><p>
        <label>	      </label>
      </p>
        <p>
          <label>
          <input name="frm_dt" type="text" id="frm_dt" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row1['from_date']; ?>">
          </label>
        </p>
        <p>
          <label></label>
          <label>          </label>
        </p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp; To Date</td>
      <td><p>
        <label>	     </label>
        <label>        </label>
      </p>
        <p>
          <label>
          <input name="to_dt" type="text" id="to_dt" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row1['to_date']; ?>t">
            </label>
        </p>
        <p>
          <label>          </label>
          <label>          </label>
        </p></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input name="submit" type="submit" id="submit" value="OK" />
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
