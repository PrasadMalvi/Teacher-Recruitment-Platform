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
          <h1><i class="fa fa-th-list"></i>View Job Application Details</h1>
         
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
            <div class="tile-body">	<?php
 include("dbconnect.php");
 
   
  $user_name=$_SESSION["uname"];

 //	$res=mysqli_query($conn,$sql1);
 
 $sql="select * from job_application ja,jobs j,job_seeker js,company_details cd where ja.jb_opening_id=j.jb_opening_id and ja.js_id=js.js_id and ja.cmp_id=cd.cmp_id and cd.cmp_name='$user_name' and status='Applied'";
 //echo $sql;
 $res=mysqli_query($conn,$sql);
 ?>
<table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th width="11%">Application Id</th>
    <th width="18%">Job Opening</th>
    <th width="21%">Job Seeker</th>
    <th width="19%">Applied_date</th>
    <th width="15%">Status</th>
      <th width="16%">Recruit</th>
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
   while($row=mysqli_fetch_array($res))
   {
   ?>
  <tr>
    <td><?php echo $row["app_id"];?></td>
    <td><?php echo $row["jb_name"];?></td>
    <td><?php echo $row["js_fname"];?> <?php echo $row["js_mname"];?>.<?php echo $row["js_lname"];?>  <p><a href="viewjsee1.php?sid=<?php echo $row["js_id"];?>">View Details</a></p> </td>
    <td><?php echo $row["applied_date"];?></td>
    <td><?php echo $row["status"];?></td>
  
    <td><a href="insertemp.php?app_id=<?php echo $row["app_id"];?>&js_id=<?php echo $row["js_id"];?>&jb_opening_id=<?php echo $row['jb_opening_id']; ?>&cmp_id=<?php echo $row['cmp_id'];?>"
			onclick ="return confirm('Are you sure? Want to Recruit the candidate')";>Recruit</a></td>
	            <td>
			<a href="deletejbapp.php?app_id=<?php echo $row["app_id"];?>"
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