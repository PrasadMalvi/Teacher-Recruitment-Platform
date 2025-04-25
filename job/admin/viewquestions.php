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
    <h2>New Question <a href="newquestion.php">New Question</a></h2> 
		
  
      <?php
 include("dbconnect.php");
 $sql="select * from questions";
 $res=mysqli_query($conn,$sql);
 $sno=1;
 ?>
    <table id="rounded-corner">
	<thread>
  <tr>
    <th width="17%"> S.No</th>
    <th width="12%">Question</th>
    <th width="17%">Option1</th>
    <th width="10%">Option2</th>
    <th width="12%">Option3</th>
    <th width="11%">Option4</th>
	    <th width="11%">Correct Answer</th>
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
    <td height="31"><?php echo $sno++;?></td>
    <td><?php echo $row["question"];?></td>
     <td><?php echo $row["option1"];?></td>
    <td><?php echo $row["option2"];?></td>
    <td><?php echo $row["option3"];?></td>
    <td><?php echo $row["option4"];?></td>
	 <td><?php echo $row["answer"];?></td>
     <td><a href="editquestion.php?question_id=
			<?php echo $row["question_id"];?>"
			onclick ="return confirm('Are you sure? Want to Updated this Record')";><img src="images/edit.png" /></a></td>
	            <td>
			<a href="deletequestion?question_id=<?php echo $row["question_id"];?>"
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

