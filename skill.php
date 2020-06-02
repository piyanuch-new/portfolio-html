<?php $activePage = "skill"; ?>
<!DOCTYPE html>
<!--[if lt IE 9]> <html lang="th" class="ie8"> <![endif]-->
<!--[!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<?php
	include "inc/meta.php";
	?>
	<link href="css/skill.css" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function() {
			$(".star-skill").each(function(){
					var data = $(this).attr("data-star");
					if (data == 1) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 1.5) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-half"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 2) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 2.5) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-half"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 3) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-blank"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 3.5) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-half"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 4) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-blank"></i>');
					}
					if (data == 4.5) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-half"></i>');
					}
					if (data == 5) {
						$(this).html('<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>'+
						'<i class="icon-heart"></i>');
					}
			});
		});
	</script>
</head>
<body>
<?php include "inc/header.php";?>
<main>
	<section id="skill" class="skill">
		<div class="wow pulse" data-wow-delay="0.2s">
			<div class="circle">
					<i class="icon-skill"></i>
			</div>
			<h1>Skill</h1>
		</div>
		<?php  
			$url = 'json/skill.json';
			$data = file_get_contents($url);
			$json = json_decode($data);
		?> 
		<div class="dt-skill wow fadeIn" data-wow-delay="0.3s">
				<h2><?php echo $json[0]->type; ?></h2>
				<div class="txt-dtskill">
					I'm adept in Adobe After Effects/Premiere and video production and I'm excited to use it.
					It's a skill I don't often get asked to use by clients, but I'm proud of this skill.
				</div>
				<div class="center-skill">
					<?php foreach ($json[0]->detail as $value) : ?>
						<div class="row-skill">
							<div class="name-skill"><?php echo $value->name; ?></div>
							<div class="star-skill" data-star="<?php echo $value->skill; ?>"></div>
						</div>
					<?php endforeach; ?>
				</div>
		</div>
		<div class="dt-skill wow fadeIn" data-wow-delay="0.5s">
			<h2><?php echo $json[1]->type; ?></h2>
			<div class="txt-dtskill">
				I love drawing, I like to draw cartoon and every thing.
				I can design many advertising media.
				I'm excited every time I use video skills.
			</div>
			<div class="center-skill">
				<?php foreach ($json[1]->detail as $value) : ?>
					<div class="row-skill">
						<div class="name-skill"><?php echo $value->name; ?></div>
						<div class="star-skill" data-star="<?php echo $value->skill; ?>"></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="dt-skill wow fadeIn" data-wow-delay="0.5s">
			<h2><?php echo $json[2]->type; ?></h2>
			<div class="txt-dtskill">
				I can use the programs in the list below.
			</div>
			<div class="center-skill">
				<?php foreach ($json[2]->detail as $value) : ?>
					<div class="row-skill">
						<div class="name-skill"><?php echo $value->name; ?></div>
						<div class="star-skill" data-star="<?php echo $value->skill; ?>"></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
<?php include "inc/footer.php";?>
</body>
</html>