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
    <h2>Exam Results</h2> 
	<?php

  $user_name=$_SESSION["uname"];
 include("dbconnect.php");
$sql="select * from js_results jr,job_seeker js where jr.js_id=js.js_id";
 $res=mysqli_query($conn,$sql);

 ?>
<table id="rounded-corner">
<thead>
  <tr>
  
   <th width="11%">S.No</th>
       <th width="11%">Job Seeker</th>
    <th width="11%">Exam Date</th>
    <th width="18%">Correct Answers</th>
    <th width="19%">Wrong Answers</th>
       </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="9"></td>
        </tr>
    </tfoot>
    <tbody>
  <?php
   $sno=1;
   while($row=mysqli_fetch_array($res))
   {
   ?>
  <tr>
     <td><?php echo $sno++;?></td>
   <td><?php echo $row["js_fname"]." ".$row["js_mname"]." ".$row["js_lname"];?></td>
    <td><?php echo $row["exam_date"];?></td>
    <td><?php echo $row["correct_answers"];?></td>
	<td><?php echo $row["wrong_answers"];?></td>
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

