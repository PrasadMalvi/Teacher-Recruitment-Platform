<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->03
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2> NEW JOB DETAILS</h2> 
		
    <p>

<?php
  include("dbconnect.php");
  $sql="select * from employee_details";
  $res=mysqli_query($conn,$sql);
  ?>
<table width="69%" height="67" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15%">Employee Id</td>
    <td width="15%">Job Seeker Id</td>
    <td width="13%">Job Id</td>
    <td width="22%">Date_of Recruitment</td>
    <td width="19%">Date Of Joining</td>
    <td width="7%">Edit</td>
    <td width="9%">Delete</td>
  </tr>
   <?php
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $row["emp_id"];?></td>
    <td><?php echo $row["js_id"];?></td>
    <td><?php echo $row["jb_id"];?></td>
    <td><?php echo $row["dt_of_recruitment"];?></td>
    <td><?php echo $row["dt_of_joining"];?></td>
    <td><a href="editempdetail.php?emp_id=<?php echo $row["emp_id"]; ?>">edit</a></td>
    <td><a href="deleteempdetails.php?emp_id=<?php echo $row["emp_id"]; ?>"onclick="return confirm('Are you sure do you want to delete a record');">delete</a></td>
  </tr>
<?php
  }
  ?>
</table>
