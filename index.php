<?php get_header(); ?>
<?php get_template_part('searchmenu'); ?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-9 gridsample"><pre class="text-center">col-md-19</pre></div>
	<div class="col-md-3 gridsample"><pre class="text-center">col-md-3</pre></div>
</div><!-- .raw -->

<div class="row">
	<div class="col-md-9">
		<?php get_template_part('content'); ?>
	</div>
	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>
</div><!-- .raw -->
	
<?php get_footer(); ?>