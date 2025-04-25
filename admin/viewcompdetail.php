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
			<a href="newcompdetail.php" class="btn btn-primary">New College</a></br><br>
              <table width="91%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    <th width="9%"> Sl No</th>
    <th width="11%"> Name</th>
    <th width="14%"> Address</th>
    <th width="14%">Mobile No</th>
    <th width="9%">E-mail</th>
    <th width="12%">Website</th>
	    <th width="12%">Logo</th>
    <th width="9%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  </thead>
        <tfoot>
    	<tr>
        	<td colspan="11"></td>
        </tr>
    </tfoot>
	<tbody>
	  <?php
 include("dbconnect.php");
 $sl=1;
 $sql="select * from company_details";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
 {
 ?>
  <tr>
    <td height="31"><?php echo $sl++;?></td>
    <td><?php echo $row["cmp_name"];?></td>
     <td><?php echo $row["cmp_addr"];?></td>
    <td><?php echo $row["cmp_mobile"];?></td>
    <td><?php echo $row["cmp_e_mail_id"];?></td>
    <td><?php echo $row["cmp_website"];?></td>
	<td><img src="../img/<?php echo $row['img'];?>" width="100" height="120"></td>
	<td>&nbsp;<a href="editcompdetail.php?cmp_id=<?php echo $row["cmp_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/icons8-edit-64.png" width="50px" height="50px"/></a></td>
	  <td><a href="deletecompdetail.php?cmp_id=<?php echo $row["cmp_id"];?>"
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