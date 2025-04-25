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
    <th width="13%">Name</th>
 <th width="13%">Address</th>
    <th width="11%">Mobile</th>
    <th width="12%">E-Mail Id</th> 
	<th width="14%">view Details</th>
    <th width="16%">Qualification</th>
    <th width="13%">Experience</th>
    <th width="8%">Delete</th>
  </tr>
  </thead>
        <tfoot>
    	<tr>
        	<td colspan="14"></td>
        </tr>
    </tfoot>
    <tbody>
  <?php
  
 include("dbconnect.php");
 $sql="select * from job_seeker";
 $res=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($res))
	{
?>	
  <tr>
     <td><?php echo $row["js_fname"]." ".$row["js_mname"]." ".$row["js_lname"];?></td>
     <td><?php echo $row["js_address"];?></td>
    <td><?php echo $row["js_mobile_no"];?></td>
    <td><?php echo $row["js_e_mail"];?></td>
    <td><a href="editjobsee.php?js_id=<?php echo $row["js_id"];?>" class="btn btn-info">View Details</a></td>
	<td><a href="viewquad.php?js_id=<?php echo $row["js_id"];?>" class="btn btn-info">View</a></td>
    <td><a href="viewexpd.php?js_id=<?php echo $row["js_id"];?>" class="btn btn-info">View</a></td>
    <td>
			<a href="deletejsee.php?js_id=<?php echo $row["js_id"];?>"
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
           
    <div class="sidebar" id="sidebar">
	<!--Side Bar Start -->
    
  <!--Side Bar End -->
    </div>
    <div class="clear"></div>
    </div> <!--end of center_content-->
        <?php include_once('admin_footer.php');?>

</div>

    	
</body>
</html>

