<header id="mainHeader" class="fixed-header  fixed-header__main-header">

    <div class="main-header">

        <!-- Logo -->
        <div class="main-logo">
            <a href="<?php echo $root_path; ?>/index.php"><img class="img-responsive"
                                                               src="<?php echo $root_path; ?>/assets/images/header/logo.png"
                                                               alt="logo isuzu"></a>
            <h1 class="hide">isuzu</h1>
        </div>

        <!-- Button menu mobile -->
        <div id="buttonMobileMenu" class="button-mobile-menu">
            <button>เมนู</button>
        </div>

        <!-- Button search -->
        <div class="search-button">
            <button id="buttonSearch" type="button">
                <span class="hide">search</span>
            </button>

        </div>

        <!-- Navigation -->
        <div id="mainNavigation" class="navigation-area-wrapper">
            <!-- Button close -->
            <div id="buttonMobileMenuClose" class="button-mobile-menu-close">
                <button><span class="hide">ปิด</span></button>
            </div>

            <div class="navigation-area">

                <div class="social-and-language / clearfix">
                    <!-- Language -->
                    <div class="language">
                        <div class="language__en">
                            <a href="<?php echo $root_path; ?>/#"><span
                                        class="hide">EN</span></a>
                        </div>

                        <!--show this when website language is Thai-->
                        <div class="language__th" style="display: none;">
                            <a href="<?php echo $root_path; ?>/#"><span
                                        class="hide">EN</span></a>
                        </div>

                        <!--language list-->
                        <div class="menu-list">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?php echo $root_path; ?>/#">ภาษาไทย</a>
                                </li>
                                <li>
                                    <a href="<?php echo $root_path; ?>/#">English</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social -->
                    <aside class="social">
                        <h1 class="hide">social fanpage</h1>
                        <ul class="list-unstyled">
                            <li>
                                <div class="link-fb">
                                    <img src="<?php echo $root_path; ?>/assets/images/footer-social-fb.png" alt="icon facebook">
                                    <span class="hide">facebook isuzu official</span>
                                    <div class="menu-list">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="https://www.facebook.com/ALLNEWISUZUDMAX/" target="_blank">
                                                    <img src="<?php echo $root_path; ?>/assets/images/header/logo-dmax.png">
                                                    Isuzu D-max
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/isuzumuxthailand/" target="_blank">
                                                    <img src="<?php echo $root_path; ?>/assets/images/header/logo-mux.png">
                                                    Isuzu MU-X
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/IsuzuTrucksThailandOfficial/" target="_blank">
                                                    <img src="<?php echo $root_path; ?>/assets/images/header/logo-truck.png">
                                                    Isuzu Trucks
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>    
                            </li>                            
                            <!-- <li>
                                <a href="#">
                                    <img src="<?php echo $root_path; ?>/assets/images/footer-social-ig.png" alt="icon instagram">
                                    <span class="hide">instagram isuzu official</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="#">
                                    <img src="<?php echo $root_path; ?>/assets/images/footer-social-line.png" alt="icon line">
                                    <span class="hide">line isuzu official</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $root_path; ?>/assets/images/footer-social-yt.png" alt="icon youtube">
                                    <span class="hide">youtube isuzu official</span>
                                </a>
                            </li>
                        </ul>
                    </aside>

                </div>

                <!-- Main navigation -->
                <nav class="navigation">
                    <h1 class="hide">menu</h1>

                    <ul class="list-unstyled">

                        <!--Menu Product-->
                        <li class="jsNavigationItem">
                            <a href="<?php echo $root_path; ?>/#">รุ่นรถอีซูซุ</a>

                            <!-- Sub menu -->
                            <div class="sub-navigation / jsNavigationSubItem">
                                <ul class="list-unstyled">

                                    <li class="sub-navigation__item">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/icn-1.png"
                                                 alt=""> รถปิกอัพ
                                        </a>
                                        <ul class="sub-navigation-content / sub-navigation-product">
											<?php

											$image = array(
												'x-series.png',
												'v-cross.png',
												'4-doors.png',
												'2-doors.png',
												'spark.png',
											);

											$menu = array(
												'เอ็กซ์-ซีรี่ส์',
												'วี-ครอส',
												'ปิกอัพ 4 ประตู',
												'ปิกอัพ 2 ประตู',
												'สปาร์ค',


											);

											$link = array(
												'product-detail/x-series/home.php',
												'product-detail/v-cross/home.php',

												'product-detail/4door/home.php',
												'product-detail/2door/home.php',
												'product-detail/spark/home.php',


											);

											foreach ( $image as $k => $v ) {

												?>
                                                <li class="sub-navigation-product__item">
                                                    <a href="<?php echo $root_path; ?>/<?php echo $link[ $k ]; ?>">
                                                        <div class="sub-navigation-product__image">
                                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/<?php echo $image[ $k ]; ?>"
                                                                 alt="">
                                                        </div>

														<?php echo $menu[ $k ]; ?>
                                                    </a>

                                                </li>
											<?php } ?>

                                        </ul>
                                    </li>
                                    <li class="sub-navigation__item">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/icn-2.png"
                                                 alt=""> รถอเนกประสงค์
                                        </a>
                                        <ul class="sub-navigation-content / sub-navigation-product">
											<?php

											$image = array(
												'mu-x.png',
												'mu-x-iconic.png',
											);

											$menu = array(
												'อีซูซุมิว-เอ็กซ์',
												'อีซูซุมิว-เอ็กซ์ ดิ ไอคอนิค',
											);

											$link = array(
												'product-detail/mu-x/home.php',
												'product-detail/mu-x-iconic/home.php',


											);

											foreach ( $image as $k => $v ) {

												?>
                                                <li class="sub-navigation-product__item">
                                                    <a href="<?php echo $root_path; ?>/<?php echo $link[ $k ]; ?>">
                                                        <div class="sub-navigation-product__image">
                                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/<?php echo $image[ $k ]; ?>"
                                                                 alt="">
                                                        </div>

														<?php echo $menu[ $k ]; ?>
                                                    </a>

                                                </li>
											<?php } ?>

                                        </ul>
                                    </li>
                                    <li class="sub-navigation__item">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/icn-3.png"
                                                 alt=""> รถบรรทุก
                                        </a>

                                        <ul class="sub-navigation-content  sub-nav-truck">
											<?php

											$car = array(
												array(

													'link'  => '#',
													'image' => 'gxz.png',
													'text'  => 'รถหัวลาก',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-1-gxz-360.png',
															'text'  => 'รุ่น GXZ 360/345'
														),

														array(
															'link'  => '#',
															'image' => 'menu-1-ftr-240.png',
															'text'  => 'รุ่น FTR 240'
														),
													)
												),
												array(

													'link'  => '#',
													'image' => 'fxz.png',
													'text'  => 'รถ 10 ล้อ 2 เพลา',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-2-fyh-360.png',
															'text'  => 'รุ่น FYH 360'
														),

														array(
															'link'  => '#',
															'image' => 'menu-2-fxz-360.png',
															'text'  => 'รุ่น FXZ 360/345'
														),
														array(
															'link'  => '#',
															'image' => 'menu-2-fvz-300.png',
															'text'  => 'รุ่น FVZ 300/240'
														),
													)
												),
												array(

													'link'  => '#',
													'image' => 'fvm.png',
													'text'  => 'รถ 10 ล้อ เพลาเดียว',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-3-fvm-300.png',
															'text'  => 'รุ่น FVM 300/240'
														),

														array(
															'link'  => '#',
															'image' => 'menu-3-fvm-240.png',
															'text'  => 'รุ่น FVM 240'
														),
													)
												),
												array(

													'link'  => '#',
													'image' => 'ftr.png',
													'text'  => 'รถ 6 ล้อ ขนาดใหญ่',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-4-ftr-240.png',
															'text'  => 'รุ่น FTR 240'
														),
													)
												),
												array(

													'link'  => '#',
													'image' => 'frr.png',
													'text'  => 'รถ 6 ล้อ ขนาดกลาง',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-5-frr-210.png',
															'text'  => 'รุ่น FRR 210/190'
														),
														array(
															'link'  => '#',
															'image' => 'menu-5-nqr-175.png',
															'text'  => 'รุ่น NQR 175'
														),
														array(
															'link'  => '#',
															'image' => 'menu-5-npr-150.png',
															'text'  => 'รุ่น NPR 150'
														),
														array(
															'link'  => '#',
															'image' => 'menu-5-nmr-130.png',
															'text'  => 'รุ่น NMR 130'
														),

													)
												),
												array(

													'link'  => '#',
													'image' => 'nlr.png',
													'text'  => 'รถบรรทุก 4 ล้อ',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-6-nlr-130.png',
															'text'  => 'รุ่น NLR 130'
														),

													)
												),
												array(

													'link'  => '#',
													'image' => 'fxz-mixer.png',
													'text'  => 'รถผสมปูน',
													'sub'   => array(

														array(
															'link'  => '#',
															'image' => 'menu-7-fxz-mixer.png',
															'text'  => 'รุ่น FXZ Mixer 360'
														),
														array(
															'link'  => '#',
															'image' => 'menu-7-frr-mixer.png',
															'text'  => 'รุ่น FRR Mixer 190'
														),
														array(
															'link'  => '#',
															'image' => 'menu-7-nmr-mixer.png',
															'text'  => 'รุ่น NMR Mixer 130'
														),

													)
												)

											);


											foreach ( $car as $k => $v ) {

												?>
                                                <li>
                                                    <a class="sub-nav-truck__header" href="<?php echo $car[ $k ]['link']; ?>">
														<?php echo $car[ $k ]['text']; ?>
                                                        <div>
                                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/<?php echo $car[ $k ]['image']; ?>"
                                                                 alt="">
                                                        </div>

                                                    </a>

                                                    <ul class="list-unstyled / sub-nav-truck__sub">
														<?php foreach ( $car[ $k ]['sub'] as $k2 => $v2 ) { ?>

                                                            <li>
                                                                <a href="<?php echo $car[ $k ]['sub'][ $k2 ]['link']; ?>">
                                                                    <div>
                                                                        <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/product/<?php echo $car[ $k ]['sub'][ $k2 ]['image']; ?>"
                                                                             alt="">
                                                                    </div>

																	<?php echo $car[ $k ]['sub'][ $k2 ]['text']; ?>
                                                                </a>

                                                            </li>
														<?php } ?>
                                                    </ul>

                                                </li>
											<?php } ?>

                                        </ul>

                                    </li>

                                </ul>
                            </div>

                        </li>

                        <!--Menu Service-->
                        <li class="jsNavigationItem">
                            <a href="<?php echo $root_path; ?>/#">บริการ</a>
                            <!-- Sub menu -->
                            <div class="sub-navigation  sub-navigation_center / jsNavigationSubItem">
                                <ul class="list-unstyled">

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/service/after-sale.png"
                                                 alt="">
                                            บริการหลังการขาย
                                        </a>
                                        <div class="sub-navigation-content">
                                            <ul class="sub-navigation-content__content  -item-2  -block-1">
                                                <li>
                                                    <a href="<?php echo $root_path; ?>/#">
                                                        • รถปิกอัพและรถอเนกประสงค์
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $root_path; ?>/#">
                                                        • รถบรรทุก
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/service/leasing.png"
                                                 alt="">
                                            อีซูซุลิซซิ่ง
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-2  -block-2">
                                                บริการด้านสินเชื่อรถยนต์ งานทะเบียน และประกันภัย
                                                มั่นใจอีซูซุ...เลือกอีซูซุลิสซิ่ง
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <!--Menu Special offer -->
                        <li class="jsNavigationItem">
                            <a href="<?php echo $root_path; ?>/#">ข้อเสนอพิเศษ</a>
                            <!-- Sub menu -->
                            <div class="sub-navigation  sub-navigation_center / jsNavigationSubItem">
                                <ul class="list-unstyled">

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header"
                                           href="<?php echo $root_path; ?>/special-offer-list.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/special-offer/campaign.png"
                                                 alt="">
                                            แคมเพจ์น
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-3  -block-1">
                                                <h2 class="font-size-h6">รถปิกอัพและรถอเนกประสงค์</h2>
                                                <ul class="">
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/special-offer-list.php">
                                                            • ซื้อรถ

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/special-offer-list.php">
                                                            • หลังการขาย
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/special-offer/vip-club.png"
                                                 alt="">
                                            อีซูซุมิว-เอ็กซ์ วี.ไอ.พี.คลับ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-3  -block-2">
                                                เอกสิทธิ์พิเศษสำหรับท่านเจ้าของรถอีซูซุมิว-เอ็กซ์
                                            </div>

                                        </div>
                                    </li>
                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/special-offer/excellency.png"
                                                 alt="">
                                            อีซูซุเอ็กเซลเลนซี่คลับ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-3  -block-3">
                                                เอกสิทธิ์เหนือระดับสำหรับคนพิเศษของอีซูซุ
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </li class="jsNavigationItem">

                        <!--Menu Update -->
                        <li class="jsNavigationItem">
                            <a href="<?php echo $root_path; ?>/#">อีซูซุอัปเดต</a>
                            <!-- Sub menu -->
                            <div class="sub-navigation sub-navigation--4 sub-navigation_center / jsNavigationSubItem">
                                <ul class="list-unstyled">

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/update-news-list.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/update/news.png"
                                                 alt="">
                                            ข่าวสารและกิจกรรม
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-4  -block-1">
                                                <ul class="">
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-news-list.php">
                                                            • ข่าวประชาสัมพันธ์
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-news-list.php">
                                                            • กิจกรรมเพื่อสังคม
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-news-list.php">
                                                            • เปิดใจผู้ใช้อีซูซุ
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/update-knowledge-list.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/update/tips.png"
                                                 alt="">
                                            เรื่องน่ารู้กับอีซูซุ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-4  -block-2">
                                                <ul class="">
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-knowledge-list.php">
                                                            • รถปิกอัพและรถอเนกประสงค์

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-knowledge-list.php">
                                                            • รถบรรทุก
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/update-vdo-list.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/update/vdo.png"
                                                 alt="">
                                            วีดีโอ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-4  -block-3">
                                                ภาพยนตร์โฆษณา วีดีโอข่าวประชาสัมพันธ์ <br>
                                                นวัตกรรมและเทคโนโลยี
                                            </div>

                                        </div>
                                    </li>

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/update-e-magazine-list.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/update/e-magazine.png"
                                                 alt="">
                                            แมกกาซีนออนไลน์
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-4  -block-4">
                                                <ul class="">
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-e-magazine-list.php">
                                                            • ตรีเพชร แมกกาซีน
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-e-magazine-list.php">
                                                            • อีซูซุทรัคทูเดย์
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/update-e-magazine-list.php">
                                                            • อีซูซุมิว-เอ็กซ์ วี.ไอ.พี. คลับ
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <!--Menu About -->
                        <li class="jsNavigationItem">
                            <a href="<?php echo $root_path; ?>/#">เกี่ยวกับอีซูซุ</a>
                            <!-- Sub menu -->
                            <div class="sub-navigation  sub-navigation_center / jsNavigationSubItem">
                                <ul class="list-unstyled">

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/about-history.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/about/history.png"
                                                 alt="">
                                            ประวัติอีซูซุ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-2  -block-1">
                                                <a href="<?php echo $root_path; ?>/about-history.php">
                                                    ประวัติและวิสัยทัศน์อีซูซุในประเทศไทย
                                                </a>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header"
                                           href="<?php echo $root_path; ?>/about-innovative.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/about/innovation-technology.png"
                                                 alt="">
                                            นวัตกรรมและเทคโนโลยี
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-2  -block-2">
                                                <ul class="">
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/about-innovative.php">
                                                            • เครื่องยนต์ 1.9 ดีดีไอ
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/about-innovative.php">
                                                            • อีซูซุอินไซน์
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/about-innovative.php">
                                                            • อีซูซุเทเลเทค
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/about-innovative.php">
                                                            • ระบบควบคุมการทรงตัวอัจฉริยะ

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root_path; ?>/about-innovative.php">
                                                            • รถบรรทุกเกียร์ธรรมดา <br>พร้อมระบบเปลี่ยนเกียร์อัตโนมัติ
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <!--Menu contact -->
                        <li class="jsNavigationItem">
                            <a href="<?php echo $root_path; ?>/#">ติดต่ออีซูซุ</a>
                            <!-- Sub menu -->
                            <div class="sub-navigation  sub-navigation_center / jsNavigationSubItem">
                                <ul class="list-unstyled">

                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header"
                                           href="<?php echo $root_path; ?>/contact.php">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/contact/contact.png"
                                                 alt="">
                                            ติดต่อตรีเพชรอีซูซุ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-2  -block-1">
                                                <a href="<?php echo $root_path; ?>/contact.php">ติดต่อตรีเพชรอีซูซุ</a>
                                            </div>

                                        </div>
                                    </li>

                                    <!--<li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php /*echo $root_path; */ ?>/#">
                                            <img src="<?php /*echo $root_path; */ ?>/assets/images/header/sub-menu/contact/job.png"
                                                 alt="">
                                            สมัครงาน
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-3  -block-2">
                                                สมัครงาน
                                            </div>

                                        </div>
                                    </li>-->
                                    <li class="sub-navigation__item  -not-product">
                                        <a class="sub-navigation__item__header" href="<?php echo $root_path; ?>/#">
                                            <img src="<?php echo $root_path; ?>/assets/images/header/sub-menu/contact/dealer.png"
                                                 alt="">
                                            ผู้จำหน่ายอีซูซุ
                                        </a>
                                        <div class="sub-navigation-content">
                                            <div class="sub-navigation-content__content  -item-2  -block-2">
                                                <a href="<?php echo $root_path; ?>/dealer-map.php">
                                                    ผู้จำหน่ายอีซูซุ
                                                </a>
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

						<li class="hidden-lg">
                            <a href="<?php echo $root_path; ?>/compare.php">เปรียบเทียบรุ่นรถ</a>
                        </li>
                        <li class="hidden-lg">
                            <a href="<?php echo $root_path; ?>/calculator.php">คำนวณค่างวด</a>
                        </li>
                        <li class="hidden-lg">
                            <a
                                    href="<?php echo $root_path; ?>/#">ดาวน์โหลดโบรชัวร์
                            </a>
                        </li>
                        <li class="hidden-lg">
                            <a href="<?php echo $root_path; ?>/test-drive.php">ทดลองขับ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Search -->
        <div id="searchArea" class="search-area-wrapper">
            <div id="buttonSearchClose" class="button-mobile-menu-close">
                <button><span class="hide">ปิด</span></button>
            </div>

            <nav class="search-area">
                <h1 class="hide">search</h1>

                <!-- Search form -->
                <form class="main-search" action="#">
                    <label>
                        <input type="text" placeholder="พิมพ์คำที่ต้องการค้นหา">
                    </label>
                    <button type="submit">
                        <span class="hide">search</span>
                    </button>
                </form>

                <div class="navigation-other">
                    <p>หรือเข้าจากลิงค์ทางลัดของเรา</p>
                    <ul>
                        <li class="navigation-other__compare visible-lg-block">
                            <a href="<?php echo $root_path; ?>/compare.php">เปรียบเทียบรุ่นรถ</a>
                        </li>
                        <li class="navigation-other__cal visible-lg-block">
                            <a href="<?php echo $root_path; ?>/calculator.php">คำนวณค่างวด</a>
                        </li>
                        <li class="navigation-other__download visible-lg-block">
                            <a
                                    href="<?php echo $root_path; ?>/#">ดาวน์โหลดโบรชัวร์
                            </a>
                        </li>
                        <li class="navigation-other__test-drive visible-lg-block">
                            <a href="<?php echo $root_path; ?>/test-drive.php">ทดลองขับ</a>
                        </li>
                        <li class="navigation-other__dealer">
                            <a href="<?php echo $root_path; ?>/#">ผู้จำหน่ายอีซูซุ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

</header>

<!--Navigation right-->

<button id="jsNavRightOpen" class="navigation-right__button  -open">
    <img src="<?php echo $root_path; ?>/assets/images/icon-arrow-left.png" alt="">
    <span class="hide">collapse</span>
</button>
<div id="jsNavRightElement" class="navigation-right">
    <nav class="navigation-right__content">
        <ul>
            <li class="navigation-right__list">
                <a href="<?php echo $root_path; ?>/compare.php">
                    <div class="navigation-right__image">
                        <img src="<?php echo $root_path; ?>/assets/images/nav-right/compare.png" alt="">
                        <img src="<?php echo $root_path; ?>/assets/images/nav-right/compare-active.png" alt="">
                    </div>
                    เปรียบเทียบ <br>
                    รุ่นรถ
                </a>
            </li>
            <li class="navigation-right__list">
                <a href="<?php echo $root_path; ?>/calculator.php">
                    <div class="navigation-right__image">
                        <img src="<?php echo $root_path; ?>/assets/images/nav-right/calculator.png" alt="">
                        <img src="<?php echo $root_path; ?>/assets/images/nav-right/calculator-active.png" alt="">
                    </div>
                    คำนวณ<br>
                    ค่างวดรถ
                </a>
            </li>
            <li class="navigation-right__list">
                <a href="<?php echo $root_path; ?>/#">
                    <div class="navigation-right__image">
                        <img src="<?php echo $root_path; ?>/assets/images/nav-right/dealer.png" alt="">
                        <img src="<?php echo $root_path; ?>/assets/images/nav-right/dealer-active.png" alt="">
                    </div>
                    ผู้จำหน่าย<br>
                    อีซูซุ
                </a>
            </li>
        </ul>

        <button id="jsNavRightClose" class="navigation-right__button">
            <img src="<?php echo $root_path; ?>/assets/images/icon-arrow-right-black.png" alt="">
            <span class="hide">collapse</span>
        </button>
    </nav>
</div>

