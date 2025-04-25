<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
   include("dbconnect.php");
   $user_name=$_POST["user_name"];
   $password=$_POST["password"];
   $type=$_POST["type"];
   $sql="insert into admin values(null,'$user_name','$password','$type')";
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("record inserted");
   document.location="viewadmin.php";
   </script>
</head>

<body>
</body>
</html>
