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
          <h1><i class="fa fa-table"></i>&nbsp;  Employee Details</h1>
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
      <td width="25%">Job Seeker </td>
      <td width="75%"><label> <br />
          <select name="js_id" id="js_id" class="form-control">
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
        <input name="emp_id"  class="form-control" type="hidden" id="emp_id" value="<?php echo $row["emp_id"]; ?>">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Job Opening </td>
      <td><label> <br />
          <select name="jb_opening_id" class="form-control" id="jb_opening_id">
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
      <td>Date Of Reqruitent</td>
      <td><label> <br />
	   <input name="dt_recruit" class="form-control" type="text" id="dt_recruit" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['dt_of_recruitment']; ?>">
	 
          <br />
      </label></td>
    </tr>
    <tr>
      <td>Date Of Joining</td>
      <td><label> <br />
	   <input name="dt_join" class="form-control" type="text" id="dt_join" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row['dt_of_joining']; ?>">
	  
    
          <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" class="btn btn-info" name="Submit" value="Submit">
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
      
</div>
  <?php include_once('admin_footer.php');?>

    	
</body>
</html>
