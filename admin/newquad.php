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

    <p>
   

		<?php
		include("dbconnect.php");
		$js_id=$_REQUEST["js_id"];
		$sql_js="select * from job_seeker where js_id='$js_id'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		?>
  
	<!--Header End Here -->
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>QUALIFICATION DETAILS of <?php  echo $row_js['js_fname']." ".$row_js['js_mname']." ".$row_js['js_lname']; ?></h2> 
<form  name="form1" method="post" action="savquad.php" id="formID">
<table width="42%" height="499" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="49%" height="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qualification </td>
    <td width="51%"><label> <br />
    <input name="q_name" type="text" id="q_name" class="form-control validate[required]"/>
      <input name="jsid" type="hidden" id="jsid" value="<?php echo $jsid; ?>">
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">University Name</td>
    <td><label> <br />
        <textarea name="uni_name" class="form-control" required="l" id="uni_name"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Name</td>
    <td><label> <br />
        <textarea name="coll_name" class="form-control " required="l" id="coll_name"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">Year Of Passing</td>
    <td><label> <br />
    <input name="yr_of_pass" type="text" id="yr_of_pass" class="form-control validate[required]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="47">Total Marks</td>
    <td><label> <br />
    <input name="tot_marks" type="text" id="tot_marks" class=" form-control validate[required,custom[onlyNumber]]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="51"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obtain Marks</td>
    <td><label> <br />
    <input name="obtain_marks" type="text" id="obtain_marks" class="form-control validate[required,custom[onlyNumber]]"/>
      <br />
    </label></td>
  </tr>
  <tr>
    <td height="83"> Percentage</td>
    <td><label>
      <input name="perc" type="text" id="perc" class="form-control validate[required]" />
    </label></td>
  </tr>
  <tr>
    <td height="23"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grade</td>
    <td><label> <br />
    <input name="grd" type="text" id="grd" class="form-control validate[required]"/>
      <br />
      <br />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label> </label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
      </div></td>
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
