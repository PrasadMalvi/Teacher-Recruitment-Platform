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
   
<form name="form1" method="post" action="savjobs.php" id="formID">
  <table width="38%" height="536" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="48%" height="55">Job Name</td>
      <td width="52%"><label> <br>
      <input name="jb_name" type="text" id="jb_name" class="validate[required,custom[onlyLetter]]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="49">Job Description</td>
      <td><label> <br>
          <textarea name="jb_desc" class="validate[required]" id="jb_desc"></textarea>
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="34">Type</td>
      <td><label> <br>
      <input name="jb_type" type="text" id="jb_type" class="validate[required]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="52">Job Category Id</td>
      <td><label> <br>
      <input name="jb_cat_id" type="text" id="jb_cat_id" class="validate[required,custom[onlyNumber]]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="51">From Date</td>
      <td><label> <br>
      <input name="frm_dt" type="text" id="frm_dt" class="validate[required,custom[date]]">
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="55">Interview Date</td>
      <td><label> <br>
      <input name="interview_dt" type="text" id="interview_dt" class="validate[required,custom[date]]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="54">Eligibility</td>
      <td><label>
        <textarea name="eligibility" class="validate[required]" id="eligibility"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="58">Number Post</td>
      <td><label>
        <input name="num_post" type="text" id="num_post" class="validate[required,custom[onlyNumber]]" />
      </label></td>
    </tr>
    <tr>
      <td height="43">Last Date For Application</td>
      <td><label> <br>
      <input name="l_dt_appli" type="text" id="l_dt_appli" class="validate[required,custom[date]]">
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="38">Company Id</td>
      <td><label> <br>
      <input name="comp_id" type="text" id="comp_id" class="validate[required,custom[onlyNumber]]" >
        <br>
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
