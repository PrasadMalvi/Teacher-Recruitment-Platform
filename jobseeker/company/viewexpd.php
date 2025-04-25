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
    <h2> EXPERIENCE DETAILS <a href="newjobs.php">New Jobs</a></h2> 
		
    <p>
<?php
  include("dbconnect.php");
   $js_id=$_REQUEST["js_id"];
  $sql="select * from experience_details ed,job_seeker js where ed.js_id=js.js_id and js.js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  ?>
<table id="rounded-corner">
<thead>
  <tr>
    <th width="16%">Experiment Id</th>
    <th width="13%">Job Seeker</th>
    <th width="13%">Experience Name</th>
    <th width="18%">Experience Description</th>
    <th width="13%">From Date</th>
    <th width="10%">To Date</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
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
    <td><?php echo $row["exp_id"];?></td>
    <td><?php echo $row["js_id"];?></td>
    <td><?php echo $row["exp_name"];?></td>
    <td><?php echo $row["exp_descip"];?></td>
    <td><?php echo $row["from_date"];?></td>
    <td><?php echo $row["to_date"];?></td>
    <td><a href="editexpd.php?exp_id=
			<?php echo $row["exp_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/edit.png" /></a></td>
	            <td>
			<a href="deleteexpd.php?exp_id=<?php echo $row["exp_id"];?>"
			onclick ="return confirm('Are you sure? Want to delete this Record')";><img src="images/trash.gif" /></a></td>
  </tr>
  <?php
  }
  ?>
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
