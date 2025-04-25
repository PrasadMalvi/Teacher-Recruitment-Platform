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

<?php
 $emp_id=$_REQUEST["emp_id"];
  include("dbconnect.php");
  $sql="select * from employee_details where emp_id='$emp_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upempdetail.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="30%" height="108" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="50%">Job Seeker Id</td>
      <td width="50%"><label> <br />
      <input name="js_id" type="text" id="js_id" value="<?php echo $row["js_id"]; ?>" class="validate[required,custom[onlyNumber]]">
        <br />
        <input name="emp_id" type="hidden" id="emp_id" value="<?php echo $row["emp_id"]; ?>">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Job Id</td>
      <td><label> <br />
      <input name="job_id" type="text" id="job_id" value="<?php echo $row["jb_id"]; ?>" class="validate[required,custom[onlyNumber]]"/>
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Date Of Reqruitent</td>
      <td><label> <br />
      <input name="dt_recruit" type="text" id="dt_recruit" value="<?php echo $row["dt_of_recruitment"]; ?>" class="validate[required,custom[date]]">
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Date Of Joining</td>
      <td><label> <br />
      <input name="dt_join" type="text" id="dt_join" value="<?php echo $row["dt_of_joining"]; ?>" class="validate[required,custom[date]]">
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
