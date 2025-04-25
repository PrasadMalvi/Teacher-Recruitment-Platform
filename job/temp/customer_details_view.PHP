<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content" style="width:fit-content;">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Customer Details</h1>
         
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
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th>S.No</th>
    <th>CUSTOMER NAME</th>
    
    <th>DATEOFBIRTH</th>
    <th>GENDER</th>
    <th>ADDRESS</th>	
    <th>E-MAIL</th>
    <th>MOBILE</th>
   
    <th>Delete</th>
  </tr>
</thead>
<tbody>
 
   <?php
   $sn=1;
  include('db_connect.php');
  $sql="select * from customer_details ";
  $res=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($res))
  {
  
  ?>
  <tr>
    <td>&nbsp;<?php echo $sn++;?></td>
    <td>&nbsp;<?php echo $row['first_name'];?>&nbsp;<?php echo $row['middle_name'];?>&nbsp;<?php echo $row['last_name'];?></td>
  	
    <td>&nbsp;<?php echo $row['date_of_birth'];?></td>
    <td>&nbsp;<?php echo $row['gender'];?></td>
    <td>&nbsp;<?php echo $row['address'];?></td>
    <td>&nbsp;<?php echo $row['email'];?></td>
    <td>&nbsp;<?php echo $row['mobile'];?></td>
 
    <td><a href="customer_details_delete.php?cid=<?php echo $row['customer_id'];?>">Delete</a></td>
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
	<?php include('footer.php'); ?>
  </body>
</html>