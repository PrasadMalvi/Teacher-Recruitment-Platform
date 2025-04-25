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
          <h1><i class="fa fa-th-list"></i>Qualification DETAILS </h1>
         
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
    <h2> JOB CATEGORY DETAILS </h2> 
		
    <p>
<form id="formID" name="form1" method="post" action="savejbcat.php">
  <table width="38%" height="148" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Job Category Name </td>
      <td><label for="label"></label>
        <p>&nbsp;          </p>
        <p>
          <input type="text" name="jb_cat_name" id="label" class="validate[required]"/>
        </p>
        <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</td>
      <td><label for="label2"></label>
        <p>&nbsp;          </p>
        <p>
          <textarea name="descrip" id="label2" required="l"></textarea>
        </p>
        <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td colspan="2"><label for="Submit"></label>
        <div align="center">
          <p>
            <input type="submit" name="Submit" value="Submit" id="Submit" />
          </p>
          <p>&nbsp;    </p>
        </div></td>
    </tr>
  </table>
</form>
</div>
    </div>
                     
                    
    <div class="sidebar" id="sidebar">
	<!--Side Bar Start -->
   <?php 
   include_once('admin_side_bar.php');
   
   ?>
         
  <!--Side Bar End -->
    </div>
    <div class="clear"></div>
    </div> <!--end of center_content-->
        <?php include_once('admin_footer.php');?>

</div>

    	
</body>
</html>