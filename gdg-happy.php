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
			<h2>GDG SWF Banner</h2>
			<div class="wrap-banner">
				<b>
					Happy Tourist Sim
				</b>
				<div class="row">
					<div class="col-4">
						<div class="banner">
							<object width="300" height="250" data="work/gdg/300x250.swf"></object>
						</div>
					</div>
					<div class="col-8">
						<div class="banner">
							<object width="728" height="90" data="work/gdg/728x90.swf"></object>
						</div>
						<div class="banner">
							<object width="468" height="60" data="work/gdg/468x60.swf"></object>
						</div>
					</div>
				</div>
				<b>
					Happy Smart Phone
				</b>
				<div class="row">
					<div class="col-4">
						<div class="banner">
							<object width="160" height="600" data="work/gdg/GDN_160x600.swf"></object>
						</div>
					</div>
					<div class="col-8">
						<div class="col-6">
							<div class="banner">
								<object width="300" height="250" data="work/gdg/GDN_300x250.swf"></object>
							</div>					
						</div>
						<div class="col-6">
							<div class="banner">
								<object width="336" height="280" data="work/gdg/GDN_336x280.swf"></object>
							</div>					
						</div>		
					</div>
					<div class="col-8">	
						<div class="banner">
							<object width="728" height="90" data="work/gdg/GDN_728x90.swf"></object>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
</main>
<?php include "inc/footer.php";?>
</body>
</html>