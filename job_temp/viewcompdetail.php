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
    <h2>New Company Details <a href="newcompdetail.php">New Company </a></h2> 
		
  
      <?php
 include("dbconnect.php");
 $sql="select * from company_details";
 $res=mysqli_query($conn,$sql);
 ?>
    <table id="rounded-corner">
	<thread>
  <tr>
    <th width="17%"> Id</th>
    <th width="12%"> Name</th>
    <th width="17%"> Address</th>
    <th width="10%">Mobile No</th>
    <th width="12%">E-mail</th>
    <th width="11%">Website</th>
	    <th width="11%">Logo</th>
    <th width="13%">Edit</th>
    <th width="15%">Delete</th>
  </tr>
  </thead>
        <tfoot>
    	<tr>
        	<td colspan="11"></td>
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
     <td><?php echo $row["cmp_addr"];?></td>
    <td><?php echo $row["cmp_mobile"];?></td>
    <td><?php echo $row["cmp_e_mail_id"];?></td>
    <td><?php echo $row["cmp_website"];?></td>
	 <td><img src="files/<?php echo $row["cmp_logo"];?>" width="100px" height="100px"></td>
     <td><a href="editcompdetail.php?cmp_id=
			<?php echo $row["cmp_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/edit.png" /></a></td>
	            <td>
			<a href="deletecompdetail?cmp_id=<?php echo $row["cmp_id"];?>"
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

