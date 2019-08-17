<?php error_reporting(0);
if(!$this->session->userdata('logged_in'))
{
	redirect(base_url() . 'index.php/Login/');
}
?>
<?php
$c = $this->session->userdata('logged_in');
$type = $c['type'];
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php 
        $c = $this->session->userdata('logged_in');
            $res= '';
            
            include'include/top_strip.php';
            if($c['type']==1){include'include/left_nav.php';}else{ include'include/student_nav.php';}
        ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
                <?php if($c['type']==1){include'include/menu.php';}else{ echo"<br/>"; }?>
		<?php if($answer == '0'){?>							
		<div class="alert bg-warning" role="alert" style="color:white;">
					<center>Your Old Password is incorrect</center>
				</div>
                <?php }else if($answer == '1'){?>
            <div class="alert bg-success" role="alert"style="color:white;">
                <center>Password Update Successfully</center>	</div>
                <?php }else if($answer == '2'){?>
                <div class="alert bg-warning" role="alert" style="color:white;">
					<center> New Password and Confirm Password Not Match !</center>
				</div>
                <?php } ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="stroked key"></use></svg> Update Password</div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url();?>index.php/Dashboard/change_password" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Old Password</label>
									<div class="col-md-9">
                                                                            <input id="name" name="old" type="text" placeholder="Old Password" class="form-control" required="">
									</div>
								</div>
							
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">New Password</label>
									<div class="col-md-9">
                                                                            <input id="name" name="new" type="text" placeholder="New Password" class="form-control" required="">
									</div>
								</div>
                                                                
                                                                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Confirm Password</label>
									<div class="col-md-9">
                                                                            <input id="name" name="confirm" type="text" placeholder="Confirm Password" class="form-control" required="">
									</div>
								</div>
							
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				
				
				
			</div><!--/.col-->
			
			
		</div><!--/.row-->
	</div>	<!--/.main-->
		  

	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
