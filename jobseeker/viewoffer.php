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

 
 include("dbconnect.php");
 $js_id=$_REQUEST['of_id'];
$sql="select * from employee_details where js_id='$js_id'";
 $res=mysqli_query($conn,$sql);
 ?>
<table id="rounded-corner">
<thead>
  <tr>
   
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
   
	 <td>&nbsp;<img src="../offer/<?php echo $row['offer_ltr'];?>" width="50%" height="50%"></td>
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

