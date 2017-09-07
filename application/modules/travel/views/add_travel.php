<!-- regist_member_byer  หน้าสมัครเป็นผู้ซื้อ -->
<?php
$attr = array('class'=> 'form-horizontal');
echo form_open_multipart('travel/add_travel',$attr);
?>
<div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
</div> <!-- End mainmenu area -->
<br>
<div class="container">
    <form class="form-horizontal" role="form">
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card" align="center">
            <div class="card-body card-padding">
                <h3 align="left">กรุณากรอกข้อมูล</h3>
<!--เพื่มรูป-->    <hr>
                <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                      <span class="btn btn-default btn-file m-r-5">
                          <span class="fileinput-new">
						  <img src="<?php echo base_url('dist/images/addButton.png');?>" width="40%" alt="">
                          </span>
                          <input type="file" name="upload_file">
                      </span>
                      <span class="fileinput-filename">
                      </span>
                      <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                </div>
                <br/>
                <div class="card-body card-padding">
                    <div class="form-group">
                        <label class="col-sm-3 col-xs-2 control-label">ชื่อสถานที่ท่องเที่ยว</label>
                        <div class="col-sm-9 col-xs-10">
                            <input class="form-control" id="travel_name" type="text" placeholder="" 
                            name="travel_name">
                        </div>
                        <br/><br/>
                        <label class="col-sm-3 col-xs-2 control-label">รายละเอียด</label>
                        <div class="col-sm-9 col-xs-10">
                            <input class="form-control" id="focusedInput" type="text" placeholder="" name="travel_detail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-4"></div>
                        <div class="col-sm-4 col-xs-4" align="center">
                            <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myAddRawModal">บันทึกข้อมูล</a>
                        </div>
                        <div class="col-sm-4 col-xs-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<!--ฟอร์มยืนยัน-->
<div id="myAddRawModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ยืนยันข้อมูล?</h4>
            </div>

            <div class="modal-body">
                <div class="col-sm-4 col-xs-4"></div>
                <div class="col-sm-4 col-xs-4">
                    <button type="submit" class="btn btn-success btn-lg btn-block">ยืนยัน</button>
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

<?php echo form_close();?>
