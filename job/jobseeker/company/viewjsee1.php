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
    <h2> JOB SEEKER DETAILS </h2> 
		
    <p>
<?php
$id=$_REQUEST['sid'];
 include("dbconnect.php");
 $sql="select * from job_seeker where js_id='$id'";
 $res=mysqli_query($conn,$sql);
 ?>
 
  <table id="rounded-corner">
    <thead>
    	<tr>
    <th width="7%">Job Seeker Id</th>
    <th width="9%">Name</th>
 
    <th width="7%">DOB</th>
	 <th width="7%">Gender</th>
    <th width="9%">Address</th>
    <th width="6%">City</th>
    <th width="12%">State</th>
    <th width="6%">Pincode</th>
    <th width="7%">Phone No</th>
    <th width="6%">Mobile</th>
    <th width="8%">E-Mail Id</th>
    <th width="3%">Qualification</th>
    <th width="3%">Experience</th>

  </tr>
  </thead>
        <tfoot>
    	<tr>
        	<td colspan="14"></td>
        </tr>
    </tfoot>
    <tbody>
  <?php
    while($row=mysqli_fetch_array($res))
	{
?>	
  <tr>
    <td><?php echo $row["js_id"];?></td>
    <td><?php echo $row["js_fname"]." ".$row["js_mname"]." ".$row["js_lname"];?></td>
    <td><?php echo $row["js_dob"];?></td>
	    <td><?php echo $row["gender"];?></td>
    <td><?php echo $row["js_address"];?></td>
    <td><?php echo $row["js_city"];?></td>
    <td><?php echo $row["js_state"];?></td>
    <td><?php echo $row["js_pincode"];?></td>
    <td><?php echo $row["js_phone_no"];?></td>
    <td><?php echo $row["js_mobile_no"];?></td>
    <td><?php echo $row["js_e_mail"];?></td>
    <td><a href="viewquad.php?js_id=<?php echo $row["js_id"];?>">View</a></td>
    <td><a href="viewexpd.php?js_id=<?php echo $row["js_id"];?>">View</a></td>
    
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

