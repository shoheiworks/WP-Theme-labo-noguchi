//Back to TOP
$(function(){
	$("#backToTop").click(function(){
    $('html,body').animate({ scrollTop: 0}, 'slow','swing');
    return false;
	});
});

//Maps
$(function(){
	$("body").append("<div id='baseLayer'></div><div id='overLayer'></div>");
	$("#baseLayer").click(function(){
		$(this).hide();
		$("#overLayer").hide();
	});
	$("#mapClose").click(function(){
		$(this).hide();
		$("#overLayer").hide();
	});
	$("a#mapCutinnoguchi").click(function(){
		$("#baseLayer").show();
		$("#overLayer").show().load("../mapsCutinnoguchi.html")
			.css({
				marginLeft:"-"+$("#overLayer").width()/2+"px" 
			});
		return false;
	});

	$("a#mapIshairworks").click(function(){
		$("#baseLayer").show();
		$("#overLayer").show().load("../mapsIshairworks.html")
			.css({
				marginLeft:"-"+$("#overLayer").width()/2+"px" 
			});
		return false;
	});

/*	if($.browser.msie && $.browser.version<7){
	$(window).scroll(function(){
		$("#baseLayer").get(0).style.setExpression("top","$(document).scrollTop()+'px'");
		$("#overLayer").get(0).style.setExpression("top","($(document).scrollTop()+$(window).height()/2)+'px'");
	});
	}
*/
});

//ImgUp onMouse
/*
ある class が付いている、ところをマウスオーバーすると、
	<img class="imgUp" src="img/staff_01.jpg" alt="staff01">
	<img class="imgUp" src="img/staff_02.jpg" alt="staff02">
	<img class="imgUp" src="img/staff_03.jpg" alt="staff03">
	<img class="imgUp" src="img/staff_04.jpg" alt="staff04">

画像が表示される
	<img src="img/staff_01_on.jpg" alt="img01" alt="staff01" width="120px" height="130px">
	<img src="img/staff_02_on.jpg" alt="img02" alt="staff02" width="120px" height="130px">
	<img src="img/staff_03_on.jpg" alt="img03" alt="staff03" width="120px" height="130px">
	<img src="img/staff_04_on.jpg" alt="img04" alt="staff04" width="120px" height="130px">

class は共通のものを使う
	.imgUp {
		display: block;
	}
	.imgUpImg {
		width: 120px;
		height: 130px:
		display: block;
		border: solid 3px #333;
		position: absolute; //staffBoxが基準
		top: 10px;
		left: 20px;
	}

1 HTMLを作る
2 CSSを作る
3 表示させるHTMLを.hideする
4 マウスオーバーで表示する
5
6 変数をつかう 画像ファイル名と、出てくる画像ファイル名 (変数.jpg 変数+_on.jpg)
<section class="staffBox">
	<img class="imgUp" src="[url]/img/staff_03.jpg" atl="野口 靖子">
	<dl class="left pt5">
		<h2>野口 靖子</h2>
		<dt>役 職</dt><dd>役職名</dd>
		<dt>NickName</dt><dd></dd>
	</dl>
</section>
まずは変数なしで作る*/

/*最終的になりそうな形
スタッフページを開いた時
	投稿時に変数になるもの
	imgファイル名
	altの値　野口 靖子
	var staffNo,
		staffAlt;

HTMLを打つ
class の数だけ繰り返す <section class="staffBox">xxx</section>
$(function(){
	$(".staffBox").after("<img class="imgUp" src="[url]/img/staff_03.jpg" atl="staffAlt">");
});
 */

 //変数なしバージョン
 /*
$(function(){
	if $(".imgUp01").mouseover(function(){
		$(".imgUp01 img").after("<img class="imgUpImg" src="<?php bloginfo("url");?>/img/staff_01_on.jpg" alt="staff01" width="120px" height="130px">")}
	else if $(".imgUp02").mouseover(function(){
		$(".imgUp02 img").after("<img class="imgUpImg" src="<?php bloginfo("url");?>/img/staff_02_on.jpg" alt="staff02" width="120px" height="130px">")}
	else if $(".imgUp03").mouseover(function(){
		$(".imgUp03 img").after("<img class="imgUpImg" src="<?php bloginfo("url");?>/img/staff_03_on.jpg" alt="staff03" width="120px" height="130px">")}
	else if $(".imgUp04").mouseover(function(){
		$(".imgUp04 img").after("<img class="imgUpImg" src="<?php bloginfo("url");?>/img/staff_04_on.jpg" alt="staff04" width="120px" height="130px">")}
	else {$(".imgUpImg").hide();}
	});
	endif;
	return false:
});

$(function(){
	$(".imgUp01").hover(function(){
		$(".imgUp01 img").after("<h1>test</h1>");},
	(function(){
		$(".imgUp01 img").remove("<h1>test</h1>");});
	});
});	
*/
//<?php bloginfo("url");?> "<img class="imgUpImg" src="/img/staff_01_on.jpg" alt="野口 ふみ子" width="120px" height="130px">"

//
// $(function(){
// 	$(".staffPopup01").hide();
// 	$(".imgUpBox01").hover(function(){
// 		$(".staffPopup01:not(:animated)").fadeIn("10");
// 	},
// 		function(){
// 			$(".staffPopup01:not(:animated)").hide("5");
// 		});
// });
// $(function(){
// 	$(".staffPopup02").hide();
// 	$(".imgUpBox02").hover(function(){
// 		$(".staffPopup02:not(:animated)").fadeIn("10");
// 	},
// 		function(){
// 			$(".staffPopup02:not(:animated)").hide("5");
// 		});
// });$(function(){
// 	$(".staffPopup03").hide();
// 	$(".imgUpBox03").hover(function(){
// 		$(".staffPopup03:not(:animated)").fadeIn("10");
// 	},
// 		function(){
// 			$(".staffPopup03:not(:animated)").hide("5");
// 		});
// });$(function(){
// 	$(".staffPopup04").hide();
// 	$(".imgUpBox04").hover(function(){
// 		$(".staffPopup04:not(:animated)").fadeIn("10");
// 	},
// 		function(){
// 			$(".staffPopup04:not(:animated)").hide("5");
// 		});
// });

/* 公開前
$(function(){
var popUpSpeed = 'fast',
	popDownSpeed = 'fast'

	$(".staffPopup01").hide();
	$(".staffPopup02").hide();
	$(".staffPopup03").hide();
	$(".staffPopup04").hide();

$(".imgUpBox01").hover(function(){
		$(".staffPopup01:not(:animated)").fadeIn("popUpSpeed");
	},
		function(){
			$(".staffPopup01:not(:animated)").hide("popDownSpeed");
		});
});
$(function(){
	$(".imgUpBox02").hover(function(){
		$(".staffPopup02:not(:animated)").fadeIn("popUpSpeed");
	},
		function(){
			$(".staffPopup02:not(:animated)").hide("popDownSpeed");
		});
});$(function(){
	$(".imgUpBox03").hover(function(){
		$(".staffPopup03:not(:animated)").fadeIn("popUpSpeed");
	},
		function(){
			$(".staffPopup03:not(:animated)").hide("popDownSpeed");
		});
});$(function(){
	$(".imgUpBox04").hover(function(){
		$(".staffPopup04:not(:animated)").fadeIn("popUpSpeed");
	},
		function(){
			$(".staffPopup04:not(:animated)").hide("popDownSpeed");
		});
});
*/