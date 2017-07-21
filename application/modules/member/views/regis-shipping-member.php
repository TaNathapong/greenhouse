
<?php
$attr = array('class'=> 'form-horizontal');
echo form_open_multipart('member/add_regis_shipping',$attr);
?>

<div class="container">
    <br/>
        <h2 style="color: Green">กรุณากรอกข้อมูล</h2>
<!--เพื่มรูป ไม่ได้-->    <hr>
        <center>
        <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
              <span class="btn btn-default btn-file m-r-5">
                  <span class="fileinput-new">
                  <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" width="50%" alt="">
                  </span>
                <!--  <span class="fileinput-exists">Change</span>  -->
                  <input type="file" name="upload_file">
              </span>
              <span class="fileinput-filename">
              </span>
              <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
        </div>
        </center><br>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ชื่อ-สกุล</label>
            <div class="col-sm-9">
                <input type="text" id="shipper_name" placeholder="" class="form-control" name="mem_shipper_name" >
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">เลขที่บัตรประชาชน</label>
            <div class="col-sm-9">
                <input type="text" id="shipper_idcard" placeholder="" class="form-control" name="mem_shipper_idcard" maxlength="13" >
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">อีเมลล์</label>
            <div class="col-sm-9">
                <input type="e-mail" id="shipper_email" placeholder="" class="form-control" name="mem_shipper_email" style="width: 595px">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ชื่อผู้ใช้งาน</label>
            <div class="col-sm-9">
                <input type="text" id="shipper_username" placeholder="" class="form-control" name="mem_shipper_username" >
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">รหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="shipper_password" placeholder="" class="form-control" name="mem_shipper_password" style="width: 595px">
            </div>
        </div>
         <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="shipper_password" placeholder="" class="form-control" name="mem_shipper_password" style="width: 595px">
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-sm-4 col-xs-4"></div>
            <div class="col-sm-4 col-xs-4" align="center">
                <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myAddRawModal">สมัครสมาชิก</a>
            </div>
            <div class="col-sm-4 col-xs-4"></div>
        </div>
</div> <!-- ./container -->
<br/>
<!--ฟอร์มยืนยัน การสมัคร-->
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
