<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>VIEW JOB DETAILS </h2> 
		
    <p>
   
<?php
 include("dbconnect.php");
 $sql="select * from jobs j,job_category jc,company_details cd where j.jb_category_id=jc.jb_category_id and j.cmp_id=cd.cmp_id";
 $res=mysqli_query($conn,$sql);
 //echo $sql;
 ?>
<table width="112%" id="rounded-corner">
    <thead>
  <tr>
    <th width="8%">Job Opening Id</th>
    <th width="8%">Job Name</th>
    <th width="10%">Job Description</th>
    <th width="6%">Job Type</th>
    <th width="8%">Category </th>
    <th width="9%">From Date</th>
    <th width="9%">Interview Date</th>
    <th width="11%">Eligibility</th>
    <th width="6%">Num Post</th>
    <th width="9%">Last Date For Application</th>
    <th width="8%">Company </th>
    <th width="8%">Job Location City </th>
    <th width="8%">Job Location Pincode </th>
    <th width="8%">Job Location State </th>
   
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
    <td><?php echo $row["jb_opening_id"];?></td>
    <td><?php echo $row["jb_name"];?></td>
    <td><?php echo $row["jb_descrip"];?></td>
    <td><?php echo $row["jb_type"];?></td>
    <td><?php echo $row["jb_category"];?></td>
    <td><?php echo $row["jb_from_date"];?></td>
    <td><?php echo $row["jb_interview_date"];?></td>
    <td><?php echo $row["eligibility"];?></td>
    <td><?php echo $row["num_posts"];?></td>
    <td><?php echo $row["last_date_app"];?></td>
    <td><?php echo $row["cmp_name"];?></td>
    <td><?php echo $row["jb_loc_city"];?></td>
    <td><?php echo $row["jb_loc_pcode"];?></td>
    <td><?php echo $row["jb_loc_state"];?></td>
   
  </tr>
  <?php
  }
  ?>
  <tbody>
</table>
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
