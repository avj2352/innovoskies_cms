<div class="col-lg-9 col-md-9 ">
		<article>
			<h2><?php echo e($article->title); ?></h2>
			<p class="pubdate"><?php echo e($article->pubdate); ?></p>
			<?php echo $article->body; ?>
		</article>
</div>
<!-- Side Column -->
<div class="col-lg-3 col-md-3" id ="sidebar">
	<h1>Recent News</h1>
	<!-- Remove the first three articles by slicing the array -->
		<!-- Generic sidebar view that will be called in every page -->
		<?php $this->load->view('sidebar'); ?>