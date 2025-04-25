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
          <h1><i class="fa fa-th-list"></i>EMPLOYEE DETAILS</h1>
         
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
			<a href="newempdetail.php" class="btn btn-primary">New Employee</a></br><br>
              <table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th width="15%">Employee Id</th>
    <th width="15%">Job Seeker Id</th>
    <th width="13%">Job Opening Id</th>
    <th width="22%">Date of Recruitment</th>
   <!--  <th width="19%">Date Of Joining</th> -->
    <th width="7%">Edit</th>
    <th width="9%">Delete</th>
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
	 $user=$_SESSION['uname'];
  $sql="select * from employee_details ed,job_seeker js,jobs j where ed.js_id=js.js_id and ed.jb_opening_id=j.jb_opening_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row["emp_id"];?></td>
    <td><?php echo $row['js_fname']." ".$row['js_mname']." ".$row['js_lname']; ?></td>
    <td><?php echo $row['jb_name']; ?></td>
    <td><?php echo $row["dt_of_recruitment"];?></td>
    <!-- <td></td> -->
   <td><a href="editempdetail.php?emp_id=<?php echo $row["emp_id"];?>"onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	            
<td><a href="deleteempdetail.php?emp_id=<?php echo $row["emp_id"];?>"onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/icons8-delete-100 (2).png" width="50px" height="50px" /></a></td>
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