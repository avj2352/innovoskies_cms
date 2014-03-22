<?php $this->load->view('admin/components/page_head', $this->data); ?>
<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
					<li><?php echo anchor('admin/user', 'Users'); ?></li>
					<li><?php echo anchor('admin/page', 'Pages'); ?></li>
					<li><?php echo anchor('admin/page/order', 'Order Pages'); ?></li>
					<li><?php echo anchor('admin/article', 'News Articles'); ?></li>
				</ul>
				</div><!-- /.navbar-collapse -->
		</nav><!-- End of Navigation Bar -->
	<div class="container">
			<div class="row"> 
		<!-- Main Column -->
					<div class="col-lg-9 col-md-9">
						<?php $this->load->view($subview); ?>
					</div>
		<!-- Main Column -->				
					<div class="col-lg-3 col-md-3">
						<section>
							<?php echo mailto('avj2352@gmail.com', '<span class="glyphicon glyphicon-user"></span> avj2352@gmail.com'); ?><br>
							<?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> Logout'); ?>
						</section>
					</div>
				</div>			
			</div>
<?php $this->load->view('admin/components/page_tail', $this->data); ?>			