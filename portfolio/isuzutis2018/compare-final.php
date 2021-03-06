<?php
$json_file = file_get_contents('assets/ssi/compare-final.json');
$json = json_decode($json_file);
$models = $json->model;
?>
<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>
    <link rel="stylesheet" href="assets/css/compare.css">
</head>

<body class="header-small page-compare">

<!-- menu -->
<?php include_once( 'web-header.php' ); ?>

<!-- Content -->
<main>
  <div class="container">
      <h1>
          เปรียบเทียบรุ่นรถ
          <small>เลือกรุ่นที่ต้องการเปรียบเทียบรายละเอียดทางเทคนิค และอุปกรณ์</small>
      </h1>
      <img src="assets/images/compare/car.png">
      <ul class="select-car">
          <?php for ($i = 0; $i < 3; $i++)  { ?>
          <li data-col="<?php echo $i; ?>">
              <label class="box-select label-car">
                <select>
                  <?php foreach ($models as $id => $model) { ?>
                    <option value="<?php echo $model->id; ?>"  data-id="<?php echo $id; ?>" <?php if ($model == $models[$i]) echo 'selected'; ?>>
                      <?php echo $model->name; ?>
                    </option>
                  <?php } ?>
                </select>                    
              </label>
              <label class="box-select label-model">
                <select><!-- disabled -->
                  <?php foreach ($models[$i]->submodel as $id => $submodel) { ?>                        
                    <option value="<?php echo $submodel->id; ?>" data-id="<?php echo $id; ?>" <?php if ($submodel == $models[$i]->submodel[0]) echo 'selected'; ?>>
                        <?php echo $submodel->name; ?>                                
                    </option>
                  <?php } ?>
                </select>                    
              </label>
          </li>
          <?php } ?>
      </ul>
      <ul class="option-car">
          <?php for ($i = 0; $i < 3; $i++)  { ?>
          <li>
              <div class="result-car">
                <div class="img-car"><img src="assets/images/compare/<?php echo $models[$i]->id;?>/<?php echo $models[$i]->submodel[0]->id; ?>.png"></div>
                <ul class="ul-color">
                  <?php foreach ($models[$i]->submodel[0]->colors as $key => $color) { ?>
                    <li>
                      <a data-color="<?php echo $color->label; ?>" data-name="<?php echo $color->name; ?>" data-price="<?php echo $color->price; ?>">
                        <img src="assets/images/compare/color/<?php echo $color->label; ?>.jpg">
                      </a>
                    </li>
                  <?php } ?>
                </ul>
                <p class="name-color">
                  <?php echo $models[$i]->submodel[0]->colors[0]->name; ?>
                </p>
                <div class="box-price">
                  <div class="price">
                    <p>
                      ราคา
                    </p>
                    <p>
                      <span>
                        <?php echo $models[$i]->submodel[0]->colors[0]->price; ?>
                      </span>
                      บาท
                    </p>
                  </div>
                  <ul>
                    <li>
                      <a href="calculator.php">
                        <img src="assets/images/icon/compare/i-cal.png">
                        <p>คำนวณค่างวด</p>  
                      </a>
                    </li>
                    <li>
                      <a href="test-drive.php">
                        <img src="assets/images/icon/compare/i-testdrive.png">
                        <p>ทดลองขับ</p>  
                      </a>
                    </li>
                    <li>
                      <a href="dealer-map.php">
                        <img src="assets/images/icon/compare/i-dealer.png">
                        <p>ผู้จำหน่ายอีซูซุ</p>  
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
          </li>
          <?php } ?>
      </ul>
      <div class="accordion-detail open">
        <ul>
        <?php for ($i = 0; $i < 3; $i++) {  ?>
          <li>    
            <ul>
              <h2>
                รายละเอียดทางเทคนิค
              </h2>
              <li>           
                  <b>เครื่องยนต์</b>
                  <p><span><?php echo $models[$i]->submodel[0]->motor; ?></span>ซีซี</p>           
                  <b>แรงม้า</b>
                  <p><span><?php echo $models[$i]->submodel[0]->horsepower; ?></span>แรงม้า</p>           
                  <b>เกียร์ออโตเมติก</b>
                  <p><span><?php echo $models[$i]->submodel[0]->gearbox[0]; ?></span>จังหวะ <?php echo $models[$i]->submodel[0]->gearbox[1]; ?></p>                    
              </li>
              <li class="open">
                 <h3>
                    เครื่องยนต์
                 </h3> 
                 <div class="detail-li">
                    <?php foreach ($models[$i]->submodel[0]->engine as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?> 
                 </div>
              </li>
              <li>
                 <h3>
                    ระบบขับเคลื่อน
                 </h3> 
                 <div class="detail-li"> 
                    <?php foreach ($models[$i]->submodel[0]->clutch as $b => $p) { ?>
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
                    <b>เกียร์ออโตเมติก</b>
                    <p><?php echo $models[$i]->submodel[0]->gearbox[0]; ?> จังหวะ <?php echo $models[$i]->submodel[0]->gearbox[1]; ?></p> 
                    <?php foreach ($models[$i]->submodel[0]->gear as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p>
                        <?php  if( $b == 'อัตราทดเกียร์' ){
                          for ($g = 0; $g < count($p); $g++) { echo $p[$g]. "<br>"; }
                        }
                        else{
                          echo $p;   
                        }
                        ?>                                  
                      </p>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ระบบพวงมาลัย
                 </h3> 
                 <div class="detail-li">
                    <?php foreach ($models[$i]->submodel[0]->steering as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                     ระบบเบรก
                 </h3> 
                 <div class="detail-li"> 
                    <?php foreach ($models[$i]->submodel[0]->brake as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ระบบกันสะเทือน
                 </h3> 
                 <div class="detail-li"> 
                    <?php foreach ($models[$i]->submodel[0]->suspension as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    ล้อและยาง
                 </h3> 
                 <div class="detail-li">  
                    <?php foreach ($models[$i]->submodel[0]->wheels as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>
              <li>
                 <h3>
                    มิติและความจุ
                 </h3> 
                 <div class="detail-li">   
                    <?php foreach ($models[$i]->submodel[0]->dimensions as $b => $p) { ?>
                      <b><?php echo $b; ?></b>
                      <p><?php echo $p; ?></p>
                    <?php } ?>
                  </div>
              </li>
            </ul> 
          </li>
        <?php } ?>
        </ul>
      </div>
      <div class="accordion-detail accordion-special">
        <ul>
          <?php for ($i = 0; $i < 3; $i++)  { ?>
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
                          <?php foreach ($models[$i]->submodel[0]->external as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                    <li>
                       <h3>
                          ภายใน
                       </h3> 
                       <div class="detail-li"> 
                          <?php foreach ($models[$i]->submodel[0]->inside as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?> 
                        </div>
                    </li>
                    <li>
                       <h3>
                           ระบบควบคุมความเร็วอัตโนมัติ (Cruise Control)
                       </h3> 
                       <div class="detail-li">  
                          <?php foreach ($models[$i]->submodel[0]->control as $b => $p) { ?>
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
                          <?php foreach ($models[$i]->submodel[0]->part as $b => $p) { ?>
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
                          <?php foreach ($models[$i]->submodel[0]->steering as $b => $p) { ?>
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
                          <?php foreach ($models[$i]->submodel[0]->sound as $b => $p) { ?>
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
                          <?php foreach ($models[$i]->submodel[0]->seats as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                    <li>
                       <h3>
                           อุปกรณ์เพื่อความปลอดภัย
                       </h3> 
                       <div class="detail-li">  
                          <?php foreach ($models[$i]->submodel[0]->safety as $b => $p) { ?>
                            <b><?php echo $b; ?></b>
                            <p><?php echo $p; ?></p>
                          <?php } ?>
                        </div>
                    </li>
                </ul> 
            </li>
          <?php } ?>
        </ul>
      </div>
  </div>
</main>

<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/compare-final.js"></script>

</body>

</html>