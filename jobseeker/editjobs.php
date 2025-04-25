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
  <table width="38%" height="210" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="48%">Job Name</td>
      <td width="52%"><label> <br />
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
      <input name="jb_cat_id" type="text" id="jb_cat_id" value="<?php echo $row["jb_category_id"];?>" class="validate[required,custom[onlyNumber]]">
          <br />
      </label></td>
    </tr>
    <tr>
      <td>From Date</td>
      <td><label> <br />
      <input name="frm_dt" type="text" id="frm_dt" value="<?php echo $row["jb_from_date"];?>" class="validate[required,custom[date]]">
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Interview Date</td>
      <td><label> <br />
      <input name="interview_dt" type="text" id="interview_dt" value="<?php echo $row["jb_interview_date"];?>" class="validate[required,custom[date]]">
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
      <input name="l_dt_appli" type="text" id="l_dt_appli" value="<?php echo $row["last_date_app"];?>" class="validate[required,custom[date]]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Company Id</td>
      <td><label> <br />
      <input name="comp_id" type="text" id="comp_id" value="<?php echo $row["cmp_id"];?>" class="validate[required,custom[onlyNumber]]">
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
