<?php
   include("dbconnect.php");
   $cmp_name=$_POST["cmp_name"];
   $cmp_desc=$_POST["cmp_desc"];
   $cmp_addr=$_POST["cmp_addr"];
   $contact_person_name=$_POST["contact_person_name"];
   $cmp_phone_no=$_POST["cmp_phone_no"];
   $cmp_mobile=$_POST["cmp_mobile"];
   $cmp_e_mail_id=$_POST["cmp_e_mail_id"];
   $cmp_website=$_POST["cmp_website"];
   
   $cmp_logo=$_FILES['cmp_logo']['name'];
 $tmp_location=$_FILES['cmp_logo']['tmp_name'];
 $target="../img/".$cmp_logo;
 move_uploaded_file($tmp_location,$target);
   

   $sql="insert into company_details values(null,'$cmp_name','$cmp_desc','$cmp_addr','$contact_person_name','$cmp_phone_no','$cmp_mobile','$cmp_e_mail_id','$cmp_website','$cmp_logo')";
   $res=mysqli_query($conn,$sql);
   //echo $sql;
   
   $sql1="insert into admin values(null,'$cmp_name','$cmp_name','company')";
   mysqli_query($conn,$sql1);
   //echo $sql1;
   ?>
   <script type="text/javascript">
   alert("record inserted");
   document.location="viewcompdetail.php";
   </script>