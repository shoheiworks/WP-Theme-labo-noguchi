<?php
/*
Template Name: Menu Plus
*/
?>

<?php get_header();?>
<article class="freeBox" id="fixed">
<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title();?></h1>
	<section class="singleBox"> 
		<article class"singlePost">
			<?php the_content();?>
		</article>
		<time><?php the_date('Y.n.j');?></time>

	</section>

<?php endwhile;?>
</article>

<?php get_footer();?>