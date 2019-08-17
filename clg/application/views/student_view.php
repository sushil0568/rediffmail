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
		
               <?php // print_r($result);?>
            
    <div class="row">
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Student Details</div>
                       <table  id="table-style" class="table table-hover">
                           <tr><td>Enrollment No</td><td> <?php echo $result['student_details']->enrollment_no;?></td></tr>
                           <tr><td>Year of Admission</td><td> <?php echo $result['student_details']->year;?></td></tr>
                           <tr><td>Course Name</td><td><?php echo $result['student_details']->course_name;?></td></tr>
                           <tr><td>Duration of Course </td><td><?php echo $result['student_details']->enrollment_no;?></td></tr>
                           
                           <?php
                           if($result['student_details']->passing_year!=''){ ?>
                           <tr><td>Passing Year</td><td><?php echo $result['student_details']->passing_year;?></td></tr>
 <tr><td>Fee Status By Management</td><td><?php echo $result['student_details']->payment_status;?></td></tr>
                           <?php }?>
                           
                           <tr><td>Course Fee</td><td><?php echo $result['student_details']->fees;?>/-</td></tr><tr>
                           <tr><td>Remaining Fee</td><td>
                               
                               <?php $x = ($result['student_details']->fees - $result['student_details']->remain_fee);
                                if($result['student_details']->fees == $result['student_details']->remain_fee){
                                    echo "<b style='color:green'>Full Fees Paid</b>";
                                }else if($result['student_details']->fees < $result['student_details']->remain_fee){
                                    echo"<b style='color:red;'>Somebody Add Wrong data into fee</b>";
                                }else{
                                    echo "<b style='color:blue'>".$x."/-</b>";
                                }
?>
                               </td></tr>
                           <tr><td>counselor Name</td><td><?php echo $result['student_details']->councler_name;?></td></tr>                           
                       </table>
                        &nbsp;&nbsp;<h5 style="color:#0044cc; margin-left: 15px;"><b>Education Section </b></h5>
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
                           foreach($result['student_edu'] as $row){
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
                       &nbsp;&nbsp;<h5 style="color:#0044cc;margin-left: 15px;"><b>Fee Section </b></h5>
                           <table  id="table-style" class="table table-hover">
                        <tr>
                           <!--<th>#</th>-->
                           <th>Amount</th>
                           <th>Date</th>
                           
                        </tr>
                           <?php
                           //$i=1;
                           foreach($result['student_fee'] as $row){
                           ?>
                       <tr>
                           <!--<td><?php echo $i;?></td>-->
                           <td><?php echo $row['amount'];?>/-</td>
                           <td><?php echo $row['date'];?></td>
                           
                       </tr>
                           <?php //$i++;
                           } ?>
                       </table>
                    </div>
            </div>
            
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Personal Information </div>
                       <table  id="table-style" class="table table-hover">
                      <center>
                      <?php if($result['student_details']->img=='' && $result['student_details']->gender == 1){?>
                      <img src="<?php echo base_url();?>student_img/male.png" width="200px;" height="200px;">
                      <?php }else if($result['student_details']->img =='' && $result['student_details']->gender == 2){?>
                      <img src="<?php echo base_url();?>student_img/female.png" width="200px;" height="200px;">
                      <?php } else{?>
                       <img src="<?php echo base_url();?>student_img/<?php echo $result['student_details']->img; ?>" width="200px;" height="200px;"><?php } ?></center>
                            <tbody>
                            <tr><td>Student Name : <?php echo $result['student_details']->full_name;?></td></tr>
                            <tr><td><?php if($result['student_details']->relation == '1'){?>Father's<?php }else{?>Husband Name<?php }?> : <?php echo $result['student_details']->fh_name;?></td></tr>                            <tr><td>Mother's Name : <?php echo $result['student_details']->mother_name;?></td></tr>
                            <tr><td>Gender : <?php if($result['student_details']->gender == 1){echo"Male";}else{echo"Female";}?></td></tr>
                            <tr><td>Category : <?php echo $result['student_details']->category;?></td></tr>
                            <tr><td>Marital Status : <?php if($result['student_details']->marital_status == 1){echo"Single";}else{echo"Married";}?></td></tr>
                            
                            <tr><td>Email : <?php echo $result['student_details']->email;?></td></tr>
                            <tr><td>Contact : <?php echo $result['student_details']->contact;?></td></tr>
                            
                            </tbody></table>
                    </div>
            </div>
            
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Contact Information </div>
                       <table  id="table-style" class="table table-hover">
                            <tbody>
                            <tr><td>Nationality : <?php echo $result['student_details']->nationality;?></td></tr>
                            <tr><td>State : <?php echo $result['student_details']->c_state;?></td></tr>
                            <tr><td>City : <?php echo $result['student_details']->c_city;?></td></tr>
                            <tr><td>District : <?php echo $result['student_details']->c_distict;?></td></tr>
                            <tr><td>Address : <?php echo $result['student_details']->c_address;?></td></tr>
                            <tr><td>Pincode : <?php echo $result['student_details']->c_pincode;?></td></tr>
                            </tbody></table>
                    </div>
            </div>


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