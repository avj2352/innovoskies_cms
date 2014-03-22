<?php $this->load->view('admin/components/page_head', $this->data); ?>
<body style="background:#555;">
	<div class="container">
		<div class="panel panel-default" width="400px" style="position: relative; top:20px;">
			<!-- Default panel contents -->
			<?php $this->load->view($subview); ?><!-- $subview is created in the controller: User  -->
			<div class="panel-footer">
				&copy;&nbsp;<?php echo $meta_title; ?>
			</div>
		</div>
	</div>
<?php $this->load->view('admin/components/page_tail', $this->data); ?>	