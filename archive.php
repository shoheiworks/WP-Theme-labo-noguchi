<?php get_header ();?>
<article class="contentsBox" id="news">
	<h1><span>NEWS ニュースARCHIVE</span></h1>

<ul>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>	
		<li class="newsBox mb30">
			<p class="newsBoxDate"><?php the_time('Y.n.j');?></p>
			<a href="<?php bloginfo('url');?>/<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
			<section class="postBox"><?php the_content();?></section>
		</li>
    <?php endwhile; else: ?>
    <?php endif; ?>
</ul>
<!-- PageNav -->
<nav class="archiveNav">
	<ul>
		<li class="singleNavPrev"><?php previous_posts_link('<span>Prev</span>','0'); ?></li>
		<li class="singleNavNext"><?php next_posts_link('<span>Next</span>','0'); ?></li>
	</ul>
</nav>

</article>
<?php get_footer();?>