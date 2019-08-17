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
		<?php // print_r($st);?>
               
            
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="stroked key"></use></svg> Edit Student</div>
                    <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/Student/update/<?php echo $st['student_details']->id; ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                                                    <!-- Name input-->
                                                    
                                                    <div class="form-group">
                                                    <div class="col-md-4">
                                    	<input type="file" name="file_name" value="<?php echo $st['student_details']->img;?>"><?php echo $st['student_details']->img;?>
                                    </div>
                                                    
                                    <div class="col-md-4">
                                        <input id="name" name="passing_year" placeholder="Passing Year" type="text" value="<?php echo $st['student_details']->passing_year;?>" title="Passing Year" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input id="name" name="payment_status" type="text" placeholder="Payment Status" value="<?php echo $st['student_details']->payment_status;?>" title="Payment Status" class="form-control">
                                    </div>
                                    
                            </div>
                                                    <hr/>
                                                    
                                                    
                            <div class="form-group">
                                    <div class="col-md-3">
                                        <input id="name" name="enrollment_no" type="text" value="<?php echo $st['student_details']->enrollment_no;?>" title="Enrollment No" class="form-control" required>
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="year" type="text" value="<?php echo $st['student_details']->year;?>" title="Year" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="course" type="text" value="<?php echo $st['student_details']->course_name;?>" title="Course" class="form-control" required>
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="fees" type="number" value="<?php echo $st['student_details']->fees;?>" title="Fees" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <input id="name" name="poy" type="text" value="<?php echo $st['student_details']->year_of_programe;?>" title="Year of Program" title="Year of Program" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="counsellor" type="text" value="<?php echo $st['student_details']->councler_name;?>" title="counsellor Name" class="form-control">
                                    </div>
                            </div>
                                                    <hr/>
                            
                            <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Gender</label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="1"id="optionsRadios2" <?php if($st['student_details']->gender =='1'){echo"checked";}?>>Male
                                        </label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp; <input type="radio" name="gender" id="optionsRadios2" value="2" <?php if($st['student_details']->gender =='2'){echo"checked";}?>>Female
                                        </label>
                                    </div>
                                    
<!--                                    <div class="col-md-3">
                                        <label>Marital Status</label>
                                        <label>
                                             &nbsp;&nbsp;&nbsp;<input type="radio" name="marital_status" value="1"id="optionsRadios2" <?php if($st['student_details']->marital_status =='1'){echo"checked";}?>>Married
                                        </label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp; <input type="radio" name="marital_status" id="optionsRadios2" value="2" <?php if($st['student_details']->marital_status =='2'){echo"checked";}?>>Single
                                        </label>
                                    </div>-->
                                
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp;<input type="radio" name="category" value="Gen" id="optionsRadios2" <?php if($st['student_details']->category =='Gen'){echo"checked";}?>>General
                                        </label>
                                        <label>
                                             &nbsp;&nbsp;&nbsp;<input type="radio" name="category" id="optionsRadios2" value="OBC" <?php if($st['student_details']->category =='OBC'){echo"checked";}?>>OBC
                                        </label>
                                        <label>
                                             &nbsp;&nbsp;&nbsp;<input type="radio" name="category" id="optionsRadios2" value="ST" <?php if($st['student_details']->category =='ST'){echo"checked";}?>>ST
                                        </label>
                                        <label>
                                            &nbsp;&nbsp;&nbsp; <input type="radio" name="category" id="optionsRadios2" value="SC" <?php if($st['student_details']->category =='SC'){echo"checked";}?>>SC
                                        </label>
                                    </div>
                            </div>                       
                            
                            <div class="form-group">
                                    
                                    <div class="col-md-4">
                                        <input id="name" name="full_name" type="text" value="<?php echo $st['student_details']->full_name;?>" title="Full Name" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                    <input id="name" name="email" type="email" value="<?php echo $st['student_details']->email;?>" title="Email" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                    <input id="name" name="contact_no" type="number" value="<?php echo $st['student_details']->contact;?>" title="Contact No" class="form-control">
                                    </div>
                            </div>
                                                    
                            <div class="form-group">
                                    <div class="radio">
                                    <label>
                                        &nbsp;&nbsp;<input type="radio" name="relation" value="1"id="optionsRadios1" <?php if($st['student_details']->relation =='1'){echo"checked";}?>>Father Name
                                    </label>
                                        <label>
                                             <input type="radio" name="relation" id="optionsRadios1" value="2" <?php if($st['student_details']->relation =='2'){echo"checked";}?>>Husband Name
                                    </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="fh_name" type="text" value="<?php echo $st['student_details']->fh_name;?>" title="Father/Hasbend Name" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="mother_name" type="text" value="<?php echo $st['student_details']->mother_name;?>" title="Mother Name" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="dob" type="text" value="<?php echo $st['student_details']->dob;?>" title="Date of Birth [DD-MM-YYYY]" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="nationality" value="<?php echo $st['student_details']->nationality;?>" type="text" title="Nationality" class="form-control" required>
                                    </div>
                            </div>
                            
                                                    <div class="form-group">
                                    
                                    <div class="col-md-6">
                                        Exam Option
                                        <div class="radio">
                                        <label>
                                            &nbsp;&nbsp;<input type="radio" name="exam" value="1" <?php if($st['student_details']->exam =='1'){echo"checked";}?>>Open Book
                                        </label>
                                        <label>
                                                 <input type="radio" name="exam" value="2"<?php if($st['student_details']->exam =='2'){echo"checked";}?>>Study Center
                                        </label>
                                        <label>
                                                 <input type="radio" name="exam" value="3"<?php if($st['student_details']->exam =='3'){echo"checked";}?>>Online
                                        </label>

                                        </div>
                                        </div>
                                    
                                    
                            </div>
                                                  
<!--                            <div class="form-group">
                                    
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="4" name="c_add" placeholder="Address for Correspondence" required=""></textarea>
                                    </div>
                                    <div class="col-md-3">
                                    <input id="name" name="c_distict" type="text" title="District" class="form-control"><br/>
                                    <input id="name" name="c_state" type="text" title="State" class="form-control" required="">
                                    </div>
                                    <div class="col-md-3">
                                        <input id="name" name="c_city" type="text" title="City" class="form-control" required=""><br/>
                                    <input id="name" name="c_pincode" type="text" title="pincode" class="form-control">
                                    </div>
                                    
                            </div>-->
                                                    
                          <hr/>
                                                    
                            
                            <?php 
//                            print_r($st['student_edu']);
                            foreach($st['student_edu'] as $row){
                               
                                ?>
                            <div class="form-group">
                                
                                    <div class="col-md-3">
                                    <input id="name" name="one[]" type="text" value="<?php echo $row['examination_name'];?>" title="Examination Passed" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                    <input id="name" name="two[]" type="text" value="<?php echo $row['university'];?>" title="University/Board/Institute" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="three[]" type="text" value="<?php echo $row['yop'];?>" title="YOP" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                    <input id="name" name="four[]" type="text" value="<?php echo $row['percentage'];?>" title="Percentage Marks" class="form-control">
                                    </div>
                                <div class="col-md-2">
                                    <input id="name" name="five[]" type="text" value="<?php echo $row['division'];?>" title="Division/Grade" class="form-control">
                                    </div>
                               

                            </div>
                                <?php   }?>                   
                            
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