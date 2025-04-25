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
  <link href="images/grid_style.css"" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
	
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2> Employee Details</h2> 
    <form name="form1" method="post" action="savempdetail.php" id="formID">
  <table width="49%" height="324" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="31%" height="72">Job Seeker </td>
      <td width="69%"><label> <br>
          <select name="js_id" id="js_id" class="form-control">
		   <option value="">select</option>
		  <?php
		include('dbconnect.php');
		$sql2="select * from job_seeker";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		?>
		
         <option value="<?php echo $row2['js_id']; ?>"> <?php echo $row2['js_fname']." ".$row2['js_mname']." ".$row2['js_lname']; ?></option>
          <?php
		}
		?>
          </select>        
          <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="69">Job Opening </td>
      <td><label> <br>
          <select name="jb_opening_id" id="jb_opening_id" class="form-control">
		   <option value="">select</option>
		  <?php
		include('dbconnect.php');
		$sql1="select * from jobs";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
	     
          <option value="<?php echo $row1['jb_opening_id']; ?>"> <?php echo $row1['jb_name']; ?></option>
          <?php
		}
		?>
          </select>        
          <br />
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="71">Date Of Reqruitment</td>
      <td><label> <br> 
	    <input name="dt_recruit" type="text" id="dt_recruit" class="form-control" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
      
		  
	  
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="69">Date Of Joining</td>
      <td><label> <br>
	    <input name="dt_join" type="text"  class="form-control" id="dt_join" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
      
	
	
		  
	
        
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" class="btn btn-info" name="Submit" value="Submit">
          <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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
