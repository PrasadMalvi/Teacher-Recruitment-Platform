<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('admin_header.php');?>
    <!-- Sidebar menu-->
    <?php include('admin_side_bar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-table"></i>&nbsp;  Job Application Details</h1>
          <p>Details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home fa-lg"></a></i></li>
       <!--   <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>-->
        </ul>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

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
      <td width="28%">Job Opening Id</td>
      <td width="72%"><label>
      <br />
     <select name="jb_opening_id" class="form-control" id="jb_opening_id">
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
      <td>Job Seeker Id</td>
      <td><label>
        <br />
       <select name="js_id" class="form-control" id="js_id">
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
      <td>Applied Date</td>
      <td><label>
        <br />
		 <input name="applied_date" class="form-control" type="text" id="applied_date" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row["applied_date"];?>">
		
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><label>
        <br />
        <input name="status" type="text" class="form-control validate[required]" id="status" value="<?php echo $row["status"];?>" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Comments</td>
      <td><label>
      <br />
      <textarea name="comments" class="form-control validate[required]" id="comments"><?php echo $row["comments"];?></textarea>
      <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" class="btn btn-info" value="Submit">
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
       

</div>
 <?php include_once('admin_footer.php');?>
    	
</body>
</html>
