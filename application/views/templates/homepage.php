<!-- Main Column -->
<div class="col-lg-9 col-md-9 ">

	<div class="row">
		<div class="col-lg-12"><?php  if(isset($articles[0])) echo get_excerpt($articles[0]); ?></div>
	</div>

	<div class="row">
		<div class="col-lg-6"><?php  if(isset($articles[1])) echo get_excerpt($articles[1]); ?></div>
		<div class="col-lg-6"><?php  if(isset($articles[2])) echo get_excerpt($articles[2]); ?></div>
	</div>
</div>
<!-- Side Column -->
<div class="col-lg-3 col-md-3" id ="sidebar">
	<h1>Recent News</h1>
	<!-- Remove the first three articles by slicing the array -->
		<?php echo anchor($news_archive_link, '+ News archive') ?>
		<?php $articles = array_slice($articles, 3); ?>
		<?php echo article_links($articles); ?>
</div>
