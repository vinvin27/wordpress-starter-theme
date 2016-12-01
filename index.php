<?php get_header(); ?>
<main role="main" class="main wrapper cf">
	<div class="content row">
		<?php while ( have_posts() ) : the_post() ?>

 <div id="post-<?php the_ID(); ?>" <?php post_class('card col s12 m12'); ?> role="article">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php the_post_thumbnail_url() ?>">
	</div>
    <div class="card-content">
	<h2> <?php the_title(); ?> </h2>
	<p> <?php the_excerpt(); ?> </p>    
</div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p><?php the_content( __( 'continue reading <span class="meta-nav">&raquo;</span>' )  ); ?></p>
    </div>
  </div>


		<?php endwhile; ?>
		<?php get_template_part('parts/pagination'); ?>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
