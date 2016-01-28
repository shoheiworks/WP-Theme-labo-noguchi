<!DOCTYPE html> 
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="description" content="美・健康・リラクゼーションをテーマに、からだもココロも喜ぶエコ＆ロハスな理容店の公式WEBサイトです">
<meta name="keywords" content="Cut in NoGUCHI,Is Hair　Works,こはるびより,長崎,サロン,床屋,エステ,カラー,理容,ブライダルエステ,ブライダル">
<title>Noguchicut.net</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('url');?>/js/common.js"></script>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('url');?>/css/iview.css">
	<script src="<?php bloginfo('url');?>/js/raphael-min.js"></script>
	<script src="<?php bloginfo('url');?>/js/jquery.easing.js"></script>
	<script src="<?php bloginfo('url');?>/js/iview.js"></script>
	<script>
		$(document).ready(function(){
			$('#iview').iView({
				pauseTime: 4000,
				directionNav: false,
				controlNav: true,
				tooltipY: -15
			});
		});		
	</script>
<!-- facebook LikeButton -->
<meta property="fb:app_id" content="308020626021140" />
<meta property="og:url" content="http://noguchicut.net/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Noguchicut.net" />
<meta property="og:image" content="http://noguchicut.net/img/fb_likebutton20140424.jpg" />
<meta property="og:description" content="美・健康・リラクゼーションをテーマに、からだもココロも喜ぶエコ＆ロハスな理容店の公式WEBサイトです" />
</head>
<body>
<!-- Google Analytics -->
	<?php include_once("analyticstracking.php") ?>
	<div id="top"></div>
<header id="indexHeader">
	<section id="index_salonlist">
		<article id="salonlist">
		<p>SALON LIST</p>
<!--	<ul>
			<li class="salonlist_Cutinnoguchi">Cut in NOGUCHI<address>095-878-5272</address></li>
			<li class="salonlist_Ishairworks">Is Hair Works<address>095-826-6954</address></li>
		</ul>
-->		</article>
	</section>
</header>

	<nav id="index_salonNav">
		<ul>
			<li id="navCutinnoguchi"><a href="<?php bloginfo('url');?>/salon#cutinnoguchi"><span>cut in noguchi</span></a></li>
			<li id="navIshairworks"><a href="<?php bloginfo('url');?>/salon#ishairworks"><span>Is Hair Works</span></a></li>
		</ul>
	</nav>
	<nav id="index_gNav">
		<ul>
			<li id="indexNavSalon"><a href="<?php bloginfo('url');?>/salon/"><span>SALON</span></a></li>
			<li id="indexNavConcept"><a href="<?php bloginfo('url');?>/concept/"><span>CONCEPT</span></a></li>
			<li id="indexNavMenu"><a href="<?php bloginfo('url');?>/menu/"><span>MENU</span></a></li>
			<li id="indexNavStaff"><a href="<?php bloginfo('url');?>/staff/"><span>STAFF</span></a></li>
			<li id="indexNavNews"><a href="<?php bloginfo('url');?>/news/"><span>NEWS</span></a></li>
		</ul>
	</nav>

<section id="indexContentsbox">
	<!-- Promotion -->
	<section id="index_promo">
		<div id="iview">
 			<div data-iview:image="img/1_promo01.jpg" data-iview:transition="zigzag-drop-top,zigzag-drop-bottome"></div>
			<div data-iview:image="img/1_promo02.jpg" data-iview:transition="strip-right-fade,strip-left-fade"></div>
			<div data-iview:image="img/1_promo03.jpg" data-iview:transition="zigzag-drop-top,wipeLeft"></div>
		</div>
	</section>
	<!-- Facebook Like Button-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=308020626021140";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-like" data-href="<?php wp_title(); ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>

	<!-- NEWS -->
	<article id="index_news">
	    <?php $paged = get_query_var('paged');
	    query_posts('category_name=news&posts_per_page=3&paged='.$paged);?>
	<h1><span>NEWS</span></h1>
	<ul>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>	
		<li class="newsBox">
			<p class="newsBoxDate"><?php the_time('Y.n.j');?></p>
			<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
			<section class="postBox"><?php the_content();?></section>
		</li>
    <?php endwhile; else: ?>
    <?php endif; ?>
	</ul>
	</article>
</section>
<div id="newsBgimg"><span>BackGroundImg</span></div>
<?php get_footer() ;?>