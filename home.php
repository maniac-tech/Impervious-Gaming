<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="engine1/Css.css" />
	<meta name="viewport" content="text/html; charset=utf-8" http-equiv="Content-Type" content="width=device-width, initial-scale=1" >
			<!-- Start WOWSlider.com HEAD section -->
				<link rel="stylesheet" type="text/css" href="engine1/style.css" />
				<script type="text/javascript" src="engine1/jquery.js"></script>
				<link rel="stylesheet" href="normalize.css">
				<link rel="stylesheet" href="style.css">
				<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script>
					$(function() {
						var pull 		= $('#pull');
							menu 		= $('nav ul');
							menuHeight	= menu.height();

						$(pull).on('click', function(e) {
							e.preventDefault();
							menu.slideToggle();
						});

						$(window).resize(function(){
			        		var w = $(window).width();
			        		if(w > 320 && menu.is(':hidden')) {
			        			menu.removeAttr('style');
			        		}
			    		});

			    		$(window).resize(function(){
			        		var w = $(window).width();
			        		if(w > 320 && menu.is(':hidden')) {
			        			menu.removeAttr('Css');
			        		}
			    		});
					});
				</script>
			<!-- End WOWSlider.com HEAD section -->
		<title>Impervious</title>
</head>
<body>
	<?php  
		require ("navigation.php");
	?>
	<section>
		<div class="rollpic">
			<!-- Start WOWSlider.com BODY section -->
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="images/coc.png" alt="coc" title="coc" id="wows1_0" class="slide_img"/></li>
						</ul>
					</div>
					<div class="ws_thumbs">
						<div>
							<a href="coc.png" title="coc"><img src="images/coc.png" alt="" class="slide_img"/></a>
							<a href="dota2.jpg" title="dota2"><img src="images/dota2.jpg" alt="" class="slide_img"/></a>
							<a href="dota3.jpg" title="dota3"><img src="images/dota3.jpg" alt="" class="slide_img"/></a>
							<a href="dota4.jpg" title="dota4"><img src="images/dota4.jpg" alt="" class="slide_img"/></a>
							<a href="dota5.jpg" title="dota5"><img src="images/dota5.jpg" alt="" class="slide_img"/></a>
						</div>
					</div>
					<div class="ws_shadow"></div>
				</div>	
				<script type="text/javascript" src="engine1/wowslider.js"></script>
				<script type="text/javascript" src="engine1/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
		</div>
	</section>
	<div class="update_info">
		<div class="newshead">
				<div class="news_head_content">
					<center>
						<p class="news_head">
							<b>Latest News <hr color="red"></b>
						</p>
					</center>
					<img src="images/dota4.jpg" class="img_news">
					<p class="news">
					
						A newly posted game on the website. Being a multiplayer mission 
                        game the graphics provided by this game is far better than the 
                        previous version. Try it out today!

					</p> 	
				</div>
		</div>

		<div class="showcase_head">
			<div class="showcase_head_content">
				<center>
					<p class="show_head">
						<b>Showcase <hr color="red"></b>
					</p>
				</center>
				<img src="images/dota2.jpg" class="img_news">
				<p class="news">
					New poster out for dota2 game. The poster deals with the hd grphics and a mission set.
				</p>
			</div>
		</div>	

		<div class="popular_head">
			<div class="popular_head_content">
				<center>
					<p class="pop_head"><b>Popular Now <hr color="red"></b></p>
				</center>
				<img src="images/coc.png" class="img_news">
				<p class="news">
					The latest upcoming release of 2016 is out, the very popular mobile game "Clash of Clans". Enjoy the game now on your very own pc with high definition visual effects and more. 
				</p>
			</div>
		</div>	
	</div>
	<hr class="footer_hr">

	<div class="footer">
		<footer>
			<center>
				<p>
					<font size="4" face="Times New Roman" color="black">
						<b>Published for: </b>
					</font>
					<time datetime="2016-05-05">
						<font face="Monotype Corsiva" color="black" size="5">Impervious Games</font>
					</time>
					<br>
					<font face="Times New Roman" size="4" color="black">
						<b>All rights reserved:  </b>Developed and maintained by Abhishek Jain, Viral Joshi, Deesha Nirmal and Ashka Ashani.
					</font>
				</p>
			</center>
		</footer>
	</div>
</body>
</html>