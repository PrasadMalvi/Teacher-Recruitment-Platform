<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('admin_header.php');?>
    <!-- Sidebar menu-->
<?php include('admin_side_bar.php');?>
    <main class="app-content" style="width:fit-content;">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Expirience Details </h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home fa-lg"></i></a></li>
         <!-- <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>-->
        </ul>
      </div>
	 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
			<a href="candidate_register2.php" class="btn btn-primary">Add Experience</a></br><br>
			
              <table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
<?php
include("dbconnect.php");
$user=$_SESSION["uname"];
		$sql_js="select * from job_seeker where js_fname='$user'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		$jsid=$row_js['js_id'];
  
  //$js_id=$_REQUEST["js_id"];
  $sql="select * from experience_details where js_id='$jsid'";
  $res=mysqli_query($conn,$sql);
  ?>


  <tr>
    <th width="16%">Sl no</th>
    <th width="13%">Job Seeker Name</th>
    <th width="13%">Experience Name</th>
    <th width="18%">Experience Description</th>
    <th width="13%">From Date</th>
    <th width="10%">To Date</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="9"></td>
        </tr>
    </tfoot>
    <tbody>
  <?php
  $sl=1;
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row_js["js_fname"];?></td>
    <td><?php echo $row["exp_name"];?></td>
    <td><?php echo $row["exp_descip"];?></td>
    <td><?php echo $row["from_date"];?></td>
    <td><?php echo $row["to_date"];?></td>
    <td><a href="editexpd.php?exp_id=
			<?php echo $row["exp_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	            <td>
			<a href="deleteexpd.php?exp_id=<?php echo $row["exp_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/icons8-delete-100 (2).png" width="50px" height="50px" /></a></td>
  </tr>
  <?php
  }
  ?>
</table>
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
