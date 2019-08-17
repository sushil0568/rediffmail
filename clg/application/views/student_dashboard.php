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
            include'include/student_nav.php';
        ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <?php //include'include/menu.php';?><br/>
        <div class="row">
			
			
			
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						My Details
					</div>
					<div class="panel-body">
                                             <table data-toggle="table" data-url="tables/data2.json">
                                                 <thead>
                                                     <tr><th> Enrollment No. : </th><th> <?php echo $personal['my'][0]['enrollment_no'];?></th></tr>
                                                 </thead>
                                                <tbody>
                                                  
                                                   <tr><td>Councler Name. :</td><td><?php echo $personal['my'][0]['councler_name'];?></td></tr>
                                                   <tr><td>Course Name :</td><td><?php echo $personal['my'][0]['course_name'];?></td></tr>
                                                   <tr><td>Year of Program :</td><td><?php echo $personal['my'][0]['year_of_programe'];?></td></tr>
                                                    <tr><td>Fees :</td><td><?php echo $personal['my'][0]['fees'];?>/-</td></tr>
                                                    <tr><td> State : </td><td><?php echo $personal['my'][0]['c_state']; ?> </td></tr>
                                                    <tr><td> City : </td><td><?php echo $personal['my'][0]['c_city']; ?> </td></tr>
                                                    <tr><td> Distict : </td><td><?php echo $personal['my'][0]['c_distict']; ?> </td></tr>
                                                    <tr><td> pincode : </td><td><?php echo $personal['my'][0]['c_pincode']; ?> </td></tr>
                                                    <tr><td> Address : </td><td><?php echo $personal['my'][0]['c_address']; ?> </td></tr>
                                                    <tr><td> Experiance : </td><td><?php echo $personal['my'][0]['work_exp']; ?> </td></tr>
                                                   
						    
						</tbody>
                                                    
                                            </table>
                                            <br/><h5><strong style="color:blue;">Educational Details</strong></h5>
                                            <table  id="table-style" class="table table-hover">
                        <tr>
                           <!--<th>#</th>-->
                           <th>Examination</th>
                           <th>University/Board</th>
                           <th>YOP</th>
                           <th>Percentage</th>
                           <th>Division</th>
                        </tr>
                           <?php
                           //$i=1;
                           foreach($personal['edu'] as $row){
                           ?>
                       <tr>
                           <!--<td><?php echo $i;?></td>-->
                           <td><?php echo $row['examination_name'];?></td>
                           <td><?php echo $row['university'];?></td>
                           <td><?php echo $row['yop'];?></td>
                           <td><?php echo $row['percentage'];?></td>
                           <td><?php echo $row['division'];?></td>                           
                       </tr>
                           <?php //$i++;
                           } ?>
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
                                            <!--<p><strong> <center style="color: #428bca">Welcome to IGIT Admin Panle </center></strong></p>-->                                         <center>
                      <?php if($personal['my'][0]['img']=='' && $personal['my'][0]['gender'] == 1){?>
                      <img src="<?php echo base_url();?>student_img/male.png" width="200px;" height="200px;">
                      <?php }else if($personal['my'][0]['img']=='' && $personal['my'][0]['gender'] == 2){?>
                      <img src="<?php echo base_url();?>student_img/female.png" width="200px;" height="200px;">
                      <?php } else{?>
                       <img src="<?php echo base_url();?>student_img/<?php echo $personal['my'][0]['img']; ?>" width="200px;" height="200px;"><?php } ?></center>                     <br/>                          
                                           <p> Name : <?php echo $personal['my'][0]['full_name'];?></p>                                                                                        
                                           <p> Email : <?php echo $personal['my'][0]['email'];?></p>  
                                           <p> dob: <?php echo $personal['my'][0]['dob'];?></p>  
                                           <p> Contact : <?php echo $personal['my'][0]['contact'];?></p>                                           <p> Gender : <?php if($personal['my'][0]['gender']=='2'){echo"Female";}else{echo"Male";}?></p>
                                           <p> Category : <?php echo $personal['my'][0]['category'];?></p>
                                           <p> Marital Status : <?php
										    if($personal['my'][0]['marital_status']=='1'){echo"Single";}else{echo"Married";}?></p>
                                           <p>Remaining Fees: <?php 
//                                           echo $personal['my'][0]['fees']; echo"<br/>";    
//                                           echo $personal['my'][0]['remain_fee'];
                                            $fee_count = ($personal['my'][0]['fees'] - $personal['my'][0]['remain_fee']);
                                            if($personal['my'][0]['fees'] == $personal['my'][0]['remain_fee']){
                                                echo "<b style='color:green'>Full Fees Paid</b>";
                                            }else if($personal['my'][0]['fees'] < $personal['my'][0]['remain_fee']){
                                                echo"<b style='color:red;'>Please contact to Managment</b>";
                                            }else{
                                                echo "<b style='color:blue'>".$fee_count."/-</b>";
                                            }
                                           ?></p>
                                          <?php /*?> <p> Last Login : <?php echo $personal['my'][0]['date_time'];?>
                                           <p> Ip Address : <?php echo $personal['my'][0]['ip_address'];?>
                                          <?php */?>  
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