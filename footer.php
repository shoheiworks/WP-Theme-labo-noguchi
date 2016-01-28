<footer>
	<div id="footerBgimg"><span>BackGroundImg</span></div>
	<div id="backToTop"><a href="top"><span>Back To Top</span></a></div>
	<section id="footerInfo">
		<article id="salonlist">
		<p>SALON LIST</p>
<!--	<ul>
			<li class="salonlist_Cutinnoguchi">Cut in NOGUCHI<address>095-878-5272</address></li>
			<li class="salonlist_Ishairworks">Is Hair Works<address>095-826-6954</address></li>
		</ul>
-->		</article>
		<section id="footerMail">Mail : kaosori2@yahoo.co.jp</section>
		<section id="footerOpen">
			<h4>営業時間</h4>
			<p>9:00 - 19:00</p>
			<p>定休日　月曜日・第3日曜日</p>
		</section>
	</section>
	<nav id="footerNav01">
		<ul>
			<li><a href="<?php bloginfo('url');?>/concept/">CONCEPT</a></li>
			<li><a href="<?php bloginfo('url');?>/menu/">MENU</a></li>
			<li><a href="<?php bloginfo('url');?>/staff/">STAFF</a></li>
			<li><a href="<?php bloginfo('url');?>/news/">NEWS</a></li>
		</ul>
	</nav>
	<!-- MENU PLUS -->
	<?php wp_nav_menu( array (
		'theme_location' => 'menuplus' ,
		'menu' => 'MENU PLUS Footer' ,
		'container' => 'nav' ,
		'container_id' => 'footerNav02' ,
		'container_class' => 'none',
		'menu_id' => 'none' ,
		'menu_class' => 'none'
		 )
	);?>
	<ul id="footerSnsLink">
		<li id="LinkFBcutinnoguchi"><a href="https://www.facebook.com/cutin1120/" target="_blank"><span>Cut in NOGUCHI Facebook</span></a></li>
		<li id="LinkFBishairworks"><a href="https://www.facebook.com/ishairworks/" target="_blank"><span>Is Heir Works Facebook</span></a></li>
		<li id="LinkAmeba"><a href="http://ameblo.jp/kaosori2/" target="_blank"><span>ブログはこちら</span></a></li>
	</ul>
	<p id="CR">Copy Right Cut in NOGUCHI</p>
	</section>
	<?php wp_footer();?>
</footer>

</body>
</html>