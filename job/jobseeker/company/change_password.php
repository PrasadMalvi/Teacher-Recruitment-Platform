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
        

<?php
	if(isset($_POST['submit']))
	{
		include('dbconnect.php');
		$sql = "select * from admin where user_name ='".$_SESSION['uname']."' and password='".$_POST['old_pass']."'";
		//echo $sql;
		$res = mysqli_query($conn,$sql);
		if(mysql_num_rows($res)>0)
		{
			$sql1 = "update admin set password = '".$_POST['new_pass']."' where user_name ='".$_SESSION['uname']."'";
			$res1 = mysqli_query($conn,$sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="home.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					//document.location="change_password.php";
				</script>
			<?php
		}
	}	
?>


<script type="text/javascript" language="javascript">
//Script to check the user is already exist using AJAX
function checkPassword()
{
	var url = "checkPassword.php?password=";
	var old_pass = document.getElementById("old_pass").value;
	if(old_pass == "") 
	{ 
		document.getElementById('hint').innerHTML = "<input type=\"hidden\" id=\"status\" name=\"status\" value=\"\" />Old password cannot be blank";
		document.getElementById('hint').style.color="red";
		return;
	}
	url += escape(old_pass);
	div="hint";
	doAction(url,div);
}
</script>
<script language="javascript" src="file:///J|/data0/KSOU/KSOU/images/ajax.js"></script>

<style>
/* classes for validator */
	.tfvHighlight
		{font-weight: bold; color: red;}
	.tfvNormal
		{font-weight: normal;	color: black;}
</style>
<script language="JavaScript" src="file:///J|/data0/KSOU/KSOU/images/validator.js"></script>
<script>
// form fields description structure
var a_fields = {
	/*'title': {
		'l': 'Title',  // label
		'r': false,    // required
		'f': 'alpha',  // format (see below)
		't': 't_title',// id of the element to highlight if input not validated
		
		'm': null,     // must match specified form field
		'mn': 2,       // minimum length
		'mx': 10       // maximum length
	},*/
	'old_pass':{'l':'Old Password','r':true,'f':'','t':'t_old_pass'},
	'new_pass':{'l':'New Password','r':true,'f':'','t':'t_new_pass'},
	'c_new_pass':{'l':'Confirm Password','r':true,'f':'','t':'t_c_new_pass','m':'new_pass'},
	'status':{'l':'Old Password','r':true,'f':'','t':'t_old_pass'}
},
	
o_config = {
	'to_disable' : ['Submit', 'Reset'],
	'alert' : 1
}

// validator constructor call
var v = new validator('password', a_fields, o_config);	
</script>	


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
    <h2>Welcome </h2> 
	<form name="password" enctype="multipart/form-data" action="change_password.php" method="post" onSubmit="return v.exec()">
<table width="80%" align="center">
	<tr>
		<td width="25%" style="font-weight:bold;" height="21" id="t_old_pass">Old Password</td>
		<td width="40%"><input type="password" class="form-control" name="old_pass" id="old_pass" style="width:200px;" onBlur="checkPassword();" /></td>
		<td width="35%" style="font-weight:bold;" height="21"><span id="hint"><input type="hidden" id="status" name="status" value="" /></span></td>
	</tr>
	<tr bgcolor="#E4EEE5">
		<td style="font-weight:bold;" height="21" id="t_new_pass">New Password</td>
		<td><input type="password" class="form-control" name="new_pass" id="new_pass" style="width:200px;" /></td>
		<td style="font-weight:bold;" height="21"></td>
	</tr>
	<tr>
		<td style="font-weight:bold;" height="21" id="t_c_new_pass">Retype Password</td>
		<td><input type="password" name="c_new_pass" class="form-control" id="c_new_pass" style="width:200px;" /></td>
		<td style="font-weight:bold;" height="21"></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" class="btn btn-info" value="Submit" name="submit" />&nbsp;<input type="reset" class="btn btn-danger" name="reset" value="Reset" /></td>
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

