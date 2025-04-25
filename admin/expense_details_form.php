<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

<link href="file:///H|/digital_diary/admin/images/grid_style.css"" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="file:///H|/digital_diary/admin/images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="file:///H|/digital_diary/admin/images/dhtmlgoodies_calendar.js?random=20060118"></script>

            <!-- Page Content -->
            <div id="page-content">
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Expenses</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
                        <form action="file:///H|/digital_diary/admin/expense_details.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
							<h4 class="sub-header">Inputs</h4>
                          <div class="control-group">
                                <label class="control-label" for="general-text">Expenditure</label>                                
                               <div class="controls">
                            			<select name="expense_id" id="expense_id">
										      			<?php
														include('dbconnect.php');
														 $sql="select * from expense";
														 $res=mysqli_query($conn,$sql);
														 while($row=mysqli_fetch_array($res))
						  								{
														 ?>
														 <option value="<?php echo $row['expense_id'];   ?>"</option><?php echo $row['title'];   ?></option>
														<?php
														}
														?>
										
                   			       </select>
										
                          	  </div>
                          </div>
						  
						  <div class="control-group">
                                <label class="control-label" for="general-text">Expense Date</label>                                
                            <div class="controls">
                            			<input name="expense_date" type="text" onFocus="displayCalendar(this,'yyyy-mm-dd',this)" id="expense_date" value="<?php echo date('Y-m-d'); ?>">
										
                          	  </div>
                          </div>
                         
							<div class="control-group">
                                <label class="control-label" for="general-text">Description</label>
                                <div class="controls">
                                  <textarea name="description" class="validate[required]" id="general-text"></textarea>
                                </div>
                            </div>
                          
                            <div class="control-group">
                                <label class="control-label" for="general-text">Amount</label>                                
                            <div class="controls">
                            			<input name="amount" type="text" id="amount">
										
                          	  </div>
                          </div>
						  
                            <div class="form-actions">
                                <button type="reset" class="btn btn-danger"><i class="icon-repeat"></i> Reset</button>
                                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Submit</button>
                            </div>
                            <!-- END Form Buttons -->
                        </form>
                    </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			<link rel="stylesheet" href="file:///H|/digital_diary/admin/js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="file:///H|/digital_diary/admin/js/jquery.min.js" type="text/javascript"></script>
		<script src="file:///H|/digital_diary/admin/js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="file:///H|/digital_diary/admin/js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<?php include('footer.php');   ?>




