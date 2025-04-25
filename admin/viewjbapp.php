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
          <h1><i class="fa fa-th-list"></i>Job Application Details</h1>
         
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
			<a href="newjbapp.php" class="btn btn-primary">New Job Application</a></br><br>
              <table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th width="11%">Application Id</th>
    <th width="18%">Job Opening</th>
    <th width="21%">Job Seeker</th>
    <th width="19%">Applied_date</th>
    <th width="15%">Status</th>
    <th width="16%">Comments</th>
    <th width="16%">Edit</th>
    <th width="16%">Delete</th>
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
 $sql="select * from job_application ja,jobs j,job_seeker js where ja.jb_opening_id=j.jb_opening_id and ja.js_id=js.js_id";
 $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
   ?>
  <tr>
    <td><?php echo $row["app_id"];?></td>
    <td><?php echo $row["jb_name"];?></td>
    <td><?php echo $row["js_fname"];?> <?php echo $row["js_mname"];?>.<?php echo $row["js_lname"];?></td>
    <td><?php echo $row["applied_date"];?></td>
    <td><?php echo $row["status"];?></td>
    <td><?php echo $row["comments"];?></td>
    <td><a href="editjbapp.php?app_id=
			<?php echo $row["app_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	            <td>
			<a href="deletejbapp.php?app_id=<?php echo $row["app_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/icons8-delete-100 (2).png" width="50px" height="50px" /></a></td>
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