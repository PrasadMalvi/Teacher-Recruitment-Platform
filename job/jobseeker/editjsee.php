<?php
 include("dbconnect.php");
 $sql="select * from job_seeker";
 $res=mysqli_query($conn,$sql);
 ?>
 <table width="99%" height="113" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="13%">js_id</td>
    <td width="15%">js_name</td>
    <td width="9%">M_name</td>
    <td width="7%">Lname</td>
    <td width="7%">DOB</td>
    <td width="7%">Address</td>
    <td width="7%">City</td>
    <td width="7%">State</td>
    <td width="7%">Pincode</td>
    <td width="7%">Phone_no</td>
    <td width="7%">Mobile</td>
    <td width="7%">E-mail_id</td>
    <td width="7%">Edit</td>
    <td width="7%">Delete</td>
  </tr>
  <?php
    while($row=mysqli_fetch_array($res))
	{
?>	
  <tr>
    <td><?php echo $row["js_id"];?></td>
    <td><?php echo $row["js_fname"];?></td>
    <td><?php echo $row["js_mname"];?></td>
    <td><?php echo $row["js_lname"];?></td>
    <td><?php echo $row["js_dob"];?></td>
    <td><?php echo $row["js_address"];?></td>
    <td><?php echo $row["js_city"];?></td>
    <td><?php echo $row["js_state"];?></td>
    <td><?php echo $row["js_pincode"];?></td>
    <td><?php echo $row["js_phone_no"];?></td>
    <td><?php echo $row["js_mobile"];?></td>
    <td><?php echo $row["js_e-mail_id"];?></td>
    <td><a href="editjsee.php?js_id=<?php echo $row["js_id"];?>">edit</a></td>
    <td><a href="deletejsee.php?js_id=<?php echo $row["js_id"];?>">delete</a></td>
  </tr>
</table>
<?php
}
?>