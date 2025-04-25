<?php
 $emp_id=$_REQUEST["emp_id"];
  include("dbconnect.php");
  $sql="delete from employee_details where emp_id='$emp_id'";
  mysqli_query($conn,$sql);
  ?>
  <script>
  alert("Row deleted");
  document.location="viewempdetail.php";
  </script>