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
  <table width="50%" height="196" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Job Seeker Id</td>
      <td width="53%"><label>
        <input name="js_id" type="text" id="js_id" value="<?php echo $row["js_id"];?>" class="validate[required,custom[onlyNumber]]"/>
        <input name="exp_id" type="hidden" id="exp_id" value="<?php echo $row["exp_id"];?>">
      </label></td>
    </tr>
    <tr>
      <td>Experience Name</td>
      <td><label>
        <input name="exp_name" type="text" id="exp_name" value="<?php echo $row["exp_name"];?>" class="validate[required]" />
      </label></td>
    </tr>
    <tr>
      <td>Experience Description</td>
      <td><label>
        <textarea name="exp_desc" class="validate[required]" id="exp_desc"><?php echo $row["exp_descip"];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>From Date</td>
      <td><label>
        <input name="frm_dt" type="text" id="frm_dt" value="<?php echo $row["from_date"];?>" class="validate[required]"/>
      </label></td>
    </tr>
    <tr>
      <td>To Date</td>
      <td><label>
        <input name="to_dt" type="text" id="to_dt" value="<?php echo $row["to_date"];?>" class="validate[required]"/>
      </label></td>
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
