<?php 
/**
* Template Name: Compare
*/

// wp_enqueue_style ('compare-style', get_template_directory_uri().'/assets/css/compare.css');
// wp_enqueue_style ('my-style', get_template_directory_uri().'/css/mystyle.css', array('theme-style'));
if (function_exists('isz_ajax')) {
    $data = isz_ajax();//print_r($data);
}
$data = array();
if (function_exists('isz_pageload')) {
    $data = isz_pageload();
    // print_r($data);die;
}
get_header();
?>
<main>
  <div class="container">
      <h1>
          เปรียบเทียบรุ่นรถ
          <small>เลือกรุ่นที่ต้องการเปรียบเทียบรายละเอียดทางเทคนิค และอุปกรณ์</small>
      </h1>
      <img src="<?php bloginfo('template_url');?>/assets/images/compare/car.png">
      <ul class="select-car">
        <?php 
        $i = 0;
        foreach ($data['options'] as $option) : ?>
        <li data-col="<?php echo $i; ?>">
            <label class="box-select label-car" <?php echo ($data['view_mode'] == 'model' ? 'style="display:none;"':''); ?> >
                <select>
                <?php foreach ($option['models'] as $model) : ?>
                    <option value="<?php echo $model['id']; ?>"  data-id="<?php echo $model['id']; ?>" data-slug="<?php echo $model['slug']; ?>" <?php echo ($model['selected'] == true) ? 'selected="selected"':'';?> >
                        <?php echo $model['name']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </label>
            <label class="box-select label-model">
                <select><!-- disabled -->
                    <?php foreach ($option['sub_models'] as $sub_model) : ?>
                    <option value="<?php echo $sub_model['id']; ?>" data-id="<?php echo $sub_model['id']; ?>" data-slug="<?php echo $sub_model['slug']; ?>" <?php echo ($sub_model['selected'] == true) ? 'selected="selected"':'';?>><?php echo $sub_model['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
        </li>
        <?php 
        $i++;
        endforeach; ?>
      </ul>
      <ul class="option-car">
        <?php foreach ($data['specsheet'] as $ssKey=>$specsheet) : ?>
        <li id="main-parent" data-col="<?php echo $ssKey ?>">
          <div class="result-car">
            <div class="img-car"><img src="<?php bloginfo('template_url');?>/assets/images/compare/<?php echo $specsheet['model_slug'];?>/<?php echo $specsheet['slug']; ?>.png"></div>
            <ul class="ul-color">
              <?php foreach ($specsheet['colors'] as $key => $color) { ?>
                <li>
                  <a data-color="<?php echo $color['label']; ?>" data-name="<?php echo $color['name']; ?>" data-price="<?php echo $color['price']; ?>" <?php echo ($key == 0 ? 'class="active"':''); ?>>
                    <img src="<?php bloginfo('template_url');?>/assets/images/compare/color/<?php echo $color['label']; ?>.jpg">
                  </a>
                </li>
              <?php } ?>
            </ul>
            <p class="name-color">
              <?php echo $specsheet['colors'][0]['name']; ?>
            </p>
            <div class="box-price">
              <div class="price">
                <p>
                  ราคา
                </p>
                <p>
                  <span>
                    <?php echo $specsheet['colors'][0]['price']; ?>
                  </span>
                  บาท
                </p>
              </div>
              <ul>
                <li class="calculator-link">
                  <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/icon/compare/i-cal.png">
                    <p>คำนวณค่างวด</p>  
                  </a>
                </li>
                <!-- <li class="test-drive-link">
                  <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/icon/compare/i-testdrive.png">
                    <p>ทดลองขับ</p>  
                  </a>
                </li>
                <li>
                  <a href="#dealer-map">
                    <img src="<?php bloginfo('template_url');?>/assets/images/icon/compare/i-dealer.png">
                    <p>ผู้จำหน่ายอีซูซุ</p>  
                  </a>
                </li> -->
              </ul>
            </div>
          </div>

          <?php include(locate_template( 'includes/calculator.php', false, true )); ?>

        </li>
        <?php endforeach; ?>
      </ul>
      <div class="accordion-detail open">
        <ul>
        <?php foreach ($data['specsheet'] as $specsheet) : ?>
          <li>
            <ul>
              <h2>
                รายละเอียดทางเทคนิค
              </h2>
              <li>
                  <b>เครื่องยนต์</b>
                  <p><span><?php echo $specsheet['motor']; ?></span>ซีซี</p>
                  <b>แรงม้า</b>
                  <p><span><?php echo $specsheet['horsepower']; ?></span>แรงม้า</p>
                  <?php foreach ($specsheet['gearbox'] as $b => $p) { ?>
                    <b><?php echo $b; ?></b>
                    <p><span><?php echo (isset($p[0]) ? $p[0]:""); ?></span><?php echo (isset($p[1]) ? $p[1]:""); ?></p>
                  <?php } ?>
                  <!-- <b>เกียร์ออโตเมติก</b>
                  <p><span>6</span>จังหวะ พร้อมระบบ Rev Tronic</p> -->
              </li>
              <li class="open">
                 <h3>
                    เครื่องยนต์
                 </h3> 
                 <div class="detail-li">
                    <?php foreach ($specsheet['engine'] as $b => $p) { ?>
                      <?php if (is_array($p)) : ?>
                        <b><?php echo $b; ?></b><p class="sub-detail">
                        <?php foreach ($p as $key => $item) : ?>
                          <span class="label"><?php echo $key; ?></span>
                          <span class="value"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                        </p>
                      <?php else: ?>
                        <b><?php echo $b; ?></b>
                        <p><?php echo $p; ?></p>
                      <?php endif; ?>
                    <?php } ?>
                 </div>
              </li>
              <?php /*<li>
                 <h3>
                    ระบบขับเคลื่อน
                 </h3> 
                 <div class="detail-li"> 
                    <?php foreach ($specsheet['clutch'] as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ระบบเกียร์
                 </h3> 
                 <div class="detail-li">
                    <?php foreach ($specsheet['gearbox'] as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo implode(" ", $p); ?></p>
                    <?php } ?>
                    <?php foreach ($specsheet['gear'] as $b => $p) : ?>
                      <b><?php echo $b; ?></b>
                      <?php if ( is_array($p) ) : ?>
                        <?php foreach ($p as $val) : ?>
                          <p><?php echo $val; ?></p>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <p><?php echo $p; ?></p>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ระบบพวงมาลัย
                 </h3> 
                 <div class="detail-li">
                    <?php foreach ($specsheet['steering'] as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>*/ ?>
              <li>
                 <h3>
                     ระบบเบรก
                 </h3> 
                 <div class="detail-li"> 
                    <?php foreach ($specsheet['brake'] as $b => $p) { ?>
                      <?php if (is_array($p)) : ?>
                        <b><?php echo $b; ?></b><p class="sub-detail">
                        <?php foreach ($p as $key => $item) : ?>
                          <span class="label"><?php echo $key; ?></span>
                          <span class="value"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                        </p>
                      <?php else: ?>
                        <b><?php echo $b; ?></b>
                        <p><?php echo $p; ?></p>
                      <?php endif; ?>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ระบบกันสะเทือน
                 </h3> 
                 <div class="detail-li"> 
                    <?php foreach ($specsheet['suspension'] as $b => $p) { ?>
                      <?php if (is_array($p)) : ?>
                        <b><?php echo $b; ?></b><p class="sub-detail">
                        <?php foreach ($p as $key => $item) : ?>
                          <span class="label"><?php echo $key; ?></span>
                          <span class="value"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                        </p>
                      <?php else: ?>
                        <b><?php echo $b; ?></b>
                        <p><?php echo $p; ?></p>
                      <?php endif; ?>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ล้อและยาง
                 </h3> 
                 <div class="detail-li">  
                    <?php foreach ($specsheet['wheels'] as $b => $p) { ?>
                      <?php if (is_array($p)) : ?>
                        <b><?php echo $b; ?></b><p class="sub-detail">
                        <?php foreach ($p as $key => $item) : ?>
                          <span class="label"><?php echo $key; ?></span>
                          <span class="value"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                        </p>
                      <?php else: ?>
                        <b><?php echo $b; ?></b>
                        <p><?php echo $p; ?></p>
                      <?php endif; ?>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    มิติและความจุ
                 </h3> 
                 <div class="detail-li">   
                    <?php foreach ($specsheet['dimensions'] as $b => $p) { ?>
                      <?php if (is_array($p)) : ?>
                        <b><?php echo $b; ?></b><p class="sub-detail">
                        <?php foreach ($p as $key => $item) : ?>
                          <span class="label"><?php echo $key; ?></span>
                          <span class="value"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                        </p>
                      <?php else: ?>
                        <b><?php echo $b; ?></b>
                        <p><?php echo $p; ?></p>
                      <?php endif; ?>
                    <?php } ?>
                  </div>
              </li>
            </ul> 
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="accordion-detail accordion-special">
        <ul>
          <?php foreach ($data['specsheet'] as $specsheet) : ?>
            <li>    
                <ul>  
                    <h2>
                        อุปกรณ์มาตรฐาน / พิเศษ
                    </h2> 
                    <li class="open">
                       <h3>
                          ภายนอก
                       </h3> 
                       <div class="detail-li"> 
                          <?php foreach ($specsheet['external'] as $b => $p) { ?>
                            <?php if (is_array($p)) : ?>
                              <b><?php echo $b; ?></b><p class="sub-detail">
                              <?php foreach ($p as $key => $item) : ?>
                                <span class="label"><?php echo $key; ?></span>
                                <span class="value"><?php echo $item; ?></span>
                              <?php endforeach; ?>
                              </p>
                            <?php else: ?>
                              <b><?php echo $b; ?></b>
                              <p><?php echo $p; ?></p>
                            <?php endif; ?>
                          <?php } ?>
                        </div>
                    </li>
                    <li>
                       <h3>
                          ภายใน
                       </h3> 
                       <div class="detail-li"> 
                          <?php foreach ($specsheet['inside'] as $b => $p) { ?>
                            <?php if (is_array($p)) : ?>
                              <b><?php echo $b; ?></b><p class="sub-detail">
                              <?php foreach ($p as $key => $item) : ?>
                                <span class="label"><?php echo $key; ?></span>
                                <span class="value"><?php echo $item; ?></span>
                              <?php endforeach; ?>
                              </p>
                            <?php else: ?>
                              <b><?php echo $b; ?></b>
                              <p><?php echo $p; ?></p>
                            <?php endif; ?>
                          <?php } ?> 
                        </div>
                    </li>
                    <?php /*<li>
                       <h3>
                           ระบบควบคุมความเร็วอัตโนมัติ (Cruise Control)
                       </h3> 
                       <div class="detail-li">  
                          <?php foreach ($specsheet['control'] as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                    <li>
                       <h3>
                           ชุดแต่ง
                       </h3> 
                       <div class="detail-li"> 
                          <?php foreach ($specsheet['part'] as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                    <!--  ซ้ำกับด้านบน
                    <li>
                       <h3>
                           พวงมาลัย
                       </h3> 
                       <div class="detail-li">
                          <?php foreach ($specsheet['steering'] as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                     -->
                    <li>
                       <h3>
                           เครื่องเสียง
                       </h3> 
                       <div class="detail-li"> 
                          <?php foreach ($specsheet['sound'] as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                    <li>
                       <h3>
                           เบาะนั่ง
                       </h3> 
                       <div class="detail-li">
                          <?php foreach ($specsheet['seats'] as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>*/ ?>
                    <li>
                       <h3>
                           อุปกรณ์เพื่อความปลอดภัย
                       </h3> 
                       <div class="detail-li">  
                          <?php foreach ($specsheet['safety'] as $b => $p) { ?>
                            <?php if (is_array($p)) : ?>
                              <b><?php echo $b; ?></b><p class="sub-detail">
                              <?php foreach ($p as $key => $item) : ?>
                                <span class="label"><?php echo $key; ?></span>
                                <span class="value"><?php echo $item; ?></span>
                              <?php endforeach; ?>
                              </p>
                            <?php else: ?>
                              <b><?php echo $b; ?></b>
                              <p><?php echo $p; ?></p>
                            <?php endif; ?>
                          <?php } ?>
                        </div>
                    </li>
                </ul> 
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
  </div>
  <?php get_template_part( 'includes/start-with-isuzu' ); ?>
</main>
<?php get_footer(); ?>