

<?php
include("dbconnect.php");
$job_name=$_post["job_name"];
$job_location=$_post["job_locationj"];
$job_location_address=$_post["job_location_address"];
$job_location_city=$_post["job_location_city"];
$job_location_pincode=$_post["job_location_pincode"];
$job_location_description=$_post["job_location_description"];
$job_location_date=$_post["job_location_date"];
$no_of jobs=$_post["no_of_job"];
$sql=insert into job_location values(null '$job_name','$job_locationj','$job_location_address','$job_location_city','$job_location_pincode','$job_location_description','$job_location_date','$no_of_jobs'); 
?>
   <script type="text/javascript">
   alert("record inserted");
    history.back();
   </script>

