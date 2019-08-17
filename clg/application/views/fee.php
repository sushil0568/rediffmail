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
<script>
    $siteurl = '<?php echo site_url(); ?>';
    $baseurl = '<?php echo base_url(); ?>';
</script>

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
            include'include/left_nav.php';
        ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<?php include'include/menu.php';
		//print_r($stu_enroll);
		?>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="stroked key"></use></svg> Fees Submission</div>
					<div class="panel-body">
                                            <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Add/fee_submition">
							<fieldset>
								<!-- Name input--><?php // print_r($stu_enroll); ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Enrollment No.</label>
									<div class="col-md-9">
                                                                            <select class="form-control" name="enrollment_no" required="">
                                                                                <option value="">Select Any Enrollment</option>
                                                                                <?php foreach($stu_enroll as $row){?>
                                                                                <option value="<?php echo $row['enrollment_no'];?>#<?php echo $row['id'];?>"><?php echo $row['enrollment_no'];?></option>
                                                                                
                                                                                    <?php }?>
									</select>
									</div>
                                                                        <br/>
                                                                        
							
								</div>
                                                                
                                                                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Amount</label>
									<div class="col-md-9">
                                                                            <input id="name" name="amount" type="number" placeholder="Fees Amount" class="form-control" required="">
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
	
<!--        <script>
                $baseurl = '<?php echo base_url(); ?>';
            $(document).ready(function(){
                
                $enrollment_no =  $('#enroll').val();
                $.ajax({
                    type: 'post',
                    url:  $base_url+'index.php/Add/get_enrollment_list',
                    data: { enrollment_list : $('#enroll').val()},
                    });
            

            });
            
            
        </script>-->
           
</body>

</html>