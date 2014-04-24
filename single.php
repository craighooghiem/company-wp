<?php get_header(); ?>
	
	<div id="content" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<h2><?php the_title(); ?></h2>

			<div class="post-content">
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>

	</div>
	<?php get_sidebar(); 

get_footer(); ?>