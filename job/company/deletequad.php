<?php
 $quali_id=$_REQUEST["quali_id"];
  include("dbconnect.php");
  $sql="delete from qualification_details where quali_id='$quali_id'";
  mysqli_query($conn,$sql);
  ?>
  <script>
  alert("Row deleted");
  document.location="viewquad.php";
  </script>
