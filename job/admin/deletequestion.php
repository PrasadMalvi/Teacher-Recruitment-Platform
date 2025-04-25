<?php
   include("dbconnect.php");
      $question_id=$_POST["question_id"];
	  
   $sql="delete from questions where question_id='$question_id'";
   $res=mysqli_query($conn,$sql);
   
   ?>
   <script type="text/javascript">
   alert("record deleted");
   document.location="viewquestions.php";
   </script>