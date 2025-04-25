<html>
<head>

<title>Job For Me</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML = 
current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            setTimeout(tick, 1000);
        } else {
             
            if(mins > 1){                 
                   
               setTimeout(function () { countdown(mins - 1); }, 1000);
                     
            }
			else
			  document.exam.submit();
        }
    }
    tick();
}
$(document).ready(function() {
window.history.forward(1);
			countdown(2);
});

 
</script>
</head>

<body>
<div style="width: 350px; float:left;"><strong>Answer all 10 questions in 10 minutes</strong></div> <div style="width: 630px; float:right;"><dv style="float:left; width:80px;">Time Left:</div></div><div id="timer" style="width: 40px; position:absolute; top:10px; left:935px;">Time</div>
<br/>
<br/>
<form name="exam" id="exam" method="post" action="get_result.php">
<?php
 include("dbconnect.php");
 $sql="select * from questions order by rand() limit 10";
 $res=mysqli_query($conn,$sql);
 $qno=0;
 while($row=mysqli_fetch_array($res))
 {
   $qno++;
?>   
   <input name="qno<?php echo $qno; ?>" type="hidden" value="<?php echo $row["question_id"]; ?>" />
<input name="answer<?php echo $qno; ?>" type="hidden" value="<?php echo $row["answer"]; ?>" />
<p><?php echo $qno; ?>. <?php echo $row["question"]; ?></p>
<p><input name="option<?php echo $qno; ?>" type="radio" value="option1" />a. <?php echo $row["option1"]; ?> </p>
<p><input name="option<?php echo $qno; ?>" type="radio" value="option2" />b. <?php echo $row["option2"]; ?></p>
<p><input name="option<?php echo $qno; ?>" type="radio" value="option3" />c. <?php echo $row["option3"]; ?></p>
<p><input name="option<?php echo $qno; ?>" type="radio" value="option4" />d. <?php echo $row["option4"]; ?></p>
<?php
}
?>
<input name="" type="submit" value="Submit" />
</form>
</body>
</html>
