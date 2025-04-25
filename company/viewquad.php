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
    <h2>Qualification Details <!-- <a href="newquad.php">New Qualification </a> --></h2> 
<?php
  include("dbconnect.php");
  $js_id=$_REQUEST["js_id"];
  $sql="select * from qualification_details qd,job_seeker js where qd.js_id=js.js_id and js.js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  ?>
<table width="97%" border="0" class="table table-hover table-bordered" id="sampleTable">
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
    <td><?php echo $row["q_name"];?></td>
    <td><?php echo $row["university_name"];?></td>
    <td><?php echo $row["coll_name"];?></td>
    <td><?php echo $row["year_of_passing"];?></td>
    <td><?php echo $row["tot_marks"];?></td>
    <td><?php echo $row["obtain_marks"];?></td>
    <td><?php echo $row["perc"];?></td>
    <td><?php echo $row["grade"];?></td>
  <td><!-- <a href="editquad.php?quali_id=
			<?php echo $row["quali_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/edit.png" /></a></td>
	            <td>
			<a href="deletequad.php?quali_id=<?php echo $row["quali_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/trash.gif" /></a></td>
 -->  </tr>
  <?php
  }
  ?>

</table>
</tbody>
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
