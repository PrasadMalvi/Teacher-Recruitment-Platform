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
    <h2>NEW JOB APPLICATION</h2> 

<form name="form1" method="post" action="savjbapp.php" id="formID">
  <table width="36%" height="143" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="42%">Job Opening Id</td>
      <td width="58%"><label> <br />
      <input name="jb_open_id" type="text" id="jb_open_id" class="validate[required,custom[onlyNumber]]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Job Seeker Id</td>
      <td><label> <br />
      <input name="js_id" type="text" id="js_id" class="validate[required,custom[onlyNumber]]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Applied Date</td>
      <td><label> <br />
      <input name="applied_date" type="text" id="applied_date" class="validate[required]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><label> <br />
          <input name="status" type="text" class="validate[required]" id="status" value="">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Comments</td>
      <td><label> <br />
          <textarea name="comments" class="validate[required]" id="comments"></textarea>
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
</body>
</html>
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