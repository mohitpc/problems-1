<?
/*
	The following are controls for viewing the template only.
*/
	$header_login_form = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('comp_head.php');?>
	</head>
	<body class="en">
		<?php include("comp_mobile_nav.php"); ?>
		<section class="wrapper">
			<?php include("comp_header.php"); ?>
			<section class="content">
				<?php include("comp_asides.php"); ?>
				<section class="content_area">
					<article>
						<section class="inner_content">
							<h1 class="orange mb15">Font Headings</h1>
							<h1>H1 title</h1>
							<h2>H2 title</h2>
							<h3 style="margin-bottom: 0px;">H3 title</h3>
							<h4>H4 title</h4>
							<h5>H5 title</h5>
							<h6>H6 title</h6>
							<h1 class="orange mb15 mt15">Font Styles</h1>
							<div class="pad5">This is default font style.</div>
							<div class="pad5 exo-normal">This is EXO font style.</div>
							<div class="pad5 exo-bold">This is EXO bold font style.</div>
							<div class="pad5 asian-font">This is an Asian font style: 熥獘 瀁瀎瀊 礛簼繰 踸躽輷 緁, 嵷 紁羑 紵脭脧 齫儽戃 趍跠跬 獧瞝瞣 郔镺陯 怲杶 跿, 暕 蕡蕇蕱 樛槷殦 葠蜄蛖 滆滍, 湹渵焲 鬋鯫鯚 溛滁 鋟 劁 茇茺苶 寁崏庲 烗猀珖 楟棰, 塛嫆嫊 蓂蓌蓖 莃荶衒 窨箌 禖 黐曮禷 纑臞蘬 灡蠵讔 鋑鋡 踙, 嶜憃撊 葠蜄蛖 嘕 殠漊, 嫀 瘵瘲 浶洯浽 鈊釿閍 榎榯槄 嬏嶟樀 槏 騔鯬, 澭濇 蒏 刲匊呥 鵵鵹鵿 鬐鶤鶐, 圛嬖嬨 鯦鯢鯡 曋橪橤 賹鍌 溿 緁 虥諰諨 灉礭蘠 溹溦滜 顃餭, 黈龠懱 瞵瞷矰 爂犤繵 軱逴 鋱</div>
							<p class="pad5"><a href="#">This is link style.</a> The &lt;a&gt; element must be within the &lt;p&gt; element for it to be underlined. This is standard behaviour for links present within the content area. This is to prevent the links outside of the content area to become underlined such as the menu items.</p>
							<h1 class="orange mb15 mt15">Font Colors</h1>
							<div class="pad5 exo-bold white pad5" style="background-color:gray">White</div>
							<div class="pad5 exo-bold black">black</div>
							<div class="pad5 exo-bold yellow">yellow</div>
							<div class="pad5 exo-bold orange">orange</div>
							<div class="pad5 exo-bold dark_orange">dark_orange</div>
							<div class="pad5 exo-bold amulet">amulet</div>
							<div class="pad5 exo-bold chestnut">chestnut</div>
							<div class="pad5 exo-bold brandy_rose">brandy_rose</div>
							<div class="pad5 exo-bold tea_green">tea_green</div>
							<div class="pad5 exo-bold de_york">de_york</div>
							<h1 class="orange mb15 mt15">Margins &amp; Padding classes</h1>
							<div class="pad5">
								<p>For padding use the class form of <span class="chestnut">pad</span><span class="amulet">* (where the * is the padding number: 5,7,10,15,20,25)</span>. If you want a padding of 15px then use class <span class="chestnut">class="<strong>pad15</strong>"</span>. For margins use <span class="chestnut">mar</span><span class="amulet">**</span>.</p>
								<p>You can use sectional padding in the form of <span class="chestnut">pt</span><span class="amulet">10</span>, where <span class="chestnut">p* (the values are t,r,b,l)</span> and <span class="amulet">10 (where the padding numbers of 5,7,10,15 can be used)</span>. If you want top bottom padding of 10px only, you can use <span class="chestnut">class="<strong>pt10 pb10</strong>"</span>.  For margins use <span class="chestnut">m*</span><span class="amulet">*</span>.
							</div>
							<h1 class="orange mb15 mt15">Buttons</h1>
							<div class="mt5 mb5 btn btn_gray">Gray Button</div>
							<div class="mt5 mb5 btn btn_orange">Orange Button</div>
							<div class="mt5 mb5 btn btn_yellow">Yellow Button</div>
							<div class="mt5 mb5 btn btn-buy">Buy Button</div>
							<div class="mt5 mb5 btn btn-sell">Sell Button</div>
							<div class="mt5 mb5 btn btn-form">Standard Form Button</div>
							<h1 class="orange mb15 mt15">Form Elements</h1>
							<input class="mb5" type="text" value="This is a text input"><BR>
							<input class="mb5" type="search" value="This is a search input"><BR>
							<input class="mb5" type="password" placeholder="This is a password input"></BR>
							<select class="mb5">
								<option>This is option 1</option>
								<option>This is option 2</option>
								<option>This is option 3</option>
								<option>This is option 4</option>
								<option>This is option 5</option>
							</select>
							</BR>
							<input type="submit" value="Submit" class="mb5 mr5">
							<input type="submit" value="Button" class="mb5">
						</section>
					</article>
				</section>
			</section>
			<?php include("comp_footer.php"); ?>
		</section>
	</body>
</html>
