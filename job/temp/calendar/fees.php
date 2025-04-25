

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Student Information System</title>

<link rel="stylesheet" type="text/css" href="images/SpryAccordion.css" media="screen">

	<style type="text/css">
	a.frontpage:link, a.frontpage:active, a.frontpage:visited {text-decoration:none;color:#ff8e00;font-weight:bold;}
	a.frontpage:hover {text-decoration:underline;color:#ff8e00;font-weight:bold;}
.style2 {color: #000000}
    #apDiv1 {
	position:absolute;
	left:754px;
	top:133px;
	width:244px;
	height:190px;
	z-index:1;
}
</style>
<script type="text/javascript" src="images/SpryAccordion.js"></script>

<style>
/* classes for validator */
	.tfvHighlight
		{font-weight: bold; color: red;}
	.tfvNormal
		{font-weight: bold;	color: black;}
</style>
<script language="JavaScript" src="images/validator.js"></script>



<?php include('header.php'); ?>
  
      <?php include('navigation.php'); ?>
	  <?php include('cal.php'); ?>
	  
            <td align="left" valign="top" width="80%"><table border="0" cellpadding="1" cellspacing="0" width="100%">
              <tbody><tr>
                <td bgcolor="#429504"><table bgcolor="#F1F1F9" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                      <td align="left" bgcolor="#F1F1F9" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody><tr>
                            <td class="headline_text"><table align="center" border="0" cellpadding="0" cellspacing="0" width="99%">
                                <tbody><tr>
                                  <td width="4%"><div align="center"><img src="images/studentinfo_icon.gif" height="18" width="21"></div></td>
                                  <td class="red_bold" width="28%">New Book </td>
                                  <td width="54%">&nbsp;</td>
                                  <td width="8%">&nbsp;</td>
                                  <td width="2%">&nbsp;</td>
                                  <td width="4%"></td>
                                </tr>
                            </tbody></table></td>
                          </tr>
                          <tr>
                            <td height="15">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="99%">
                                <tbody><tr>
                                  <td>
<!--Do Not change Above Code-->						  
<?php include('val.php'); ?>
	<form name="registration" enctype="multipart/form-data" action="fees_insert.php" method="post" id="formID">
	<table width="90%" align="center">
	<tr>
	  <td>
	  
	  <table border="0" width="100%">
		<tbody>
	   
	<tr>
	<td class="hr">Stud_id</td>
	<td class="dr"><select name="stud_id" id="stud_id">
	<?php
	include("connectdb.php");
	$sql="select * from student_master";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	<option value="<?php echo $row['stud_id']; ?>"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></option>
	<?php
}
	?>
	  </select></td>
	</tr>
	<tr>
	<td class="hr">Date</td>
	<td class="dr"><div align="left" class="style3">
          <?php					
      $date_default = "";
     
      if(isset($row['issue_date']))
      {
        $date_default =$row['issue_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("issue_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>
        &nbsp;</div></td>
	</tr>
	<tr>
	<td class="hr">Amount</td>
	<td class="dr"><input name="amount" type="text" id="amount" class="validate[required],custom[onlyNumber]"></td>
	</tr>
	<tr>
	<td class="hr">Mode_of_payment</td>
	<td class="dr"><input name="mop" type="text" id="mop" class="validate[required],custom[onlyLetter]"></td>
	</tr>
	<tr>
	<td class="hr">Mode_no</td>
	<td class="dr"><input name="m_no" type="text" id="m_no" class="validate[required],custom[onlyNumber]"></td>
	</tr>
		  <tr>
			<td align="center"><input name="submit" type="submit" value="Submit"  />
	  </td>
		   <td>   <input name="reset" type="reset" value="Reset" /></td>
		  </tr>
		</tbody>
	  </table>
	  </form>

								  
<!--Do Not change Below Code-->				  
								  </td>
                                </tr>
                            </tbody></table></td>
                          </tr>
                          <tr>
                            <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="94%">
                            </table></td>
                          </tr>
                          <tr>
                            <td align="right" height="23">&nbsp;</td>
                          </tr>
                      </tbody></table></td>
                    </tr>
                </tbody></table></td>
              </tr>
            </tbody></table></td>
            <td width="4">&nbsp;</td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td height="4"></td>
      </tr>
    </tbody></table></td>
  </tr>
  <?php include('footer.php'); ?>
</tbody></table>
</body></html>