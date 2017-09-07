<div class="single-product-area">
 <div class="container">
    <div class="product-content-right">
<!--เพิ่ม--><a href= "<?php echo site_url('processing/add_processing_page/')?>">
                  <button class="button">เพิ่มสินค้าแปรรูป</button>
          </a>

       <div class="row">
            <h3>สินค้า แปรรูป</h3>
          <?php
               foreach ($processing_list as $key => $value)     //ดึงข้อมูลจาก DB มาแสดงใน list
               {
            ?>
            <br/>
         <div class="container" style="padding: 25px;">
                <div class="row row-margin-bottom">
                    <div class="col-md-5 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                            <a href= "<?php echo site_url('processing/processing_edit/'.$value['processing_id']);?>">
                              <button class="button">แก้ไข</button>
                            </a>
                            <a href= "<?php echo site_url('processing/delete_processing/'.$value['processing_id']);?>">
                                <button class="button">ลบ</button>
                            </a>
                                <div class="col-md-6">
                                  <img src="<?php echo base_url('image_gh/'.$value['processing_pic']);?>" class="img-circle" alt="" width="304" height="236">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        <?php echo $value['processing_name'];?>
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        <?php echo $value['processing_detail'];?>
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