<?php $activePage = "home"; ?>
<!DOCTYPE html>
<!--[if lt IE 9]> <html lang="th" class="ie8"> <![endif]-->
<!--[!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<?php
	include "inc/meta.php";
	?>
	<link href="css/slick.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
</head>
<body>
	<?php include "inc/header.php";?>
	<main>
		<section id="home" class="home">
			<div class="profile wow fadeIn">
				<img src="img/me1.jpg" class="item active">
				<img src="img/me2.jpg" class="item">
				<img src="img/me3.jpg" class="item">
				<img src="img/me4.jpg" class="item">
			</div>
			<h1 class="wow rubberBand">Piyanuch  Na Takuatung</h1>
			<h2 class="wow fadeIn" data-wow-delay="0.3s">
				With 8 years of experience in develop and design<br> from marketing & advertising industry.
			</h2>
		</section>
		<section class="slide">
			<div class="slide-portfolio"></div>
		</section>
		<section id="contact" class="contact">
			<div class="cropbg-top cropbg"></div>
			<div class="bx-contact">
					<div class="container">
						<div class="wow pulse" data-wow-delay="0.2s">
							<div class="circle">
								<i class="icon-contact"></i>  
							</div>
							<h1>Contact</h1>
							<i class="icon-pin"></i>
							<p>
								111/17 Moo 6 Village Centro  Pinklao - Wongwaen,<br>
								Soi Wat Phra Ngoen, Bang Muang, Bang Yai, Nonthaburi, 11140
							</p>    
						</div>
						<ul class="bx-social wow fadeIn">
							<li>
								<a href="https://www.linkedin.com/in/piyanuch/" class="row-social" target="_blank">
									<i class="icon-in"></i>
								</a>	
							</li>
							<li>
								<a href="https://www.youtube.com/user/NiNewZaZa" class="row-social" target="_blank">
									<i class="icon-yt"></i>
								</a>	
							</li>
							<li>
								<a href="https://www.facebook.com/piyanuch.ninew" class="row-social" target="_blank">
									<i class="icon-fb"></i>
								</a>	
							</li>								
						</ul>
						<ul class="row-contact">
							<li>
								<a href="tel:+66860315303" class="wow fadeIn">
									<i class="icon-tel"></i>
									<p>+66639854224</p>
								</a>		
							</li>
							<li>
								<a href="mailto:ninew.sopha@gmail.com" class="wow fadeIn">
									<i class="icon-mail"></i>
									<p>piyanuch.natakuatung@gmail.com</p>
								</a>		
							</li>
						</ul>						
							
					</div>    
			</div>
		</section>
	</main>
	<?php include "inc/footer.php";?>
	<script src="js/slick.min.js"></script>
	<script type="text/javascript">
		function profile() {
			var active = $('.profile .item.active');

			if ( active.length == 0 ) active = $('.profile .item:last');

			var next =  active.next().length ? active.next()
					: $('.profile .item:first');


			active.addClass('last-active');

			next.css({opacity: 0.0})
				.addClass('active')
				.animate({opacity: 1.0}, 1000, function() {
					active.removeClass('active last-active');
			});
		}   
		$(document).ready(function() {		
			setInterval( "profile()", 4000 );
			$.getJSON( "json/portfolio.json", function( data ) {
				$.each( data, function( type, items ){
					$.each( items, function(i, item ) {
						$(".slide-portfolio").append(
							'<div class="item '+ type +'">'+
								'<a href="'+ item.link +'" target="_new">'+
									'<div class="box-img">'+
										'<img src="img/portfolio/'+ item.img +'.jpg">'+
										'<p class="type">'+ type +'</p>'+
									'</div>'+
									'<div class="box-detail">'+
										'<div class="box-center">'+
											'<h2>'+ item.name +'</h2>'+
											'<h3>'+ item.type +'</h3>'+
											'<span>'+ item.company +'</span>'+
											// '<b>'+ item.year +'</b>'+
											'<p>'+ item.detail +'</p>'+
										'</div>'+
									'</div>'+
								'</a>'+
							'</div>'
						);
					});
				});
			})
			.done(function(res){
				$('.slide-portfolio').slick({
				  infinite: true,
				  slidesToShow: 3,
				  slidesToScroll: 3,
					infinite: true,
					centerPadding: '0',
				  responsive: [
				    {
				      breakpoint: 1024,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2,
				      }
				    },
				    {
				      breakpoint: 600,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				  ]
				});	
			});
		});
	</script>
</body>
</html>