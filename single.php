<?php get_header();?>
<article class="freeBox" id="single">
<?php if (have_posts()) : while (have_posts()) : the_post();?>	

	<h1><?php the_title();?></h1>
	<section class="singleBox"> 
		<time><?php the_date('Y.n.j');?></time>
		<article class"singlePost">
			<?php the_content();?>
		</article>
	</section>

	<nav class="singleNav">
		<ul>
			<li class="singleNavPrev"><?php previous_post_link('%link','<span>Prev</span>', TRUE); ?></li>
			<li class="singleNavNext"><?php next_post_link('%link','<span>Next</span>', TRUE); ?></li>
		</ul>
	</nav>
<?php endwhile;?>
<?php endif; ?>

</article>

<?php get_footer();?>