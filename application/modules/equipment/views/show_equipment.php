<div class="single-product-area">
 <div class="container">
    <div class="product-content-right">
<!--เพิ่ม--><a href= "<?php echo site_url('equipment/add_equipment_page/')?>">
                  <button class="button">เพิ่มอุปกรณ์</button>
          </a>

       <div class="row">
          <?php
               foreach ($equipment_list as $key => $value)     //ดึงข้อมูลจาก DB มาแสดงใน list
               {
            ?>
            <br/>
         <div class="container" style="padding: 25px;">
                <h3>อุปกรณ์ทางการเกษตร</h3>
                <div class="row row-margin-bottom">
                    <div class="col-md-5 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                            <a href= "<?php echo site_url('equipment/equipment_edit/'.$value['equipment_id']);?>">
                              <button class="button">แก้ไข</button>
                            </a>
                            <a href= "<?php echo site_url('equipment/delete_equipment/'.$value['equipment_id']);?>">
                                <button class="button">ลบ</button>
                            </a>
                                <div class="col-md-6">
                                  <img src="<?php echo base_url('image_gh/'.$value['equipment_pic']);?>" class="img-circle" alt="" width="304" height="236">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        <?php echo $value['equipment_name'];?>
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        <?php echo $value['equipment_detail'];?>
                                    </div><br>
                                    <div class="lib-row lib-desc">
                                        ราคา : <?php echo $value['equipment_pice'];?>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
          <?php
                    }
           ?>
      </div>
    </div>
   </div> 
</div>