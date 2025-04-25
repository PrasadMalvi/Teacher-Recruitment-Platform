<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
<table width="66%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>User_id</td>
    <td>User_name</td>
    <td>Password</td>
    <td>Type</td>
  </tr>
  <tr>
    <td><?php echo $row["user_id"];?></td>
    <td><?php echo $row["user_name"];?></td>
    <td><?php echo $row["password"];?></td>
    <td><?php echo $row["type"];?></td>
  </tr>
</table>
</body>
</html>
