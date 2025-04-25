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
          <h1><i class="fa fa-th-list"></i>Qualification DETAILS </h1>
         
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
			<a href="candidate_register1.php" class="btn btn-primary">Add Qualification</a></br><br>
			
<?php
include("dbconnect.php");
$user=$_SESSION["uname"];
		$sql_js="select * from job_seeker where js_fname='$user'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		$jsid=$row_js['js_id'];
  $sql="select * from qualification_details where js_id='$jsid'";
  $res=mysqli_query($conn,$sql);
  ?>
 
              <table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
        	<th width="18%">Name</th>
            <th width="18%">University Name</th>
			<th width="12%">College Name</th>
            <th width="12%">Year Of Passing</th>
            <th width="18%">Tot Marks </th>
            <th width="18%">Obtain Marks</th>
			<th width="12%">%</th>
            <th width="18%">Grade </th>
            <th width="3%">Update</th>
            <th width="7%">Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="9"></td>
        </tr>
    </tfoot>
	<tbody>
  <?php
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row["q_name"];?></td>
    <td><?php echo $row["university_name"];?></td>
    <td><?php echo $row["coll_name"];?></td>
    <td><?php echo $row["year_of_passing"];?></td>
    <td><?php echo $row["tot_marks"];?></td>
    <td><?php echo $row["obtain_marks"];?></td>
    <td><?php echo $row["perc"];?></td>
    <td><?php echo $row["grade"];?></td>
  <td><a href="editquad.php?quali_id=
			<?php echo $row["quali_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	            <td>
			<a href="deletequad.php?quali_id=<?php echo $row["quali_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/icons8-delete-100 (2).png" width="50px" height="50px" /></a></td>
  </tr>
  <?php
  }
  ?>

</table>
</tbody>
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
