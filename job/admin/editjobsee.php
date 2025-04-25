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


 <?php
 $js_id=$_REQUEST["js_id"];
  include("dbconnect.php");
  $sql="select * from job_seeker where js_id='$js_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<body>
<form id="formID" name="form1" method="post" action="viewjsee.php">
  <table width="59%" height="366" cellpadding="0" cellspacing="0">
    <tr>
      <td width="45%">First Name</td>
      <td width="55%"><label> <br>
      <input name="fname" class="form-control"  readonly="readonly" id="fname" value="<?php echo $row["js_fname"];?>" />
      <input name="js_id" type="hidden" id="js_id" value="<?php echo $row["js_id"]?>">
      <br>
      </label></td>
    </tr>
    <tr>
      <td>Middle Name</td>
      <td><label> <br>
      <input name="mname" class="form-control" readonly="readonly" id="mname" value="<?php echo $row["js_mname"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label> <br>
      <input name="lname" class="form-control" readonly="readonly" id="lname" value="<?php echo $row["js_lname"];?>"/>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Date Of Birth</td>
      <td><label> <br>
	  <input name="dob" class="form-control" readonly="readonly" id="dob" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" value="<?php echo $row["js_dob"];?>">
	     
	  
      
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><p>&nbsp;</p>
        <p>
          <label>
          <textarea name="addr" class="form-control" readonly="readonly"  id="addr" ><?php echo $row["js_address"];?></textarea>
          </label>
          </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;City</td>
      <td><label> <br>
      <input name="city" class="form-control"  readonly="readonly" id="city" value="<?php echo $row["js_city"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>State</td>
      <td><label> <br>
      <input name="state" class="form-control" readonly="readonly" id="state" value="<?php echo $row["js_state"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label> <br>
      <input name="pcode" class="form-control" readonly="readonly" id="pcode" value="<?php echo $row["js_pincode"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>Phone No </td>
      <td><label> <br>
      <input name="phone" class="form-control" readonly="readonly" id="phone" value="<?php echo $row["js_phone_no"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td> Mobile No </td>
      <td><label> <br>
      <input name="mobile" class="form-control" readonly="readonly" id="mobile" value="<?php echo $row["js_mobile_no"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td>E-Mail Id</td>
      <td><label> <br>
      <input name="emailid" class="form-control" readonly="readonly" id="emailid" value="<?php echo $row["js_e_mail"];?>" />
        <br>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" class="btn btn-info" value="Home" />
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
