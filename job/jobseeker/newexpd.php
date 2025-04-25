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
<form id="formID" name="form1" method="post" action="savexpd.php" >
  <table width="36%" height="196" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Job Seeker Id</td>
      <td width="53%"><label> <br />
          <br />
          <input name="js_id" type="text" id="js_id" class="validate[required,custom[onlyNumber]]"/>
              <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Experience Name</td>
      <td><label>
        <input name="exp_name" type="text" id="exp_name" class="validate[required]" />
        <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Experience Description</td>
      <td><label> <br />
          <textarea name="exp_desc" class="validate[required]" id="exp_desc"></textarea>
          <br />
      </label></td>
    </tr>
    <tr>
      <td>From Date</td>
      <td><label> <br />
      <input name="frm_dt" type="text" id="frm_dt" class="validate[required]"/>
          <br />
      </label></td>
    </tr>
    <tr>
      <td>To Date</td>
      <td><label> <br />
      <input name="to_dt" type="text" id="to_dt" class="validate[required]"/>
        <br />
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