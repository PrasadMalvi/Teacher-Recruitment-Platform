<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
   include("dbconnect.php");
   $jb_category_id=$_POST["jb_category_id"];
   $jb_cat_name=$_POST["jb_cat_name"];
   $descrip=$_POST["descrip"];
   $sql="update job_category set jb_category='$jb_cat_name',description='$descrip' where jb_category_id='$jb_category_id'";
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("record updated");
   document.location="viewjbcat.php";
   </script>


</body>
</html>
