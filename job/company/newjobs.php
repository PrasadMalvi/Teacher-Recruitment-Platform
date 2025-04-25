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

    <p>
   
<form name="form1" method="post" action="savjobs.php" id="formID">
  <table width="57%" height="1143" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="37%" height="55">&nbsp;&nbsp;&nbsp;Job </td>
      <td width="63%"><label> <br>
      <input name="jb_name" type="text" id="jb_name" class="form-control validate[required,custom[onlyLetter]]">
        <br>
      </label></td>
    </tr>
    <tr>
      <td height="49">&nbsp;&nbsp;&nbsp;Job Description</td>
      <td><label> <br>
          <textarea name="jb_desc" class="form-control validate[required]" id="jb_desc"></textarea>
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="34"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type</td>
      <td><label> <br>
          <select name="jb_type" id="jb_type" class="form-control" >
            <option>Temporary</option>
            <option>Permanent</option>
            <option>Contract</option>
          </select>        
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="52">&nbsp;&nbsp;&nbsp;&nbsp;Job Category Id</td>
      <td><label> <br>
      </label>
        <label for="select"></label>
        <select name="jb_category_id" id="jb_category_id" class="form-control">
		<option value="">select</option>
		<?php
		include('dbconnect.php');
		$sql="select * from job_category";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
		
          <option value="<?php echo $row['jb_category_id']; ?>"> <?php echo $row['jb_category']; ?></option>
          <?php
		}
		?>
        </select>
        <label>        <br>
        </label></td>
    </tr>
    <tr>
      <td height="51">&nbsp;&nbsp;&nbsp;&nbsp;From Date</td>
      <td><label> <br>
	      <input name="jb_from_date" class="form-control" type="date" id="jb_from_date"  value="select">
	      <br>
      </label></td>
    </tr>
    <tr>
      <td height="55">&nbsp;&nbsp;&nbsp;&nbsp;Interview Date</td>
      <td><label> 
	   <input name="interview_dt" type="date" id="interview_dt"  value="select">
	   
	
      </label></td>
    </tr>
    <tr>
      <td height="54">&nbsp;&nbsp;&nbsp;&nbsp; Eligibility</td>
      <td><label>
        <textarea name="eligibility" class=" form-control validate[required]" id="eligibility"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number Post</td>
      <td><label>
        <input name="num_post" type="text" id="num_post" class="form-control validate[required,custom[onlyNumber]]"/>
      </label></td>
    </tr>
    <tr>
      <td height="43">&nbsp;&nbsp;&nbsp;Last Date For Application</td>
      <td><label> <br>
	   <input name="l_dt_appli" type="date" id="l_dt_appli"  class="form-control"  >
	   
          <br>
      </label></td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;&nbsp;Job location city         </td>
      <td><input name="jb_city" type="text" id="jb_city" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="120">&nbsp;&nbsp;&nbsp;&nbsp;Job location State </td>
      <td><input name="jb_state" type="text" id="jb_state" class="form-control validate[required]"></td>
    </tr>
	<br>
    <tr>
      <td height="95">&nbsp;&nbsp;&nbsp;&nbsp;Job location pincode </td>
      <td><input name="jb_pcode" type="text" id="jb_pcode" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="124">&nbsp;&nbsp;&nbsp;&nbsp;Company Id</td>
      <td><label> <br>
      </label>
        <label for="label"></label>
        <label for="select"></label>
        <select name="cmp_id" id="cmp_id">
		<option value="">select</option>
		<?php
		include('dbconnect.php');
		$sql1="select * from company_details";
		$res1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		?>
		
          <option value="<?php echo $row1['cmp_id']; ?>"> <?php echo $row1['cmp_name']; ?></option>
          <?php
		}
		?>
        </select>
        <label>        <br>
        </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
                <div align="center">
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Reset" value="Reset">            
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
