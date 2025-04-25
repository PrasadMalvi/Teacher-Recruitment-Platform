<?php
   include("dbconnect.php");
   $question=$_POST["question"];
   $option1=$_POST["option1"];
   $option2=$_POST["option2"];
   $option3=$_POST["option3"];
   $option4=$_POST["option4"];
   $answer=$_POST["answer"];
   

   $sql="insert into questions values(null,'$question','$option1','$option2','$option3','$option4','$answer')";
   $res=mysqli_query($conn,$sql);
   
   ?>
   <script type="text/javascript">
   alert("record inserted");
   document.location="viewquestions.php";
   </script>