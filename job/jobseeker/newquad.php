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
    <h2>VIEW QUALIFICATION DETAILS</h2> 
<form  name="form1" method="post" action="savquad.php" id="formID">
<table width="42%" height="499" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="49%" height="52">Job Seekers Id</td>
    <td width="51%"><label> <br />
    <input name="js_id" type="text" id="js_id" class="validate[required,custom[onlyNumber]]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="54">Qualification Name</td>
    <td><label> <br />
    <input name="q_name" type="text" id="q_name" class="validate[required]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">University Name</td>
    <td><label> <br />
        <textarea name="uni_name" required="l" id="uni_name"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">College Name</td>
    <td><label> <br />
        <textarea name="coll_name" required="l" id="coll_name"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">Year Of Passing</td>
    <td><label> <br />
    <input name="yr_of_pass" type="text" id="yr_of_pass" class="validate[required]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">Total Marks</td>
    <td><label> <br />
    <input name="tot_marks" type="text" id="tot_marks" class="validate[required,custom[onlyNumber]]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="51">Obtain Marks</td>
    <td><label> <br />
    <input name="obtain_marks" type="text" id="obtain_marks" class="validate[required,custom[onlyNumber]]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="83">Percentage</td>
    <td><label>
      <input name="perc" type="text" id="perc" class="validate[required]" />
    </label></td>
  </tr>
  <tr>
    <td height="23">Grage</td>
    <td><label> <br />
    <input name="grd" type="text" id="grd" class="validate[required]"/>
      <br />
      <br />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label> </label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
      </div></td>
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