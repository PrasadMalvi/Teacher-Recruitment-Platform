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
          <h1><i class="fa fa-th-list"></i>Category Details</h1>
         
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
			
        <tfoot>
    	<tr>
        	<td colspan="9"></td>
        </tr>
    </tfoot>
	<tbody>            
    <h2> Update Job Category</h2> 
		
    <p> 	
	<?php
 $jb_category_id=$_REQUEST["jb_category_id"];
  include("dbconnect.php");
  $sql="select * from job_category where jb_category_id='$jb_category_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form id="formID" name="form1" method="post" action="updatejbcat.php">
  <table width="36%" height="148" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>Job Category Name </td>
      <td><label for="label"></label>
        <p>&nbsp;</p>
        <p>
          <input name="jb_cat_name" type="text" class="validate[required]" id="label" value="<?php echo $row["jb_category"];?>"/>
          <input name="jb_category_id" type="hidden" id="jb_category_id" value="<?php echo $row["jb_category_id"];?>">
        </p>
        <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label for="label2"></label>
        <p>&nbsp;</p>
        <p>
          <textarea name="descrip" id="label2" required="l"><?php echo $row["description"];?></textarea>
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