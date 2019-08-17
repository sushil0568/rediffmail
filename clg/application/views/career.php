<?php
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
            include'include/top_strip.php';
            include'include/left_nav.php';
        ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<?php include'include/menu.php';?>
		
                <?php // print_r($res);?>
            
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="stroked key"></use></svg> Job Post</div>
                    <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/Add/ins_job" method="post">
                        <fieldset>
                                                    <!-- Name input-->
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label>Job Title </label>
                                    </div>
                                <div class="col-md-8">
                                    <input id="name" name="heading" type="text" placeholder="Job Title" class="form-control" required="">
                                </div>
                                    
                                    
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label>Location </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="name" name="location" type="text" placeholder="Job Location" class="form-control" required="">
                                </div>
                            </div>            
                                 
                             <div class="form-group">
                                <div class="col-md-2">
                                    <label>Qualification  </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="name" name="qualification" type="text" placeholder="Qualification No" class="form-control" required="">
                                </div>
                            </div>
                                                    
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label>Description  </label>
                                </div>
                                <div class="col-md-8">
                                   <textarea class="form-control" rows="4" name="description" placeholder="Job Description" required=""></textarea>
                                </div>
                            </div>
                                                    
                                                    <hr/>
                            
                            
                            
                            
                            
                                                    
                                                    
                                                    

                                                   
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
