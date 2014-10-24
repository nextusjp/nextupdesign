<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="post">
			<?php
			if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' ); 
			the_content();
			else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			the_excerpt(); 
			endif;
			?>	
			
		</div><!-- .post -->
<?php endwhile; endif; ?>
