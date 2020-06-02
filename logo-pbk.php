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
			<h2>Logo</h2>
			<b>
				Logo PBK Autoparts
			</b>
			<div class="wrap-img">
				<div class="row">
					<div class="col-12">
						<p>
							<img src="portfolio/logo/pbk-final.jpg">
						</p>					
						<p>Final Design</p><br>
						<p>
							<img src="portfolio/logo/pbk.jpg">
						</p>
					</div>
				</div>
				<a href="portfolio.php" class="btn">back to all</a>
			</div>
		</div>
	</section>
</main>
<?php include "inc/footer.php";?>
</body>
</html>