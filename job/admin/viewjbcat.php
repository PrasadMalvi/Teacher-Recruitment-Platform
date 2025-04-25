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
    <h2> JOB CATEGORY DETAILS <a href="newjbcat.php">New Job Category </a></h2> 
	<p>
	<?php
  include("dbconnect.php");

  $sql="select * from job_category";
  $res=mysqli_query($conn,$sql);
  ?>
		
 
<table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="133">Job Category Id</th>
    <th width="163">Job Category Name</th>
    <th width="238">Description</th>  
    
    <th width="84">EDIT </th>   
    <th width="109">DELETE </th>   
  </tr>
  </thead>
        <tfoot>
    	<tr>
        	<td colspan="16"></td>
        </tr>
    </tfoot>
    <tbody>
    <?php
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row["jb_category_id"];?></td>
    <td><?php echo $row["jb_category"];?></td>
    <td><?php echo $row["description"];?></td>
  
    <td><a href="editjbcat.php?jb_category_id=
			<?php echo $row["jb_category_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/edit.png" /></a></td>
	            <td>
			<a href="deletejbcat.php?jb_category_id=<?php echo $row["jb_category_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/trash.gif" /></a></td>
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



