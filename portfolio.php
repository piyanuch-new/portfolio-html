<?php $activePage = "porfolio"; ?>
<!DOCTYPE html>
<!--[if lt IE 9]> <html lang="th" class="ie8"> <![endif]-->
<!--[!(IE)]><!-->
<html lang="th">
<!--<![endif]-->

<head>
	<?php
	include "inc/meta.php";
	?>
	<link href="css/work.css" rel="stylesheet">
</head>
<body class="page-work">
	<?php include "inc/header.php";?>
	<main>
		<section class="portfolio">
			<div class="container">
				<div class="wow pulse">
					<div class="circle">
						<i class="icon-school"></i>
					</div>
					<h1>Porfolio</h1>
				</div>
				<ul class="nav" role="tablist"></ul>
				<div class="tab-content"></div>
			</div>
		</section>
	</main>
	<?php include "inc/footer.php";?>
	<script src="js/jquery.paginate.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.getJSON( "json/portfolio.json", function( data ) {
				$.each(data, function(type, items){
					$(".portfolio .nav").append(
						'<li>'+
							'<a data-toggle="tab" href="#'+ type +'" aria-selected="false" role="tab" aria-controls="'+ type +'">'+
								type +
							'</a>'+
						'</li>'
					);						
					$(".portfolio .tab-content").append(
						'<div id="'+ type +'" class="tab-pane" role="tabpanel" aria-labelledby="'+ type +'-tab">'+
							'<ul class="list-port port-'+ type +'"></ul>'+
							'<nav class="box-pagination">'+  
							  '<ul class="port-'+ type +'-pagination pagination">'+
									'<li><a class="port-'+ type +'-previous prev" href="#" aria-label="Previous">'+
										'<span aria-hidden="true"><i class="icon-prev"></i></span>'+
									'</a></li>'+
									'<li><span class="current" data-page="1">1</span></li>'+
									'<li><a class="port-'+ type +'-next next" href="#" aria-label="Next">'+
										'<span aria-hidden="true"><i class="icon-next"></i></span>'+
									'</a></li>'+
									'<li><p>From <span>16</span></p></li>'+
							  '</ul>'+
							'</nav>'+
						'</div>'
					);	
					var list = [];		
					$.each(items, function(i, item){
						list.push(
							'<li class="item wow fadeIn">'+
								'<a href="'+ item.link +'" target="_new">'+
									'<div class="box-img">'+
										'<img src="img/portfolio/'+ item.img +'.jpg">'+
									'</div>'+
									'<h2>'+ item.name +'</h2>'+
									'<h3>'+ item.type +'</h3>'+
									'<span>'+ item.company +'</span>'+
									// '<b>'+ item.year +'</b>'+
									'<p>'+ item.detail +'</p>'+
								'</a>'+
							'</li>'
						);
					});
					$(".port-"+type).append(list.join(''));					
					$(".port-"+type).paginate({itemsPerPage: 6});				
				});
			})
			.done(function(res){
				$(".portfolio .tab-content .tab-pane:first-child").addClass("active");
				$(".portfolio .nav li:first-child a").addClass("active");
				$.each(res, function(type, items){
					var total = items.length,
							page 	= Math.ceil(total/6);
					console.log(type, page);
					if(page == 1){
						$("#"+ type +" .box-pagination").hide();
					}
					else{
						$("#"+ type +" .box-pagination p span").html(page);
					}
				});			
				$(".box-pagination").on('click', '.prev', function(e){
					var wrap 		= $(this).closest('ul'),
							boxCurrent = wrap.find(".current"),
							current = parseInt(boxCurrent.attr('data-page'));
					boxCurrent.attr('data-page',current-1).html(current-1);
				}).on('click', '.next', function(e){
					var wrap 		= $(this).closest('ul'),
							boxCurrent = wrap.find(".current"),
							current = parseInt(boxCurrent.attr('data-page'));
					boxCurrent.attr('data-page',current+1).html(current+1);
				});
			});
		});
	</script>
</body>
</html>
