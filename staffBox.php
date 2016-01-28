<section class="staffBox">
	<article class="staffImgBox <?php echo esc_html($post->cf_class);?>">
		<?php the_post_thumbnail('full');?>
	</article>
<!--	<img class="staffPopup01" src="<?php bloginfo('url');?>/img/staff_yasukoUp.jpg" alt="野口 ふみ子"> -->
		<h2><?php echo esc_html($post->cf_nameJP);?></h2>
		<p class="staffName"><?php echo esc_html($post->cf_nameEN);?></p>
	<dl>
		<p class="yakushoku"><?php echo esc_html($post->cf_post);?></p>
		<dt>生年月日</dt><dd><?php echo esc_html($post->cf_birth);?></dd>
		<dt>趣味</dt><dd><?php echo esc_html($post->cf_hobby);?></dd>
		<div class="hitokoto"><?php the_content() ;?></div>
		<?php if(get_post_meta($post->ID,'cf_link',true)):?> 
			<a href="<?php echo esc_url($post->cf_link);?>" target="_blank">プライベートページ</a>
		<?php endif; ?>
	</dl>
</section>