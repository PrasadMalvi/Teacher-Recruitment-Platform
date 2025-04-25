<?php
   include("dbconnect.php");
      $question_id=$_POST["question_id"];
   $question=$_POST["question"];
   $option1=$_POST["option1"];
   $option2=$_POST["option2"];
   $option3=$_POST["option3"];
   $option4=$_POST["option4"];
   $answer=$_POST["answer"];
   

   $sql="update questions set question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',answer='$answer' where question_id='$question_id'";
   $res=mysqli_query($conn,$sql);
   
   ?>
   <script type="text/javascript">
   alert("record updated");
   document.location="viewquestions.php";
   </script>