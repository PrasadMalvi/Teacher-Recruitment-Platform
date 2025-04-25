<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('admin_header.php');?>
    <!-- Sidebar menu-->
    <?php include('admin_side_bar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home fa-lg"></a></i></li>
       <!--   <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>-->
        </ul>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="tile-body">

    <form name="form1" method="post" action="savjbapp.php" id="formID">
  <table width="45%" height="143" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="33%">Job Opening Id </td>
      <td width="67%"><label> <br />
      </label>
        <label for="select"></label>
        <label>
        <select name="jb_opening_id" class="form-control" id="jb_opening_id">
		<option value="">select</option>
          <?php
		include('dbconnect.php');
		$sql2="select * from jobs";
		$res=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res))
		{
		?>
		
          <option value="<?php echo $row2['jb_opening_id']; ?>"> <?php echo $row2['jb_name']; ?></option>
          <?php
		}
		?>
        </select>
        <br>
        </label></td>
    </tr>
    <tr>
      <td>Job Seeker Id</td>
      <td><label> <br />
        </label>
        <label for="select"></label>
        <select name="js_id" id="js_id" class="form-control">
		<option value="">select</option>
		  <?php
		include('dbconnect.php');
		$sql1="select * from job_seeker";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
		
          <option value="<?php echo $row1['js_id']; ?>"> <?php echo $row1['js_fname']." ".$row1['js_mname']." ".$row1['js_lname']; ?></option>
          <?php
		}
		?>
        </select>
        <label><br />
        </label></td>
    </tr>
    <tr>
      <td>Applied Date</td>
      <td><label> <br />
	  <input name="applied_date" type="text" class="form-control" id="applied_date" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo date('Y-m-d');  ?>">
		
	
     
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp; Status</td>
      <td><label> <br />
          <input name="status" type="text" class="form-control validate[required]" id="status" value="">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Comments</td>
      <td><label> <br />
          <textarea name="comments" class="form-control" required="l" id="comments"></textarea>
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit">
          <input type="reset" name="Reset" value="Reset">
        </div>
      </label></td>
    </tr>
  </table>
</form>
  </div>

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('admin_footer.php'); ?>
  </body>
</html>
