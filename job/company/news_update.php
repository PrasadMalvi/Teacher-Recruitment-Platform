<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panelo - Free Admin Template</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
});
</script>
</head>
<body>
<div id="panelwrap">
  	<?php include_once("connection.php");?>
	<div class="header">
		<!--Header Start -->
		<?php include_once('admin_header.php');?>	
		
  
	<!--Header End Here -->
    </div>
	
		<?php 
	
			$get_id=$_GET['id'];
			$query=mysqli_query($conn,"Select * from news where news_id='$get_id'");
				$result=mysqli_fetch_array($query);
				$title=$result['news_title'];
				$news_event_date=$result['news_event_date'];
				$news_date=date('D-M-Y');
				 $news_Description=$result['news_Description'];
			
			
			
			
			
					
	
	?>
                        
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>Update News  </h2>
	
	<form action="update_post.php?id=<?php echo $get_id; ?>" method="post" >
	<table width="529" border="0" align="center">
  <tr class=odd>
    <td width="126">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="140">&nbsp;</td>
  </tr>
  <tr class=odd>
  
    <td><label>News Title</label></td>
    <td><input type="text"  name="title" class="input" value="<?php echo $title ?>"/></td>
    <td>&nbsp;</td>
	</tr>
  <tr class=odd>
  
    <td><label>Event Date</label></td>
    <td><input type="text"  name="news_event_date" class="input" value="<?php echo $news_event_date ?>"/></td>
    <td>Day-month-year</td>
	</tr>
  
  
  <tr class=odd>
    <td><label>News Description</label></td>
    <td><textarea name="description" cols="23" rows="5"><?php echo 	 $news_Description ?></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr class=odd>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class=odd>
    <td>&nbsp;</td>
    <td><input type="submit" class="button"  name="submit" value="Update"/>
      <input  type="reset"/></td>
    <td>&nbsp;</td>
  </tr>
</table>
 </form>
		

	

    </div>
    </div><!-- end of right content-->
                     
                    
    <div class="sidebar" id="sidebar">
	<!--Side Bar Start -->
   <?php 
   include_once('admin_side_bar.php');
   
   ?>
         
  <!--Side Bar End -->
    </div>
    <div class="clear"></div>
    </div> <!--end of center_content-->
        <?php include_once('admin_footer.php');?>

</div>

    	
</body>
</html>


