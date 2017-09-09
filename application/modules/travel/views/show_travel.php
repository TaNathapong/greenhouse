
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="single-product-area">
   <div class="container">
      <div class="product-content-right">
        <a href= "<?php echo site_url('travel/add_travel_page/')?>">
                <button type="button" class="btn btn-info">เพิ่มสถานที่ท่องเที่ยว</button>
        </a>
        <div class="row"><br>
            <h3>แนะนำสถานที่ท่องเที่ยว</h3>
            <?php
                 foreach ($travel_list as $key => $value)     //ดึงข้อมูลจาก DB มาแสดงใน list
                 {
              ?>
          <div class="col-md-1"></div>
          <div class="col-md-5 no-padding lib-item" data-category="ui">
              <div class="lib-panel">
                  <div class="row box-shadow">
                      <div class="col-md-6">
                          <a href="seller-profile.html"><img class="lib-img img-rounded" src="<?php echo base_url('image_gh/'.$value['travel_pic']);?>" alt="Cinque Terre" style="width:450px; height:200px;"></a>
                      </div>
                      <div class="col-md-6">
                          <div class="lib-row lib-header">
                              <?php echo $value['travel_name']; ?>
                          </div>
                          <div class="lib-row lib-footer" style ="float:" align="right">
                            <a href= "<?php echo site_url('travel/travel_edit/'.$value['travel_id']);  ?>">
                                  <button type="button" class="btn btn-default btn-sm">แก้ไข</button>
                            </a>
                            <a href= "<?php echo site_url('travel/delete_travel/'.$value['travel_id'])   ;?>">
                                  <button type="button" class="btn btn-default btn-sm">ลบ </button>
                            </a>
                          </div> 
                          <div class="lib-row lib-desc">
                              <p><?php echo $value['travel_detail']; ?></p>   
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="deleteModal<?php echo $key; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ยืนยันการลบข้อมูล?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-4 col-xs-4"></div>
                        <div class="col-sm-4 col-xs-4">
                            <a href="<?php echo site_url('travel/delete_travel/'.$value['travel_id']);?>" class="btn btn-success btn-lg btn-block">ยืนยัน</a>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                        </div>
                    </div>
                    <div class="modal-footer">
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