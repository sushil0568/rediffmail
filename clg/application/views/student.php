<?php
error_reporting(0);

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
		
               
            
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="stroked key"></use></svg> Add Student</div>
                    <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/Student/ins_stu" method="post">
                        <fieldset>
                                                    <!-- Name input-->
                            <div class="form-group">
                                    <div class="col-md-3">
                                        <input id="name" name="enrollment_no" type="text" placeholder="Enrollment No" class="form-control" required="">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="year" type="text" placeholder="Year" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="course" type="text" placeholder="Course" class="form-control" required="">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="fees" type="number" placeholder="Fees" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <input id="name" name="poy" type="text" placeholder="Year of Program" title="Year of Program" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="counsellor" type="text" placeholder="counsellor Name" class="form-control">
                                    </div>
                            </div>
                                                    <hr/>
                            
                            <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Gender</label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="1"id="optionsRadios2" checked>Male
                                        </label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="optionsRadios2" value="2">Female
                                        </label>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <label>Marital Status</label>
                                        <label>
                                             &nbsp;&nbsp;&nbsp;<input type="radio" name="marital_status" value="1"id="optionsRadios2" checked>Male
                                        </label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp; <input type="radio" name="marital_status" id="optionsRadios2" value="2">Female
                                        </label>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp;<input type="radio" name="category" value="Gen" id="optionsRadios2" checked>Genrel
                                        </label>
                                        <label>
                                             &nbsp;&nbsp;&nbsp;<input type="radio" name="category" id="optionsRadios2" value="OBC">OBC
                                        </label>
                                        <label>
                                             &nbsp;&nbsp;&nbsp;<input type="radio" name="category" id="optionsRadios2" value="ST">ST
                                        </label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp; <input type="radio" name="category" id="optionsRadios2" value="SC">SC
                                        </label>
                                    </div>
                            </div>                       
                            
                            <div class="form-group">
                                    
                                    <div class="col-md-4">
                                        <input id="name" name="full_name" type="text" placeholder="Full Name" class="form-control" required="">
                                    </div>
                                    <div class="col-md-4">
                                    <input id="name" name="email" type="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                    <input id="name" name="contact_no" type="number" placeholder="Contact No" class="form-control">
                                    </div>
                            </div>
                                                    
                            <div class="form-group">
                                    <div class="radio">
                                    <label>
                                        &nbsp;&nbsp;<input type="radio" name="relation" value="1"id="optionsRadios1" checked>Father Name
                                    </label>
                                        <label>
                                             <input type="radio" name="relation" id="optionsRadios1" value="2">Husband Name
                                    </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="fh_name" type="text" placeholder="Father/Hasbend Name" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="mother_name" type="text" placeholder="Mother Name" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="dob" type="text" placeholder="Date of Birth [DD-MM-YYYY]" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="nationality" type="text" placeholder="Nationality" class="form-control" required="">
                                    </div>
                            </div>
                             <hr/>                       
                            <div class="form-group">
                                    
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="4" name="c_add" placeholder="Address for Correspondence" required=""></textarea>
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="c_distict" type="text" placeholder="District" class="form-control"><br/>
                                    <input id="name" name="c_state" type="text" placeholder="State" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="c_city" type="text" placeholder="City" class="form-control" required=""><br/>
                                    <input id="name" name="c_pincode" type="text" placeholder="pincode" class="form-control">
                                    </div>
                                    
                            </div>
                                                    
                          <hr/>
                                                    
                            <div class="form-group">
                                    <div class="col-md-3">
                                        <input id="name" name="one[]" type="text" placeholder="Examination Passed" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="two[]" type="text" placeholder="University/Board/Institute" class="form-control"required="">
                                    </div>
                                    <div class="col-md-1">
                                        <input id="name" name="three[]" type="text" placeholder="YOP" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="four[]" type="text" placeholder="Percentage Marks" class="form-control" required="">
                                    </div>
                                <div class="col-md-2">
                                    <input id="name" name="five[]" type="text" placeholder="Division/Grade" class="form-control" required="">
                                    </div>

                            </div>
                            
                            <div class="form-group">
                                    <div class="col-md-3">
                                    <input id="name" name="one[]" type="text" placeholder="Examination Passed" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="two[]" type="text" placeholder="University/Board/Institute" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="three[]" type="text" placeholder="YOP" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="four[]" type="text" placeholder="Percentage Marks" class="form-control">
                                    </div>
                                <div class="col-md-2">
                                    <input id="name" name="five[]" type="text" placeholder="Division/Grade" class="form-control">
                                    </div>

                            </div>
                                                    <div class="form-group">
                                    <div class="col-md-3">
                                    <input id="name" name="one[]" type="text" placeholder="Examination Passed" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="two[]" type="text" placeholder="University/Board/Institute" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="three[]" type="text" placeholder="YOP" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="four[]" type="text" placeholder="Percentage Marks" class="form-control">
                                    </div>
                                <div class="col-md-2">
                                    <input id="name" name="five[]" type="text" placeholder="Division/Grade" class="form-control">
                                    </div>

                            </div>
                            
                            <div class="form-group">
                                    <div class="col-md-3">
                                    <input id="name" name="one[]" type="text" placeholder="Examination Passed" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="two[]" type="text" placeholder="University/Board/Institute" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="three[]" type="text" placeholder="YOP" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="four[]" type="text" placeholder="Percentage Marks" class="form-control">
                                    </div>
                                <div class="col-md-2">
                                    <input id="name" name="five[]" type="text" placeholder="Division/Grade" class="form-control">
                                    </div>

                            </div>
                            
                            <div class="form-group">
                                    
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="4" name="work_exp" placeholder="Work Experiance"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        Exam Option
                                        <div class="radio">
                                        <label>
                                            &nbsp;&nbsp;<input type="radio" name="exam" value="1" checked>Open Book
                                        </label>
                                        <label>
                                                 <input type="radio" name="exam" value="2">Study Center
                                        </label>
                                        <label>
                                                 <input type="radio" name="exam" value="2">Online
                                        </label>

                                        </div>
                                        </div>
                                    
                                    
                            </div>
                                                    
                                                    
                                                    

                                                    <div class="form-group">
                                                            
                                                            <div class="col-md-3">
                                                            
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
