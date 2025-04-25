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
    <h2> JOB CATEGORY DETAILS </h2> 
		
    <p>
<form id="formID" name="form1" method="post" action="savejbcat.php">
  <table width="38%" height="148" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Job Category Name </td>
      <td><label for="label"></label>
        <p>&nbsp;          </p>
        <p>
          <input type="text" name="jb_cat_name" id="label" class="validate[required]"/>
        </p>
        <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</td>
      <td><label for="label2"></label>
        <p>&nbsp;          </p>
        <p>
          <textarea name="descrip" id="label2" required="l"></textarea>
        </p>
        <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td colspan="2"><label for="Submit"></label>
        <div align="center">
          <p>
            <input type="submit" name="Submit" value="Submit" id="Submit" />
          </p>
          <p>&nbsp;    </p>
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