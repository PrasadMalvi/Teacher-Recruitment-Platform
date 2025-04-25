<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		


 <link href="images/grid_style.css"" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
	
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>JOB APPLICATION </h2> 
<?php
 $app_id=$_REQUEST["app_id"];
  include("dbconnect.php");
  $sql="select * from job_application where app_id='$app_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form name="form1" method="post" action="upjbapp.php" id="formID">
  <table width="50%" height="143" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="28%">&nbsp;&nbsp;&nbsp;&nbsp;Job Opening Id</td>
      <td width="72%"><label>
      <br />
     <select name="jb_opening_id" id="jb_opening_id">
		<option value="">select</option>
          <?php
		
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
      <input name="app_id" type="hidden" id="app_id" value="<?php echo $row["app_id"];?>">
      <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Job Seeker Id</td>
      <td><label>
        <br />
       <select name="js_id" id="js_id">
		<option value="">select</option>
		  <?php
				$sql1="select * from job_seeker";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
		
          <option value="<?php echo $row1['js_id']; ?>" <?php if($row1['js_id']==$row['js_id']){ echo "selected";} ?>> <?php echo $row1['js_fname']." ".$row1['js_mname']." ".$row1['js_lname']; ?></option>
          <?php
		}
		?>
        </select>        
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;Applied Date</td>
      <td><label>
        <br />
		 <input name="applied_date" type="text" id="applied_date" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row["applied_date"];?>">
		
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Status</td>
      <td><label>
        <br />
        <input name="status" type="text" class="validate[required]" id="status" value="<?php echo $row["status"];?>" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Comments</td>
      <td><label>
      <br />
      <textarea name="comments" class="validate[required]" id="comments"><?php echo $row["comments"];?></textarea>
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
