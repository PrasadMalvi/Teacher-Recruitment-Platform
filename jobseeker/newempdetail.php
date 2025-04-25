<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>New Employee Details</h2> 
    <form name="form1" method="post" action="savempdetail.php" id="formID">
  <table width="30%" height="324" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="49%" height="72">Job Seeker Id</td>
      <td width="51%"><label> <br>
      <input name="js_id" type="text" id="js_id" class="validate[required,custom[onlyNumber]]">
        <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="69">Job Id</td>
      <td><label> <br>
      <input name="job_id" type="text" id="job_id" class="validate[required,custom[onlyNumber]]">
        <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="71">Date Of Reqruitment</td>
      <td><label> <br>
      <input name="dt_recruit" type="text" id="dt_recruit" class="validate[required,custom[date]]">
        <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="69">Date Of Joining</td>
      <td><label> <br>
      <input name="dt_join" type="text" id="dt_join" class="validate[required,custom[date]]">
        <br />
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