<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
   <link href="images/grid_style.css"" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
	
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2> Job Application</h2> 

    <form name="form1" method="post" action="savjbapp.php" id="formID">
  <table width="45%" height="143" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="33%">&nbsp;&nbsp;&nbsp;Job Opening Id </td>
      <td width="67%"><label> <br />
      </label>
        <label for="select"></label>
        <label>
        <select name="jb_opening_id" id="jb_opening_id">
		<option value="">select</option>
          <?php
		include('dbconnect.php');
		$sql2="select * from jobs";
		$res=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res))
		{
		?>
		
          <option value="<?php echo $row2['jb_opening_id']; ?>"> <?php echo $row2['jb_name']; ?></option>
          <?php
		}
		?>
        </select>
        <br>
        </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Job Seeker Id</td>
      <td><label> <br />
        </label>
        <label for="select"></label>
        <select name="js_id" id="js_id">
		<option value="">select</option>
		  <?php
		include('dbconnect.php');
		$sql1="select * from job_seeker";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
		
          <option value="<?php echo $row1['js_id']; ?>"> <?php echo $row1['js_fname']." ".$row1['js_mname']." ".$row1['js_lname']; ?></option>
          <?php
		}
		?>
        </select>
        <label><br />
        </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Applied Date</td>
      <td><label> <br />
	  <input name="applied_date" type="text" id="applied_date" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo date('Y-m-d');  ?>">
		
	
     
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp; Status</td>
      <td><label> <br />
          <input name="status" type="text" class="validate[required]" id="status" value="">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;Comments</td>
      <td><label> <br />
          <textarea name="comments" required="l" id="comments"></textarea>
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