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
<title><?php echo $title ;?></title>

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
			
			<div class="col-md-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Company
					</div>
					<div class="panel-body">
                                            <ul>
                                                <?php foreach($company_list as $comp){?>
                                                <li><?php echo $comp->name;?></li>
                                                <?php }?> 
                                            </ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Student List
					</div>
					<div class="panel-body">
                                            <table data-toggle="table" data-url="tables/data2.json">
                                               <thead>
						    <tr>
						        <th data-field="id">#</th>
						        <th data-field="name">Name</th>
						        <th data-field="price">Date</th>
						    </tr>
						    </thead>
                                                    <tbody>
                                                        <?php $i=1;foreach($student_list as $row){?>
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $row->full_name; ?></td>
                                                            <td><?php echo $row->date_time; ?></td>
                                                        </tr>
                                                        <?php $i++; }?>
                                                    </tbody>
                                            </table>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Personal Information
                                               
					</div>
					<div class="panel-body">
                                            <!--<p><strong> <center style="color: #428bca">Welcome to IGIT Admin Panle </center></strong></p>-->                                                                                        
                                           <p> Name : <?php echo $personal['full_name'];?></p>                                                                                        
                                           <p> Email : <?php echo $personal['email'];?></p>  
                                           <p> Contact : <?php echo $personal['contact_no'];?></p>
                                           
                                           <p> Last Login : <?php echo $personal['date_time'];?>
                                            <p> Ip Address : <?php echo $personal['ip_address'];?>
					</div>
				</div>
			</div>
			
		</div><!-- /.row -->
    </div>
    <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap-table.js"></script>
	
</body>

</html>
