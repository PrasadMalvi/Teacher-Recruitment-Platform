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
          <h1><i class="fa fa-th-list"></i>Job Details</h1>
         
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
			<a href="newjobs.php" class="btn btn-primary">New Jobs</a></br><br>
              <table width="97%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th width="12%">Job Opening Id</th>
    <th width="10%">Job Name</th>
 
    <th width="11%">Form Date</th>
    <th width="13%">Interview Date</th>

    <th width="10%">Num Post</th>
    <th width="20%">Last Date For Application</th>
    <th width="10%">Company </th>
  <th width="6%">Edit</th>
    <th width="8%">Delete</th>
  </tr>
  </thead>
        <tfoot>
    	<tr>
        	<td colspan="16"></td>
        </tr>
    </tfoot>
	<tbody>
  <?php

 include("dbconnect.php");
 $user=$_SESSION['uname'];
 $sql="select * from jobs j,job_category jc,company_details cd where j.jb_category_id=jc.jb_category_id and j.cmp_id=cd.cmp_id and cmp_name='$user'";
 $res=mysqli_query($conn,$sql);
 //echo $sql;
 

 while($row=mysqli_fetch_array($res))
 {
 ?>
  <tr>
    <td><?php echo $row["jb_opening_id"];?></td>
    <td><?php echo $row["jb_name"];?></td>
	<td><?php echo $row["jb_from_date"];?></td>
    <td><?php echo $row["jb_interview_date"];?></td>
   <td><?php echo $row["num_posts"];?></td>
    <td><?php echo $row["last_date_app"];?></td>
    <td><?php echo $row["cmp_name"];?></td>
    <td><a href="editjobs.php?jb_opening_id=
			<?php echo $row["jb_opening_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	            <td>
			<a href="deletejobs.php?jb_opening_id=<?php echo $row["jb_opening_id"];?>"
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