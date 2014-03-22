<?php $this->load->view('components/page_head'); ?>
<body>
	<div class="container">	
	<h1><strong><?php echo anchor('', strtoupper($site_name)); ?></strong></h1>
	<!-- Navbar sections -->
	<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php echo get_menu($menu); ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>
	<!-- Navbar sections -->
	
	<div class="container">
		<div class="row">
			<?php $this->load->view('templates/'.$subview); ?>
		</div>
	</div>
	
</body>
<script>
$('ul.nav li.dropdown a').click(function(){
var url = $(this).attr('href');
// alert(url); 
window.location=url;
});
</script>
<?php $this->load->view('components/page_tail'); ?>