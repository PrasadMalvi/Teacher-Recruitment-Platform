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
    <h2> JOB CATEGORY DETAILS </h2> 
	<p>
	<?php
  include("dbconnect.php");

  $sql="select * from job_category";
  $res=mysqli_query($conn,$sql);
  ?>
		
 
<table id="rounded-corner">
	<thread>
  <tr>
    <th width="133">Job Category Id</th>
    <th width="163">Job Category Name</th>
    <th width="238">Description</th>  
    
  
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



