<div class="single-product-area">
 <div class="container">
    <div class="product-content-right">
<!--เพิ่ม--><a href= "<?php echo site_url('vegetable/add_vegetable_page/')?>">
                  <button class="button">เพิ่มผัก</button>
          </a>

       <div class="row">
          <?php
               foreach ($vegetable_list as $key => $value)     //ดึงข้อมูลจาก DB มาแสดงใน list
               {
            ?>
            <br/>
         <div class="container" style="padding: 25px;">
                <h3>ผัก</h3>
                <div class="row row-margin-bottom">
                    <div class="col-md-5 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                            <a href= "<?php echo site_url('vegetable/vegetable_edit/'.$value['vegetable_id']);?>">
                              <button class="button">แก้ไข</button>
                            </a>
                            <a href= "<?php echo site_url('vegetable/delete_vegetable/'.$value['vegetable_id']);?>">
                                <button class="button">ลบ</button>
                            </a>
                                <div class="col-md-6">
                                  <img src="<?php echo base_url('image_gh/'.$value['vegetable_pic']);?>" class="img-circle" alt="" width="304" height="236">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        <?php echo $value['vegetable_name'];?>
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        <?php echo $value['vegetable_detail'];?>
                                    </div><br>
                                    <div class="lib-row lib-desc">
                                        ราคา : <?php echo $value['vegetable_pice'];?>
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