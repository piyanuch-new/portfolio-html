<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/download-brochure.css">
    <style>

    </style>


</head>

<body class="header-small body-top">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<div class="download-brochure-wrapper">
	<div class="header-banner">
	    <div class="header-banner__text">
	        <h1>
	           ดาวน์โหลดโบรชัวร์
	        </h1>

	    </div>
	</div>
	
	<div class="container">
	    
		<section class="download-brochure">
			<div class="media">
				<div class="media-left">
					<div class="download-brochure__header">
						<h1 class="h3">รถอเนกประสงค์</h1>
						<p>
							ใหม่! อีซูซุมิว-เอ็กซ์ <br>
							เอกลักษณ์แห่งเอกสิทธิ์
						</p>
					</div>
				</div>
				
				<div class="media-body">
					<div class="download-brochure__list">
						<ul class="list-unstyled">
							<li class="">
								<a class="download-brochure-item" href="assets/pdf/brochure/CATALOG_MU-X-2017.pdf" target="_blank">
									<span class="download-brochure-item__image">
										<img src="assets/images/download-brochure/mu-x.png" alt="">
									
									</span>

									<span class="download-brochure-item__link">
										<span>ดาวน์โหลด</span>
									</span>	

									<span class="download-brochure-item__text">อีซูซุมิว-เอ็กซ์</span>
													
								</a>
							</li>


						</ul>
					</div>
				</div>
			</div>
		</section>
	    
		<section class="download-brochure">
			<div class="media">
				<div class="media-left">
					<div class="download-brochure__header">
						<h1 class="h3">รถปิกอัพ</h1>
						<p>
							ใหม่! อีซูซุดีแมคซ์ บลูเพาเวอร์ <br>
							ขีดสุดแห่งนวัตกรรมเปลี่ยนโลก
						</p>
					</div>
				</div>
				
				<div class="media-body">
					<div class="download-brochure__list">
						<ul class="list-unstyled">
							<?php 
								$brochure = array(
									array(
										'link' => 'assets/pdf/brochure/brochure-x-series-2018.pdf',
										'image' => 'assets/images/download-brochure/x-series.png',
										'name' => 'อีซูซุดีแมคซ์ เอ็กซ์-ซีรี่ส์',
									),
									array(
										'link' => 'assets/pdf/brochure/CATALOG_V-CROSS-2017.pdf',
										'image' => 'assets/images/download-brochure/v-cross.png',
										'name' => 'อีซูซุดีแมคซ์ วี-ครอส',
									),
									array(
										'link' => 'assets/pdf/brochure/CATALOG_4_DOORS-2017.pdf',
										'image' => 'assets/images/download-brochure/4-doors.png',
										'name' => 'อีซูซุดีแมคซ์ 4 ประตู',
									),
									array(
										'link' => 'assets/pdf/brochure/CATALOG_2_DOORS-2017.pdf',
										'image' => 'assets/images/download-brochure/2-doors.png',
										'name' => 'อีซูซุดีแมคซ์ 2 ประตู',
									),
									array(
										'link' => 'assets/pdf/brochure/CATALOG_SPARK-2017.pdf',
										'image' => 'assets/images/download-brochure/spark.png',
										'name' => 'อีซูซุดีแมคซ์ สปาร์ค',
									),
								);

								foreach($brochure as $k => $v){
							?>
							<li class="">
								
								<a class="download-brochure-item" href="<?php echo $brochure[$k]['link']; ?>" target="_blank">
									<span class="download-brochure-item__image">
										<img src="<?php echo $brochure[$k]['image']; ?>" alt="">

										<span class="download-brochure-item__link">
											<span>ดาวน์โหลด</span>
										</span>	
									</span>
									<span class="download-brochure-item__text"><?php echo $brochure[$k]['name']; ?></span>
													
								</a>
							</li>
							<?php } ?>


						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="download-brochure">
			<div class="media">
				<div class="media-left">
					<div class="download-brochure__header">
						<h1 class="h3">รถบรรทุก</h1>
						<p>
							เจ้าแห่งรถบรรทุก <br>
อีซูซุ คิงออฟทรัคส์
						</p>
					</div>
				</div>
				
				<div class="media-body">
					<div class="download-brochure__list">
						<ul class="list-unstyled">
							<?php 
								$brochure = array(
									array(
										'link' => 'assets/pdf/brochure/gxz-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/gxz.png',
										'name' => 'รุ่น GXZ 360/345',
									),
									array(
										'link' => 'assets/pdf/brochure/ftr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/ftr.png',
										'name' => 'รุ่น FTR 240',
									),
									array(
										'link' => 'assets/pdf/brochure/fyh-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/fyh.png',
										'name' => 'รุ่น FYH 360',
									),
									array(
										'link' => 'assets/pdf/brochure/fxz-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/fxz.png',
										'name' => 'รุ่น FXZ 360/345',
									),
									array(
										'link' => 'assets/pdf/brochure/fvz-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/fvz.png',
										'name' => 'รุ่น FVZ 300/240',
									),
									array(
										'link' => 'assets/pdf/brochure/fvm-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/fvm.png',
										'name' => 'รุ่น FVM 300/240',
									),
									array(
										'link' => 'assets/pdf/brochure/fvm-240-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/fvm-240.png',
										'name' => 'รุ่น FVM 240',
									),
									array(
										'link' => 'assets/pdf/brochure/ftr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/ftr-240.png',
										'name' => 'รุ่น FTR 240',
									),
									array(
										'link' => 'assets/pdf/brochure/frr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/frr.png',
										'name' => 'รุ่น FRR 210/190',
									),
									array(
										'link' => 'assets/pdf/brochure/nqr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/nqr.png',
										'name' => 'รุ่น NQR 175',
									),
									array(
										'link' => 'assets/pdf/brochure/npr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/npr.png',
										'name' => 'รุ่น NPR 150',
									),
									array(
										'link' => 'assets/pdf/brochure/nmr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/nmr.png',
										'name' => 'รุ่น NMR 130',
									),
									array(
										'link' => 'assets/pdf/brochure/nlr-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/nlr.png',
										'name' => 'รุ่น NLR 130',
									),
									array(
										'link' => 'assets/pdf/brochure/fxz-mix-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/fxz-mixer.png',
										'name' => 'รุ่น FXZ Mixer 360',
									),
									array(
										'link' => 'assets/pdf/brochure/frr-mixer-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/frr-mixer.png',
										'name' => 'รุ่น FRR Mixer 190',
									),
									array(
										'link' => 'assets/pdf/brochure/frr-mixer-spec-sheet.pdf',
										'image' => 'assets/images/download-brochure/nmr-mixer.png',
										'name' => 'รุ่น NMR Mixer 130',
									),
								);

								foreach($brochure as $k => $v){
							?>
							<li class="">
								
								<a class="download-brochure-item" href="$brochure[$k]['link']" target="_blank">
									<span class="download-brochure-item__image">
										<img src="<?php echo $brochure[$k]['image']; ?>" alt="">

										<span class="download-brochure-item__link">
											<span>ดาวน์โหลด</span>
										</span>	
									</span>
									<span class="download-brochure-item__text"><?php echo $brochure[$k]['name']; ?></span>
													
								</a>
							</li>
							<?php } ?>


						</ul>
					</div>
				</div>
			</div>
		</section>
	
	</div>
</div>

<div class="container">

    <nav class="web-breadcrumb">
        <h1 class="hide">breadcrumb</h1>
        <ol class="list-unstyled">
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="#">ติดต่ออีซูซ</a></li>
            <li><a href="#">ติดต่อตรีเพชรอีซูซุ</a></li>
        </ol>
    </nav>
</div>


<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script src="<?php echo $root_path; ?>/assets/js/wow.min.js"></script>
<script>

</script>

</body>

</html>