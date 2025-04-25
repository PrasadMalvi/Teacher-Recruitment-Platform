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
        <h2>  JOB SEEKER DETAILS</h2> 
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
  

<form name="form1" method="post" action="savjsee.php" id="formID">
  <table width="49%" height="366" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="32%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; First Name</td>
      <td width="68%"><label> <br />
      <input name="fname" type="text" id="fname" class="form-control validate[required,custom[onlyLetter]]" />
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name</td>
      <td><label><br />
        <input name="mname" type="text" id="mname"  class="form-control  validate[required,custom[onlyLetter]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp; Last Name</td>
      <td><label><br />
        <input name="lname" type="text" id="lname" class="form-control  validate[required,custom[onlyLetter]]" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth</td>
      <td><label> <br />
	   <input name="dob" type="date" id="dob" class="form-control " onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="select">
	
      
          <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Gender</td>
      <td><input name="gender" type="radio" value="Male">
        Male 
          <input name="gender" type="radio" value="Female">
          Female</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address</td>
      <td><p>&nbsp;</p>
        <p>
          <label>
          <textarea name="addr" id="addr" class="form-control "  required="l" ></textarea>
          </label>
          </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</td>
      <td><label> <br />
      <input name="city" type="text" id="city" class="form-control validate[required]">
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</td>
      <td><label><br />
        <input name="state" type="text" id="state" class="form-control validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pincode</td>
      <td><label><br />
        <input name="pcode"  type="text" id="pcode" class="form-control validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone</td>
      <td><label><br />
        <input name="phone" type="text" id="phone" class="form-control validate[required,custom[telephone],length[10,10]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;Mobile</td>
      <td><label><br />
        <input name="mobile" type="text" id="mobile" class="form-control validate[required,custom[telephone],length[10,10]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;E-Mail Id</td>
      <td><label><br />
        <input name="emailid" type="emailid" id="emailid" class="form-control validate[required,custom[email]]" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" class="btn btn-info" name="Submit" value="Submit" />
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



