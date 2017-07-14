
<?php
$attr = array('class'=> 'form-horizontal');
echo form_open_multipart('member/add_regis_shipping',$attr);
?>

<div class="container">
    <br/>
        <h2 style="color: Green">ข้อมูลของผู้ขนส่ง</h2>
        <hr/>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_username" >
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">รหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control" name="mem_shipper_password" style="width: 595px">
            </div>
        </div>
         <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control" name="mem_shipper_password" style="width: 595px">
            </div>
        </div>

        <hr/>
        <h3>ข้อมูลกิจการ</h3>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ชื่อกิจการ</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_bussiness_name">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_address">
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_subdistric">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="text" id="email" placeholder="" class="form-control" name="mem_shipper_distric">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_province">
            </div>
        </div>
        <div class="form-group">
            <label for="postcode" class="col-sm-3 control-label">รหัสไปรณีย์</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_postcode">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="address">รายละเอียดกิจการ</label>
            <div class="col-md-9">
                <textarea style="width: 595px;height: 150px" class="form-control" id="address" name="mem_shipper_bussiness_detail"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="address">รูปกิจการ</label>
            <div class="col-md-9">
                <input type="file" name="mem_shipper_bussiness_pic">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">e-mail</label>
            <div class="col-sm-9">
                <input type="e-mail" id="password" placeholder="" class="form-control" name="mem_shipper_email" style="width: 595px">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">โทรศัพธ์</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_tel">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">พื้นที่ให้บริการ</label>
            <div class="col-sm-9">
                <select id="country" class="form-control" name="mem_shipper_area" style="width: 595px">
                    <option>กรุณาเลือกจังหวัด</option>
                    <option>กรุงเทพมหานคร</option>
                    <option>กาฬสินธ์</option>
                    <option>ขอนแก่น</option>
                    <option>หนองคาย</option>
                    <option>ร้อยเอ็ด</option>
                    <option>นครราชสีมา</option>
                    <option>เชียงใหม่</option>
                    <option>แม่ฮ่องสอน</option>
                    <option>ยะลา</option>
                    <option>ระนอง</option>
                    <option>นครศรีธรรมราช</option>
                </select>
            </div>
        </div>
        <hr/><br/>
        <h3>ช่องทางการชำระเงิน</h3>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">ธนาคาร</label>
            <div class="col-sm-9">
                <select id="country" class="form-control" name="mem_shipper_payment" style="width: 595px">
                    <option>กรุณาเลือกธนาคาร</option>
                    <option>ธนาคารกสิกรไทย</option>
                    <option>ธนาคารกรุงไทย</option>
                    <option>ธนาคารไทยพาณิชย์</option>
                    <option>ธนาคารออมสิน</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="name-booking" class="col-sm-3 control-label">ชื่อบัญชีธนาคาร</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="" class="form-control" name="mem_shipper_payment_name">
            </div>
        </div>
        <div class="form-group">
            <label for="num-booking" class="col-sm-3 control-label">เลขบัญชีธนาคาร</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="" class="form-control" name="mem_shipper_payment_id">
            </div>
        </div>

        <hr/><br/>
        <h3>ที่อยู่ใบเสร็จ</h3>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_address_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="text" id="password" placeholder="" class="form-control" name="mem_shipper_subdistric_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="text" id="email" placeholder="" class="form-control" name="mem_shipper_distric_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="text" id="provice" placeholder="" class="form-control" name="mem_shipper_province_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="postcode" class="col-sm-3 control-label">รหัสไปรณีย์</label>
            <div class="col-sm-9">
                <input type="text" id="postcode" placeholder="" class="form-control" name="mem_shipper_postcode_bill">
            </div>
        </div>
        <hr/>
        <div class="form-group">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-info btn-block" href="">สมัครสมาชิก</button>
            </div>
        </div>
</div> <!-- ./container -->
<?php echo form_close();?>
