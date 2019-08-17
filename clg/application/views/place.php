<?php
if(!$this->session->userdata('logged_in'))
{
	redirect(base_url() . 'index.php/Login/');
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap-table.css" rel="stylesheet">
<!--Icons-->
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include'include/top_strip.php';
        include'include/left_nav.php';
        ?>
		
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<?php include'include/menu.php';?>		
		
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Add Company </div>
					<div class="panel-body">
						<div class="col-md-6">
                                                    <form role="form" action="<?php echo base_url();?>index.php/Add/ins_placement" method="post">
							
								<div class="form-group">
									<label>Company Name</label>
                                                                        <input class="form-control" placeholder="Company Name" name="name" style="size:35px;" required="">
								</div>
                                                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
																
								
                                                    </form>
								
								
							</div>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
                        
                        <div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Company List</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" >#</th>
						        <th data-field="name" data-sortable="true">Company Name</th>
                                                        <th data-sortable="true">Action</th>
						    </tr>
						    </thead>
                                                    <tbody>
                                                       <?php 
                                                       $i=1;
                                                       foreach($company as $row){?>
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $row['name'];?></td>
                                                            <td><a title="Delete" href="<?php echo base_url();?>index.php/Add/del/<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash" style="color:red"></span></a></td>
                                                        </tr>
                                                       <?php $i++;} ?>
                                                    </tbody>
                                                        
						</table>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		
	</div><!--/.main-->

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
