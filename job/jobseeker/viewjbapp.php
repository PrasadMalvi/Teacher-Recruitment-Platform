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
    <h2>VIEW JOB APPLICATION DETAILS </h2> 
	<?php

  $user_name=$_SESSION["uname"];
 include("dbconnect.php");
$sql="select * from job_application ja ,jobs j,job_seeker js,company_details cd where ja.jb_opening_id=j.jb_opening_id and ja.js_id=js.js_id and ja.cmp_id=cd.cmp_id and js.js_fname='$user_name'";
 $res=mysqli_query($conn,$sql);
 ?>
<table id="rounded-corner">
<thead>
  <tr>
    <th width="11%">Application Id</th>
    <th width="18%">Job Opening</th>
    <th width="19%">Applied_date</th>
    <th width="15%">Status</th>
   <th width="16%">College</th>
       <th width="16%">Offer Letter </th>
  </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="10"></td>
        </tr>
    </tfoot>
    <tbody>
  <?php
   while($row=mysqli_fetch_array($res))
   {
   ?>
  <tr>
    <td><?php echo $row["app_id"];?></td>
    <td><?php echo $row["jb_name"];?></td>
    <td><?php echo $row["applied_date"];?></td>
    <td><?php echo $row["status"];?></td>
    <td><?php echo $row["cmp_name"];?></td>
	<td><a href="viewoffer.php?of_id=<?php echo $row["js_id"];?>"class="btn btn-info">View</a></td>
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

