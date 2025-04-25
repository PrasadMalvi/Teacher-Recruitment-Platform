<!DOCTYPE html>
<html lang="en">
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-table"></i>&nbsp; Customer Details</h1>
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

<?php include('cal.php');?>
<form name="formID" ID="formID" method="post"  action="customer_details_insert.php">
  
 <table width="476" height="503" border="0" >
    <tr>
      <td width="122">FIRST_NAME</td>
      <td width="171"><input name="f_name" type="text" id="f_name"class="form-control border-input  validate[required,custom[onlyLetter]]" placeholder="Frist Name" ></td>
    </tr>
    <tr>
      <td>MIDDLE_NAME</td>
      <td><input name="m_name" type="text" id="m_name" class="form-control border-input validate[required,custom[onlyLetter]]" placeholder="M Name"></td>
    </tr>
    <tr>
      <td>LAST_NAME</td>
      <td><input name="l_name" type="text" id="l_name" class="form-control border-input validate[required,custom[onlyLetter]]" placeholder="Last Name" ></td>
    </tr>
    <tr>
      <td>DATE_OF_BIRTH</td>
      <td><?php					
      $date_default = "";
     
      
      
         $date_default ="1980-01-01";
      



	  $myCalendar = new tc_calendar("dob", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y')-10);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>	</td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input name="gender" type="radio" value="male" class="form-control border-input validate[required]" >
MALE
  <input name="gender" type="radio" value="female" class="form-control border-input validate[required]" >
FEMALE</td>
    </tr>
    <tr>
      <td>ADDRESS</td>
      <td><textarea name="address" id="address" class="form-control border-input validate[required]" placeholder="Address"></textarea></td>
    </tr>
    <tr>
      <td>MOBILE</td>
      <td><input name="mobile" type="text" id="mobile" class="form-control border-input validate[required,custom[mobile]]" placeholder="Mobile"></td>
    </tr>
    <tr>
      <td height="49">EMAIL</td>
      <td><input name="email" type="text" value="" id="email" class="form-control border-input validate[required,custom[email]]" placeholder="email"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit">        <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  </form>
  </div>

           
          </div>
        </div>
        
       
    </main>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
  </body>
</html>