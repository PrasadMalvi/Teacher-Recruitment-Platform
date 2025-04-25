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
          <h1><i class="fa fa-th-list"></i>My Profile</h1>
         
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
			
              <table width="97%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
        <th width="9%">Name</th>
 
    <th width="7%">DOB</th>
    <th width="9%">Address</th>
    <th width="6%">City</th>
    <th width="12%">State</th>
    <th width="6%">Pincode</th>
    <th width="7%">Phone No</th>
    <th width="6%">Mobile</th>
    <th width="8%">E-Mail Id</th>
    <th width="8%">Pic</th>
    <!-- <th width="3%">Qualification</th>
    <th width="3%">Experience</th> -->
    <th width="3%">Edit</th>
    	</tr>
  </thead>
  <?php
 include("dbconnect.php");
   //session_start();
  $user_name=$_SESSION["uname"];

 $sql="select * from job_seeker where js_fname='$user_name'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 ?>
        <tfoot>
    	<tr>
        	<td colspan="15"></td>
        </tr>
    </tfoot>
    <tbody>
 
  <tr>
  
    <td><?php echo $row["js_fname"]." ".$row["js_mname"]." ".$row["js_lname"];?></td>
    <td><?php echo $row["js_dob"];?></td>
    <td><?php echo $row["js_address"];?></td>
    <td><?php echo $row["js_city"];?></td>
    <td><?php echo $row["js_state"];?></td>
    <td><?php echo $row["js_pincode"];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $row["js_phone_no"];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $row["js_mobile_no"];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $row["js_e_mail"];?></td>
     <td>&nbsp;<img src="../photo/<?php echo $row['image'];?>" width="100" height="120"></td>
<!--     <td><a href="viewquad.php?js_id=<?php echo $row["js_id"];?>" class="btn btn-primary">View</a></td>
    <td><a href="viewexpd.php?js_id=<?php echo $row["js_id"];?>" class="btn btn-primary">View</a></td>
 -->    <td><a href="editjobsee.php?js_id=<?php echo $row["js_id"];?>"onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	<td>
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