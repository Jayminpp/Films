<?php
/*
	Template Name: Films
*/
get_header();
?>
<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array('post_type' => 'film','posts_per_page'=> -1);
$loop = new WP_Query( $args );
$i=1;

if($loop->have_posts()): ?>

<div id="primary" class="content-area col-sm-12 col-md-8">
  <main id="main" class="site-main" role="main">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <article id="post-1" class="post-<?php the_ID();?> post hentry">
      <header class="entry-header page-header"> <a href="<?php the_permalink();?>" title="<?php the_title();?>"></a>
        <h2 class="entry-title"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
        <div class="entry-meta"> <span class="posted-on" title="Release Date"><i class="fa fa-calendar"></i>&nbsp;<time class="entry-date published"><?php echo types_render_field("release-date",array());?></time>
          </span> </div>
        <!-- .entry-meta -->
      </header>
      <!-- .entry-header -->
      <div class="entry-content">
        <p><?php the_excerpt();?></p>
      </div>
      <!-- .entry-content -->
      <footer class="entry-meta"> 
	  
	  <strong>Ticket Price: </strong>
	  <span><?php echo types_render_field("ticket-price",array());?></span>
	  <br />
	  
	  
	  <strong>Release Date: </strong>
	  <span><?php echo types_render_field("release-date",array());?></span>
	  <br />
	  
	  <?php $genres = get_the_terms(get_the_ID(),'genre');
	  
	  if(!empty($genres)){ ?>
	  	<strong>Genres: </strong>
		<?php foreach($genres as $genre){?>
			<span><a href="<?php echo get_term_link($genre);?>"><?php echo $genre->name;?></a></span>
		<?php }?>
		<br />
	  <?php }
	  ?>
	  
	  <?php $countries = get_the_terms(get_the_ID(),'country');
	  
	  if(!empty($countries)){ ?>
	  	<strong>Countries: </strong>
		<?php foreach($countries as $country){?>
			<span><a href="<?php echo get_term_link($country);?>"><?php echo $country->name;?></a></span>
		<?php }?>
		<br />
	  <?php }
	  ?>
	  
	  <?php $years = get_the_terms(get_the_ID(),'years');
	  
	  if(!empty($years)){ ?>
	  	<strong>Years: </strong>
		<?php foreach($years as $year){?>
			<span><a href="<?php echo get_term_link($year);?>"><?php echo $year->name;?></a></span>
		<?php }?>
		<br />
	  <?php }
	  ?>
	  
	  
	  <?php $actors = get_the_terms(get_the_ID(),'actor');
	  
	  if(!empty($actors)){ ?>
	  	<strong>Actors: </strong>
		<?php foreach($actors as $actor){?>
			<span><a href="<?php echo get_term_link($actor);?>"><?php echo $actor->name;?></a></span>
		<?php }?>
	  <?php }
	  ?>
	  
	  
	  
	  </footer>
      <!-- .entry-meta -->
      <hr class="section-divider">
    </article>
    <?php endwhile; ?>
  </main>
  <!-- #main -->
</div>
<?php endif; wp_Reset_query(); ?>
<?php get_sidebar(); ?>
<?php get_footer();?>
