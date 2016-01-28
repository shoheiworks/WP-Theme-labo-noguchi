<!DOCTYPE html> 
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="description" content="美・健康・リラクゼーションをテーマに、からだもココロも喜ぶエコ＆ロハスな理容店の公式WEBサイトです">
<meta name="keywords" content="Cut in NoGUCHI,Is Hair　Works,こはるびより,長崎,サロン,床屋,エステ,カラー,理容,ブライダルエステ,ブライダル">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name');?></title>
<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('url');?>/js/common.js"></script>
<?php wp_head();?>
</head>
<body>
<!-- Google Analytics -->
<?php include_once("analyticstracking.php") ?>
<!-- End GoogleAnalytics -->
<nav id="contents_gNav">
		<ul>
			<li id="contentsNavHome"><a href="<?php bloginfo('url');?>"><span>HOME</span></a></li>
			<li id="contentsNavSalon"><a href="<?php bloginfo('url');?>/salon/"><span>SALON</span></a></li>
			<li id="contentsNavConcept"><a href="<?php bloginfo('url');?>/concept/"><span>CONCEPT</span></a></li>
			<li id="contentsNavMenu"><a href="<?php bloginfo('url');?>/menu/"><span>MENU</span></a></li>
			<li id="contentsNavStaff"><a href="<?php bloginfo('url');?>/staff/"><span>STAFF</span></a></li>
			<li id="contentsNavNews"><a href="<?php bloginfo('url');?>/news/"><span>NEWS</span></a></li>
		</ul>
</nav>
<header id="contentsHeader">
	<section id="contents_salonlist">
		<article id="salonlist">
		<p>SALON LIST</p>
<!--	<ul>
			<li class="salonlist_Cutinnoguchi">Cut in NOGUCHI<address>095-878-5272</address></li>
			<li class="salonlist_Ishairworks">Is Hair Works<address>095-826-6954</address></li>
		</ul>
-->		</article>
		<section id="headerOpen">
			<p>Open</p>
			<p>9:00 - 19:00</p>
			<p>定休日 月曜日・第3日曜日</p>
		</section>
	</section>
</header>