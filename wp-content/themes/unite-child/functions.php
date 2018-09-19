<?php
/*
* Unite Child Theme Functions
*
*/

function unite_theme_enqueue_styles() {
	$parent_style = 'unite-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'unite-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}
add_action( 'wp_enqueue_scripts', 'unite_theme_enqueue_styles', 12 );


function films_func() {
	$html = '';
	ob_start();
	$args = array('post_type' => 'film','posts_per_page'=> 5);
	$loop = new WP_Query( $args );
	$i=1;
	
	if($loop->have_posts()): ?>
		<ul class="nav nav-tabs nav-stacked">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li class="list-group">
			<h3 class="entry-title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h3>
		  <div class="entry-meta"> 
		  
		  <strong>Ticket Price: </strong>
		  <span><?php echo types_render_field("ticket-price",array());?></span>
		  <br />
		  <strong>Release Date: </strong>
		  <span><?php echo types_render_field("release-date",array());?></span>
		  <br />
		  </div>
		</article>
		<?php endwhile; ?>
	  </ul>
	<?php endif; wp_Reset_query();
	$html.= ob_get_contents();
	ob_clean();
	return $html;
}
add_shortcode( 'recent_films', 'films_func' );