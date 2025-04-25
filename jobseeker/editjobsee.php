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

<h3>My Profile</h3>
 <?php
 $js_id=$_REQUEST["js_id"];
  include("dbconnect.php");
  $sql="select * from job_seeker where js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<body>
<form id="form1" name="form1" method="post" action="updatejsee.php">
  <table width="45%" height="1052" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="43%">First Name</td>
      <td width="57%"><label> <br>
      <input name="fname" type="text" id="fname" value="<?php echo $row["js_fname"];?>" class="form-control validate[required,custom[onlyLetter]]"/>
      <input name="js_id" type="hidden" id="js_id" value="<?php echo $row["js_id"]?>">
      <br>
      </label></td>
    </tr>
    <tr>
      <td>Middle Name</td>
      <td><label> <br>
      <input name="mname" type="text" id="mname" value="<?php echo $row["js_mname"];?>" class="form-control validate[required,custom[onlyLetter]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label> <br>
      <input name="lname" type="text" id="lname" value="<?php echo $row["js_lname"];?>" class="validate[required,custom[onlyLetter]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Date Of Birth</td>
      <td><label> <br>
      <input name="dob" type="text" id="dob" value="<?php echo $row["js_dob"];?>" class="form-control validate[required,custom[date]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><p>&nbsp;</p>
        <p>
          <label>
          <textarea name="addr" class="form-control validate[required]" id="addr" <?php echo $row["js_address"];?>="<?php echo $row["js_address"];?>"></textarea>
          </label>
          </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>City</td>
      <td><label> <br>
      <input name="city" type="text" id="city" value="<?php echo $row["js_city"];?>" class="form-control validate[required]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>State</td>
      <td><label> <br>
      <input name="state" type="text" id="state" value="<?php echo $row["js_state"];?>"class="form-control validate[required]" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label> <br>
      <input name="pcode" type="text" id="pcode" value="<?php echo $row["js_pincode"];?>" class="form-control validate[required]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><label> <br>
      <input name="phone" type="text" id="phone" value="<?php echo $row["js_phone_no"];?>" class="form-control validate[required,custom[telephone],length[10,10]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label> <br>
      <input name="mobile" type="text" id="mobile" value="<?php echo $row["js_mobile_no"];?>" class="form-control validate[required,custom[telephone],length[10,10]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>E-Mail Id</td>
      <td><label> <br>
      <input name="js_e_mail" type="text" id="js_e_mail" value="<?php echo $row["js_e_mail"];?>" class="form-control validate[required,custom[email]]"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="56" colspan="2"><label>
        <div align="center">
          <input type="submit" class="btn btn-info" name="Submit" value="Submit" />
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
