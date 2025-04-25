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
   $sql="update company_details set cmp_name='$cmp_name',cmp_descrip='$cmp_desc',cmp_addr='$cmp_addr',contact_person_name='$contact_person_name',cmp_phone_no='$cmp_phone_no',cmp_mobile='$cmp_mobile',cmp_e_mail_id='$cmp_e_mail_id',cmp_website='$cmp_website'";
   $res=mysqli_query($conn,$sql);
   ?>
   <script type="text/javascript">
   alert("record updated");
   document.location="viewcompdetail.php";
   </script>