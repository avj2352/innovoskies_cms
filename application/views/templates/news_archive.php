<!-- Main Column -->
<div class="col-lg-9 col-md-9 ">
	<?php if($pagination): ?>
		<section class="pagination"><?php echo $pagination; ?></section>
	<?php endif; ?>
	<div class="row">
		<?php  if(count($articles)): foreach ($articles as $article):?>
		<article class="col-lg-12"><?php echo get_excerpt($article); ?><hr></article>
		<?php endforeach; ?>
	<?php endif; ?>
	</div>
</div>
<!-- Side Column -->
<div class="col-lg-3 col-md-3" id ="sidebar">
	<h1>Recent News</h1>
	<!-- Remove the first three articles by slicing the array -->
		<!-- Generic sidebar view that will be called in every page -->
		<?php $this->load->view('sidebar'); ?>
</div>
