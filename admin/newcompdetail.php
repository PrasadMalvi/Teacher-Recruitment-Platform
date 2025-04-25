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
        <div>
          <h1><i class="fa fa-table"></i>&nbsp;  College Details</h1>
          <p>Details</p>
        </div>
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



		<form action="savcompdetail.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
<table width="51%" height="265" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="56%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Name </td>
    <td width="44%"><label> <br />
    <input name="cmp_name" type="text" id="cmp_name" class="validate[required]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Description</td>
    <td><label><br />
        <textarea name="cmp_desc" required="l" id="cmp_desc"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Address </td>
    <td><label><br />
        <textarea name="cmp_addr" required="l" id="cmp_addr"></textarea>
      <br />
    </label></td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact_person_name </td>
    <td><label><br />
      <input name="contact_person_name" type="text" id="contact_person_name" class="validate[required]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College phone_no</td>
    <td><label><br />
      <input name="cmp_phone_no" type="text" id="cmp_phone_no" class="validate[required,custom[telephone],length[10,10]]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College mobile_no</td>
    <td><label> <br />
    <input name="cmp_mobile" type="text" id="cmp_mobile" class="validate[required,custom[telephone],length[10,10]]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;E-mail_id</td>
    <td><label><br />
      <input name="cmp_e_mail_id" type="text" id="cmp_e_mail_id" class="validate[required,custom[email]]">
      <br />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;website</td>
    <td><label><br />
      <input name="cmp_website" type="text" id="cmp_website" class="validate[required]">
      <br />
    </label></td>
  </tr>
  
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logo</td>
    <td><label><br />
        <input name="cmp_logo" type="file" id="cmp_logo">      
        <br />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input type="submit" class="btn btn-info" name="Submit" value="Submit">
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
