<?php include('meta_tages.php');?>
<body>
<div id="panelwrap">
  	<?php include_once("dbconnect.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->
	<?php
		$jsid=$_REQUEST["jsid"];
		$sql_js="select * from job_seeker where js_id='$jsid'";
		$res_js=mysqli_query($conn,$sql_js);
		$row_js=mysqli_fetch_array($res_js);
		?>
    </div>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>New Employee Details</h2> 
<?php
 $quali_id=$_REQUEST["quali_id"];
  include("dbconnect.php");
  $sql="select * from qualification_details where quali_id='$quali_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  ?>
<form id="formID" name="form1" method="post" action="updatequad.php">
  <table width="43%" height="216" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="49%">&nbsp;&nbsp;&nbsp;Job Seekers Id</td>
      <td width="51%"><label> <br />
     <select name="js_id" id="js_id">
		  <?php
		include('dbconnect.php');
		$sql2="select * from job_seeker";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		?>
         <option value="<?php echo $row2['js_id']; ?>" <?php if($row2['js_id']==$row['js_id']){ echo "selected";} ?>> <?php echo $row2['js_fname']." ".$row2['js_mname']." ".$row2['js_lname']; ?></option>
          <?php
		}
		?>
          </select>   
        <input name="quali_id" type="hidden" id="quali_id" value="<?php echo  $quali_id;?>">
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Qualification Name</td>
      <td><label> <br />
      <input name="q_name" type="text" id="q_name" value="<?php echo $row["q_name"];?>" class="validate[required]">
      <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;University Name</td>
      <td><label><br />
          <textarea name="unversity_name" required="l" id="unversity_name"><?php echo $row["university_name"];?></textarea>
        <br />
      </label></td>
    </tr>
    <tr>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;College Name</td>
      <td><label><br />
          <textarea name="coll_name" required="l" id="coll_name"><?php echo $row["coll_name"];?></textarea>
      <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;year Of Passing</td>
      <td><label> <br />
      <input name="year_of_passing" type="text" id="year_of_passing" value="<?php echo $row["year_of_passing"];?>" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Total Marks</td>
      <td><label> <br />
      <input name="tot_marks" type="text" id="tot_marks" value="<?php echo $row["tot_marks"];?>" class="validate[required,custom[onlyNumber]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Obtain Marks</td>
      <td><label> <br />
      <input name="obtain_marks" type="text" id="obtain_marks" value="<?php echo $row["obtain_marks"];?>" class="validate[required,custom[onlyNumber]]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;Percentage</td>
      <td><label> <br />
      <input name="perc" type="text" id="perc" value="<?php echo $row["perc"];?>" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td height="23">&nbsp;&nbsp;&nbsp;&nbsp;Grage</td>
      <td><label> <br />
      <input name="grd" type="text" id="grd" value="<?php echo $row["grade"];?>" class="validate[required]"/>
        <br />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Update" />
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