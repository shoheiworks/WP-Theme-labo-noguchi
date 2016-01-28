<?php get_header ();?>
<article class="contentsBox" id="staff">
	<h1><span>STAFF スタッフ</span></h1>
	<?php query_posts(
		array(
			'post_type' => 'staff',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'post_per_page' => 0,
		)
	);
	if (have_posts()) :
		while (have_posts()) :
			the_post();
			get_template_part('staffBox');
		endwhile;
	endif;
	wp_reset_query();	
	?>
</article>
<?php get_footer();?>