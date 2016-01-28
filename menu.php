<?php
/*
Template Name: Menu
*/
?>
<?php get_header(); ?>

<article class="contentsBox" id="menu">
	<h1><span>MENU メニュー</span></h1>
<section class="menuBox">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php remove_filter ('the_content', 'wpautop'); ?>

		<?php the_content(); ?>

</section>
	<table id="menuImgBox" border="0">
		<tbody>
		<tr>
		<td> </td>
		</tr>
		<tr>
		<td> </td>
		</tr>
		<tr>
		<td> </td>
		</tr>
		<tr>
		<td> </td>
		</tr>
		</tbody>
	</table>
</article>

	<?php endwhile; ?>
<?php get_footer(); ?>