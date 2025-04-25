<?php session_start(); ?>
<?php
  if(!isset($_SESSION["uname"]) || $_SESSION["uname"]=="")
  {
?>
<script type="text/javascript">
alert("Session Expired");
document.location="../index.php";
</script>
<?php  
  }
?>