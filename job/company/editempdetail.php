  <?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		 <?php
// Load the calendar class
require('../calendar/tc_calendar.php');
?>
  <link href="images/grid_style.css"" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
	
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>  Employee DETAILS</h2> 
		
    <p>

<?php
 $emp_id=$_REQUEST["emp_id"];
  include("dbconnect.php");
  $sql="select * from employee_details where emp_id='$emp_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upempdetail.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="56%" height="108" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="25%">&nbsp;&nbsp;&nbsp;Job Seeker </td>
      <td width="75%"><label> <br />
          <select name="js_id" id="js_id">
		  <option value="">select</option>
		   <?php
		include('dbconnect.php');
		$sql2="select * from job_seeker";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		?>
         <option value="<?php echo $row2['js_id']; ?>" <?php if($row2['js_id']==$row['js_id']){ echo "selected";} ?>> <?php echo $row2['js_fname']." ".$row2['js_mname']." ".$row2['js_lname']; ?></option>
          <?php
		}
		?>
          </select>        
          <br />
        <input name="emp_id" type="hidden" id="emp_id" value="<?php echo $row["emp_id"]; ?>">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Job Opening </td>
      <td><label> <br />
          <select name="jb_opening_id" id="jb_opening_id">
		  <option value="">select</option>
		   <?php
		include('dbconnect.php');
		$sql1="select * from jobs";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
          <option value="<?php echo $row1['jb_opening_id']; ?>" <?php if($row1['jb_opening_id']==$row['jb_opening_id']){ echo "selected";} ?>> <?php echo $row1['jb_name']; ?></option>
          <?php
		}
		?>
          </select>          
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Reqruitent</td>
      <td><label> <br />
	   <input name="dt_recruit" type="text" id="dt_recruit" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['dt_of_recruitment']; ?>">
	 
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Date Of Joining</td>
      <td><label> <br />
	   <input name="dt_join" type="text" id="dt_join" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['dt_of_joining']; ?>">
	  
    
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
