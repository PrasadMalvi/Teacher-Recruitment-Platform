<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tages.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('admin_header.php');?>
    <!-- Sidebar menu-->
<?php include('admin_side_bar.php');?>
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
			
              
<?php include_once("dbconnect.php");?>
<?php
		$user=$_SESSION["uname"];
		$sql_js="select * from job_seeker where js_fname='$user'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		$jsid=$row_js['js_id'];
		?>
                        
<form action="savexpd.php" method="post" name="registration" onsubmit="return v.exec()" name="formID" id="formID">
<input name="jsid" type="hidden" id="jsid" value="<?php echo $jsid; ?>">
<table width="114%" border="0" class="table table-hover table-bordered" id="sampleTable">
                <thead>
				<tr>
	<td bgcolor="#4682B4" width="10"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td class="header1" nowrap>Experience Details of <?php  echo $row_js['js_fname']." ".$row_js['js_mname']." ".$row_js['js_lname']; ?><img src="img/pixel.gif" width="10" height="1" border="0"></td>
	<td><img src="img/formtab_r.gif" width="10" height="21" border="0"></td>
	<td background="img/line_t.gif" width="100%">&nbsp;</td>
	<td background="img/line_t.gif"><img src="img/pixel.gif" width="10" height="1" border="0"></td>
</tr>
<tr>
	<td background="img/line_l.gif">&nbsp;</td>
	<td colspan="3">
	<img src="img/pixel.gif" width="1" height="10" border="0"><br>
	<div align="center"
	 id="error_registration" style="display: block;"></div>
	<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td bgcolor="#DBEAF5">
		<table cellspacing="1" cellpadding="2" border="0" width="100%" id="tab1">
       
		<tr bgcolor="#ffffff">
			<td id="t_first_name" width="20%" colspan="2">&nbsp;Experience:</td>
			<td width="32%" colspan="2"><input type="text" name="exp_name" size="10" class="ctrl validate[required]"></td>
			<td id="t_last_name" width="16%">&nbsp; Description:</td>
			<td width="32%" colspan="2"><input type="text" name="exp_desc" size="10" class="ctrl validate[required]"></td>
		</tr>
		
		<tr bgcolor="#ffffff"> 
			
			<td class="2" id="t_experience" >&nbsp; From Date:</td>
			<td colspan="6" ><input name="date1" type="Date"></td>	
				  </tr>
					  
					  <tr bgcolor="#ffffff">
			<td colspan="2" id="t_designation" >&nbsp;To Date:</td>
			<td colspan="6"><input name="date" type="Date" id="date"></td>
		</tr>
		
		
		
		<tr>
		
		
		</table></td></tr></table>
		<img src="img/pixel.gif" width="1" height="10" border="0"><br>
	</td>
	<td background="img/line_r.gif">&nbsp;</td>
	</tr>
<tr>
	<td width="10"><img src="img/formtab_b.gif" width="10" height="20" border="0"></td>
	<td bgcolor="#4682B4" colspan="4" align="right">
	<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td class="btn" width="100"><input type="submit" name="Submit" value="Save" class="btnform"></td>
		<td width="1"><img src="img/pixel.gif" width="1" height="18" border="0"></td>
		<td class="btn" width="100"><input type="reset" name="Reset" value="Reset" class="btnform"></td>		
		<td width="1"><img src="img/pixel.gif" width="1" height="18" border="0"></td>
	</tr>
	</table>
	</td>
</tr>
</table>
</form>				

			
<br /></p>
			
		</div>
	  </div>
	