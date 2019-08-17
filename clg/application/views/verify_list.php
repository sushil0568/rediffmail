<?php
error_reporting(0);
if(!$this->session->userdata('logged_in'))
{
	redirect(base_url() . 'index.php/Login/');
}
$ci = & get_instance();
$ci->load->model('Add_model');

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
                    <div class="panel-heading">Student Verification List </div>
                        <div class="panel-body">
                            <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" >#</th>
                                                        <th>Enrollment No</th>
						        <th data-sortable="true">Name</th>
                                                        <th data-sortable="true">course</th>
                                                        <th data-sortable="true">dob</th>
                                                        <th data-sortable="true">Contact</th>
                                                        <th>Date</th>
						    </tr>
						    </thead>
                                                    <tbody>
                                                       <?php 
                                                       $i=1;
                                                       foreach($verify_list as $row_stu){
                                                           $tbl_name = 'tbl_user';
                                                           $student_data = $ci->Add_model->specific_data($tbl_name,$row_stu['user_id']);
                                                           
                                                           ?>
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $row_stu['enrollment_no'];?></td>
                                                            <td><?php echo $student_data->full_name;?></td>
                                                            <td><?php echo $student_data->course_name;?></td>
                                                            <td><?php echo $row_stu['dob'];?></td>
                                                            <td><?php echo $student_data->contact;?></td> 
                                                            <td><?php echo $row_stu['date'];?></td>
                                                                
                                                        </tr>
                                                       <?php $i++;} ?>
                                                    </tbody>
                                                        
						</table>
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
        <script src="<?php echo base_url();?>js/bootstrap-table.js"></script>
	<script>
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