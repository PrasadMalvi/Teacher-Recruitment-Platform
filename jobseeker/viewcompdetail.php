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
          <h1><i class="fa fa-th-list"></i>College Details</h1>
         
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
    <th width="17%"> Id</th>
    <th width="12%"> Name</th>
    <th width="19%"> Description</th>
    <th width="17%"> Address</th>
    <th width="15%">Contact Person Name</th>
    <th width="19%">Phone No</th>
    <th width="10%">Mobile No</th>
    <th width="12%">E-mail</th>
    <th width="11%">Website</th>
   
  </tr>
  </thead>
   <?php
 include("dbconnect.php");
 $sql="select * from company_details";
 $res=mysqli_query($conn,$sql);
 ?>
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
    <td height="31"><?php echo $row["cmp_id"];?></td>
    <td><?php echo $row["cmp_name"];?></td>
    <td><?php echo $row["cmp_descrip"];?></td>
    <td><?php echo $row["cmp_addr"];?></td>
    <td><?php echo $row["contact_person_name"];?></td>
    <td><?php echo $row["cmp_phone_no"];?></td>
    <td><?php echo $row["cmp_mobile"];?></td>
    <td><?php echo $row["cmp_e_mail_id"];?></td>
    <td><?php echo $row["cmp_website"];?></td>
   
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
