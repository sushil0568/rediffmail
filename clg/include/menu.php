<?php
//error_reporting(0);
$ci = &get_instance();
$ci->load->model('Dashboard_model');
?>
<div class="row">
			<ol class="breadcrumb">
                            <li><a href="http://igit.co.in"  target="blank" title="IGIT Domain"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">IGIT</li>
			</ol>
		</div><!--/.row-->
		
<!--		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>/.row
		-->
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $res = $ci->Dashboard_model->doc_count();?></div>
							<div class="text-muted">Documents</div>
						</div>
					</div>
				</div> 
			</div>
                    
                    
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $res = $ci->Dashboard_model->place_count();?></div>
							<div class="text-muted">Placement</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $res = $ci->Dashboard_model->user_count();?></div>
							<div class="text-muted">Student Enrolled</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $res = $ci->Dashboard_model->job_count();?></div>
							<div class="text-muted">Job Post</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		