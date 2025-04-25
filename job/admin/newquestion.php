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
    <h2> Question Details</h2> 
		
		
		<form action="savequestion.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
<table width="51%" height="265" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="56%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Question</td>
    <td width="44%"><label> <br />
    <textarea name="question" id="question" class="validate[required]"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option1</td>
    <td><label><br />
        <textarea name="option1" id="option1"></textarea>
      <br />
    </label></td>
  </tr>
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option2</td>
    <td><label><br />
        <textarea name="option2" id="option2"></textarea>
      <br />
    </label></td>
  </tr>
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option3</td>
    <td><label><br />
        <textarea name="option3" id="option3"></textarea>
      <br />
    </label></td>
  </tr>
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option4</td>
    <td><label><br />
        <textarea name="option4" id="option4"></textarea>
      <br />
    </label></td>
  </tr>
     <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct Answer</td>
    <td><label><br />
        <select name="answer" id="answer">
          <option>option1</option>
          <option>option2</option>
          <option>option3</option>
          <option>option4</option>
        </select>
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
