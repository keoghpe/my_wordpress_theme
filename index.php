<?php get_header(); ?>
<section id="content" role="main">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>	
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>