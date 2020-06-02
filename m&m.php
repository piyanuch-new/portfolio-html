<?php $activePage = "portfolio"; ?>
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
	<script type="text/javascript">
		$(document).ready(function() {
		});
	</script>
</head>
<body class="page-work">
<?php include "inc/header.php";?>
<main>
	<section class="portfolio">
		<div class="container">
			<h1>Porfolio</h1>
			<h2>Facebook</h2>
			<b>
				M&M Thailand Page
			</b>
			<div class="wrap-img fb">
				<div class="row">
					<div class="col-12">
						<img src="portfolio/m&m/songkran-mockup.jpg">
					</div>
					<div class="col-4">
						<img src="portfolio/m&m/aw_songkran-2.jpg">
					</div>
					<div class="col-4">
						<img src="portfolio/m&m/aw_songkran-3.jpg">
					</div>
					<div class="col-4">
						<img src="portfolio/m&m/travel-santorini.jpg">
					</div>
					<div class="col-6">
						<img src="portfolio/m&m/aw_photo-0.jpg">
					</div>
					<div class="col-6">	
						<img src="portfolio/m&m/aw_photo-1.jpg">
					</div>
					<div class="col-6">	
						<img src="portfolio/m&m/aw_photo-2.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include "inc/footer.php";?>
</body>
</html>