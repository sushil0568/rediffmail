<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                            <?php $c = $this->session->userdata('logged_in'); ?>
                                <a class="navbar-brand" href="#"><span><?php if($c['type']==1){?>Admin<?php }else{?>Student <?php }?> </span>Panel</a>
                                <?php //$c = $this->session->userdata('logged_in'); ?>
				<ul class="user-menu">
					<li class="dropdown pull-right">
                                               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <span class="caret"> </span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url();?>index.php/Mydashboard/dash"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $c['name'];?> </a></li>
							
							<li><a href="<?php echo base_url();?>index.php/Login/logout/<?php echo $c['type'];?>/<?php echo $c['id']; ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>