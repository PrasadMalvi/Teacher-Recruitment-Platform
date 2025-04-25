

<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Course Master</h3>
	<a href="course_master.php"><input type="submit" class="button" value="Add New"></a><br/><br/>
		   <div class="row-fluid">
                                	
                        <div class="widget-content table-container">
          <table id="demo-dtable-01" class="table table-striped">

			<thead>
			<tr  class="data">
			
					  <th  class="data">SL.No</th>
						<th  class="data">Course Name</th>
						<th class="data">Course Desc</th>
						<th class="data">Duration</th>
						<th class="data">EDIT/DELETE</th>
						
			</tr>
			</thead>
			<tbody>
		<?php
  $sl_no=0;
  include('dbconnect.php');
  $sql="select * from course_master";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result))
  {
  $sl_no=$sl_no+1;

  ?>
			
			<tr class="data">
						<td class="data"><?php echo $sl_no;  ?></td>
					<td class="data"><?php echo $row['course_name']; ?></td>
					<td class="data"><?php echo $row['course_desc'];  ?></td>
					<td class="data"><?php echo $row['duration'];   ?></td>
					
					<td class="data">
				<center>
				<a href="course_master_delete.php?id=<?php echo $row['course_id']; ?>"><img src="mos-css/img/oke.png"></a>&nbsp;&nbsp;&nbsp;
				<a href="course_master_edit.php?id=<?php echo $row['course_id']; ?>"><img src="mos-css/img/detail.png"></a>
				</center>
				</td>
			</tr>
			
			<?php
			}
			?>

			</tbody>
		</table>
	</div></div></div>

<div class="clear"></div>

	<!-- Core Scripts -->
	<script src="abc/jquery-1.8.2.min.js"></script>
	<link rel="stylesheet" href="abc/bootstrap.min.css" media="screen">
    <!-- DataTables -->
    <script src="abc/datatables/jquery.dataTables.min.js"></script>
    <script src="abc/datatables/TableTools/js/TableTools.min.js"></script>
    <script src="abc/datatables/dataTables.bootstrap.js"></script>
    <script src="abc/datatables/jquery.dataTables.columnFilter.js"></script>
    
    <!-- Demo Scripts -->
    <script src="abc/dataTables.js"></script>

<?php include('footer.php');  ?>


