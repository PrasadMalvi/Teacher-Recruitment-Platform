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
          <h1><i class="fa fa-th-list"></i>EXPERIENCE DETAILS </h1>
         
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
			
              <table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th width="14%">Experiment Id</th>
    <th width="12%">Job Seeker</th>
    <th width="12%">Experience Name</th>
    <th width="19%">Experience Description</th>
    <th width="9%">From Date</th>
    <th width="12%">To Date</th>
    <th width="11%">Edit</th>
    <th width="11%">Delete</th>
  </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="9"></td>
        </tr>
    </tfoot>
    <tbody>
  <?php
  include("dbconnect.php");
   $js_id=$_REQUEST["js_id"];
  $sql="select * from experience_details ed,job_seeker js where ed.js_id=js.js_id and js.js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row["exp_id"];?></td>
    <td><?php echo $row["js_id"];?></td>
    <td><?php echo $row["exp_name"];?></td>
    <td><?php echo $row["exp_descip"];?></td>
    <td><?php echo $row["from_date"];?></td>
    <td><?php echo $row["to_date"];?></td>
    <td><a href="editexpd.php?exp_id=
			<?php echo $row["exp_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	            <td>
			<a href="deleteexpd.php?exp_id=<?php echo $row["exp_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/trash.gif" /></a></td>
  </tr>
  <?php
  }
  ?>
   </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('admin_footer.php'); ?>
  </body>
</html>