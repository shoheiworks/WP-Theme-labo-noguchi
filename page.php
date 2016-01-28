<?php get_header(); ?>

<article class="freeBox" id="fixed">
<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title();?></h1>
	<section class="fixedBox">
		<?php the_content(); ?>
	</section>
	<?php endwhile; ?>
</article>
<?php get_footer(); ?>