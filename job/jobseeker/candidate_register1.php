<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('admin_header.php');?>
    <!-- Sidebar menu-->

    <main class="app-content" style="width:fit-content;">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i></h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home fa-lg"></i></a></li>
         <!-- <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>-->
        </ul>
      </div>
	 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">


	</div>
	
	<div id="container">																																																																																																																																																																											
	  <div id="center" class="column">
	  	
	  	<div id="content">
			
			
<?php include_once("dbconnect.php");?>
<?php
		$user=$_SESSION['uname'];
		$sql_js="select * from job_seeker where js_fname='$user'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		$jsid=$row_js['js_id'];
		?>

                        
<form action="savquad.php" method="post" name="formID" id="formID" onsubmit="return v.exec()">
 <input name="jsid" type="hidden" id="jsid" value="<?php echo $jsid; ?>">
<table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
				<tr>
	<td bgcolor="#4682B4" width="10"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td class="header1" nowrap>Educational Details of <?php  echo $row_js['js_fname']." ".$row_js['js_mname']." ".$row_js['js_lname']; ?><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	
	
	
</tr>

	<div align="center"
	 id="error_registration" style="display: block;"></div>
	
		<tr bgcolor="#ffffff">
			<td id="t_first_name" width="20%" colspan="2">&nbsp;Qualification:</td>
			<td width="32%" colspan="2"><input type="text" name="q_name" size="10"  class="ctrl validate[required]"></td>
			<td id="t_last_name" width="16%">&nbsp; University:</td>
			<td width="32%" colspan="2"><input type="text" name="uni_name" size="10" class="ctrl validate[required]"></td>
		</tr>
		<tr bgcolor="#ffffff"> 
		    <td colspan="2" id="t_university">&nbsp; College Name:</td>
			<td width="10%" colspan="2"><input type="text" name="coll_name" class="ctrl validate[required]" size="5"></td>
			<td colspan="2" id="t_university" width="10%">&nbsp; Year Of Passing:</td>
			<td width="10%" colspan="2"><input type="date" name="yr_of_pass" class=" validate[required]" size="5"></td>		
		</tr>
		<tr bgcolor="#ffffff"> 
			<td colspan="2" id="t_year_pass">&nbsp;Total Marks:</td>
			<td colspan="2"><input name="tot_marks" id="tot_marks" type="text" class="ctrl validate[required,custom[onlyNumber]]" size="10" ></td>
			<td id="t_percentage" width="10%">&nbsp; Obtained Marks:</td>
			<td width="10%" colspan="2"><input type="text" name="obtain_marks" id="obtain_marks" onchange="calcMARKS()" class="ctrl validate[required,custom[onlyNumber]]" size="5"></td>	
		</tr>
		<tr bgcolor="#ffffff"> 
		<td id="t_first_name" width="20%" colspan="2">&nbsp;Percentage:</td>
			<td width="32%" colspan="5"><input type="text" name="perc" id="perc" size="10" class="ctrl"></td>
		</tr>
		<tr>
		<td id="grd" width="20%" colspan="2">&nbsp;Grade:</td>
			<td width="32%" colspan="5"><input type="text" name="grd" id="grd" size="10" class="ctrl"></td>
		</tr>
		
		
		
		</table></td></tr></table>
		<img src="img/pixel.gif" width="1" height="10" border="0"><br>
	</td>
	<td background="img/line_r.gif">&nbsp;</td>
	</tr>

	
	<td bgcolor="#4682B4" colspan="4" align="right">
	<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td class="btn" width="100"><input type="submit" name="Submit" value="Save" class="btn btn-info"></td>
		<td width="1"><img src="img/pixel.gif" width="1" height="18" border="0"></td>
		<td class="btn" width="100"><input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>		
		<td width="1"><img src="img/pixel.gif" width="1" height="18" border="0"></td>
	</tr>
	</table>
	</td>
</tr>
</table>
</tr>
</table>
</form>				

			
<br /></p>
			
		</div>
	  </div>
	  
	  <?php include('admin_side_bar.php');?>
	   <?php include('script.php');  ?>
	  
	   
	  
	  	   <?php include('footer.php');  ?>
</body>
</html>