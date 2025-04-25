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

<h3>Qualification</h3>
<?php
 $quali_id=$_REQUEST["quali_id"];
  include("dbconnect.php");
  $sql="select * from qualification_details where quali_id='$quali_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form id="formID" name="form1" method="post" action="updatequad.php">
  <table width="43%" height="216" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="49%">Job Seekers Id</td>
      <td width="51%"><label> <br />
      <input name="js_id" type="text" id="js_id" value="<?php echo $row["js_id"];?>" class="validate[required,custom[onlyNumber]]"/>
        <input name="quali_id" type="hidden" id="quali_id" value="<?php echo  $quali_id;?>">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Qualification Name</td>
      <td><label> <br />
      <input name="q_name" type="text" id="q_name" value="<?php echo $row["q_name"];?>" class="validate[required]">
      <br />
      </label></td>
    </tr>
    <tr>
      <td>University Name</td>
      <td><label><br />
          <textarea name="unversity_name" required="l" id="unversity_name"><?php echo $row["university_name"];?></textarea>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>College Name</td>
      <td><label><br />
          <textarea name="coll_name" required="l" id="coll_name"><?php echo $row["coll_name"];?></textarea>
      <br />
      </label></td>
    </tr>
    <tr>
      <td>year Of Passing</td>
      <td><label> <br />
      <input name="year_of_passing" type="text" id="year_of_passing" value="<?php echo $row["year_of_passing"];?>" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Total Marks</td>
      <td><label> <br />
      <input name="tot_marks" type="text" id="tot_marks" value="<?php echo $row["tot_marks"];?>" class="validate[required,custom[onlyNumber]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Obtain Marks</td>
      <td><label> <br />
      <input name="obtain_marks" type="text" id="obtain_marks" value="<?php echo $row["obtain_marks"];?>" class="validate[required,custom[onlyNumber]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>Percentage</td>
      <td><label> <br />
      <input name="perc" type="text" id="perc" value="<?php echo $row["perc"];?>" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="23">Grage</td>
      <td><label> <br />
      <input name="grd" type="text" id="grd" value="<?php echo $row["grade"];?>" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" class="btn btn-info" value="Update" />
        </div>
      </label></td>
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
