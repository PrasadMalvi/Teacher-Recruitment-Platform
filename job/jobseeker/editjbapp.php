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
    <h2>JOB APPLICATION </h2> 
<?php
 $app_id=$_REQUEST["app_id"];
  include("dbconnect.php");
  $sql="select * from job_application where app_id='$app_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upjbapp.php" id="formID">
  <table width="36%" height="143" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="42%">Job Opening Id</td>
      <td width="58%"><label>
      <br />
      <input name="jb_open_id" type="text" id="jb_open_id" value="<?php echo $row["jb_opening_id"];?>" class="validate[required,custom[onlyNumber]]">
      <input name="app_id" type="hidden" id="app_id" value="<?php echo $row["app_id"];?>">
      <br />
      </label></td>
    </tr>
    <tr>
      <td>Job Seeker Id</td>
      <td><label>
        <br />
        <input name="js_id" type="text" id="js_id" value="<?php echo $row["js_id"];?>" class="validate[required,custom[onlyNumber]]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Applied Date</td>
      <td><label>
        <br />
        <input name="applied_date" type="text" id="applied_date" value="<?php echo $row["applied_date"];?>" class="validate[required]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><label>
        <br />
        <input name="status" type="text" class="validate[required]" id="status" value="<?php echo $row["status"];?>" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Comments</td>
      <td><label>
      <br />
      <textarea name="comments" class="validate[required]" id="comments"><?php echo $row["comments"];?></textarea>
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
