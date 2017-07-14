<!-- regist_member_byer  หน้าสมัครเป็นผู้ซื้อ -->
<?php
$attr = array('class'=> 'form-horizontal');
echo form_open_multipart('member/add_member_buyer',$attr);
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
        <h2 align="center">ข้อมูลของผู้ซื้อ</h2><br>
        <h3>ข้อมูลส่วนตัว</h3><hr>
        <div class="form-group">
            <label for="display" class="col-sm-3 control-label">รูปประจำตัว</label>
            <div class="col-sm-9">
                <input type="file" name="mem_buyer_pic">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="" class="form-control" autofocus  name="mem_buyer_name">
            </div>
        </div>
        <div class="form-group">
            <label for="idNum" class="col-sm-3 control-label">เลขทีบัตรประชาชน</label>
            <div class="col-sm-9">
                <input type="text" id="idcard" placeholder="" class="form-control"  name="mem_buyer_idcard" maxlength="13">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">วันเกิด</label>
            <div class="col-sm-9">
                <input type="date" id="birth" class="form-control" name="mem_buyer_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">e-mail</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="เช่น greenhouse@hotmail.com" class="form-control" name="mem_buyer_email">
            </div>
        </div>
        <div class="form-group">
           <label for="email" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
           <div class="col-sm-9">
               <input type="phone" id="tel" placeholder="" class="form-control" name="mem_buyer_tel" maxlength="10">
           </div>
      </div>
        <div class="form-group">
            <label for="userName" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
            <div class="col-sm-9">
                <input type="text" id="username" placeholder="" class="form-control" name="mem_buyer_username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">รหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control" name="mem_buyer_password" maxlength="30">
            </div>
        </div>
        <div class="form-group">
            <label for="confirmPassword" class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control">
            </div>
        </div>


        <h3>ที่อยู่จัดส่ง</h3><hr>
        <div class="form-group">
            <label class="col-md-3 control-label" for="address">ที่อยู่</label>
            <div class="col-md-9">
                <textarea style="width: 595px;height: 50px" class="form-control" id="buyer_address" name="mem_buyer_address"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_subdistrict" placeholder="" class="form-control" name="mem_buyer_subdistrict">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_district" placeholder="" class="form-control" name="mem_buyer_district">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_province" placeholder="" class="form-control" name="mem_buyer_province">
            </div>
            <label for="country" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <select id="buyer_province" class="form-control" name="mem_buyer_province" style="width: 595px">
                   <option value="" selected>--------- เลือกจังหวัด ---------</option>
                   <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                   <option value="กระบี่">กระบี่ </option>
                   <option value="กาญจนบุรี">กาญจนบุรี </option>
                   <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                   <option value="กำแพงเพชร">กำแพงเพชร </option>
                   <option value="ขอนแก่น">ขอนแก่น</option>
                   <option value="จันทบุรี">จันทบุรี</option>
                   <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                   <option value="ชัยนาท">ชัยนาท </option>
                   <option value="ชัยภูมิ">ชัยภูมิ </option>
                   <option value="ชุมพร">ชุมพร </option>
                   <option value="ชลบุรี">ชลบุรี </option>
                   <option value="เชียงใหม่">เชียงใหม่ </option>
                   <option value="เชียงราย">เชียงราย </option>
                   <option value="ตรัง">ตรัง </option>
                   <option value="ตราด">ตราด </option>
                   <option value="ตาก">ตาก </option>
                   <option value="นครนายก">นครนายก </option>
                   <option value="นครปฐม">นครปฐม </option>
                   <option value="นครพนม">นครพนม </option>
                   <option value="นครราชสีมา">นครราชสีมา </option>
                   <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                   <option value="นครสวรรค์">นครสวรรค์ </option>
                   <option value="นราธิวาส">นราธิวาส </option>
                   <option value="น่าน">น่าน </option>
                   <option value="นนทบุรี">นนทบุรี </option>
                   <option value="บึงกาฬ">บึงกาฬ</option>
                   <option value="บุรีรัมย์">บุรีรัมย์</option>
                   <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                   <option value="ปทุมธานี">ปทุมธานี </option>
                   <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                   <option value="ปัตตานี">ปัตตานี </option>
                   <option value="พะเยา">พะเยา </option>
                   <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                   <option value="พังงา">พังงา </option>
                   <option value="พิจิตร">พิจิตร </option>
                   <option value="พิษณุโลก">พิษณุโลก </option>
                   <option value="เพชรบุรี">เพชรบุรี </option>
                   <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                   <option value="แพร่">แพร่ </option>
                   <option value="พัทลุง">พัทลุง </option>
                   <option value="ภูเก็ต">ภูเก็ต </option>
                   <option value="มหาสารคาม">มหาสารคาม </option>
                   <option value="มุกดาหาร">มุกดาหาร </option>
                   <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                   <option value="ยโสธร">ยโสธร </option>
                   <option value="ยะลา">ยะลา </option>
                   <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                   <option value="ระนอง">ระนอง </option>
                   <option value="ระยอง">ระยอง </option>
                   <option value="ราชบุรี">ราชบุรี</option>
                   <option value="ลพบุรี">ลพบุรี </option>
                   <option value="ลำปาง">ลำปาง </option>
                   <option value="ลำพูน">ลำพูน </option>
                   <option value="เลย">เลย </option>
                   <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                   <option value="สกลนคร">สกลนคร</option>
                   <option value="สงขลา">สงขลา </option>
                   <option value="สมุทรสาคร">สมุทรสาคร </option>
                   <option value="สมุทรปราการ">สมุทรปราการ </option>
                   <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                   <option value="สระแก้ว">สระแก้ว </option>
                   <option value="สระบุรี">สระบุรี </option>
                   <option value="สิงห์บุรี">สิงห์บุรี </option>
                   <option value="สุโขทัย">สุโขทัย </option>
                   <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                   <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                   <option value="สุรินทร์">สุรินทร์ </option>
                   <option value="สตูล">สตูล </option>
                   <option value="หนองคาย">หนองคาย </option>
                   <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                   <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                   <option value="อุดรธานี">อุดรธานี </option>
                   <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                   <option value="อุทัยธานี">อุทัยธานี </option>
                   <option value="อุบลราชธานี">อุบลราชธานี</option>
                   <option value="อ่างทอง">อ่างทอง </option>
                   <option value="อื่นๆ">อื่นๆ</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="postcode" class="col-sm-3 control-label">รหัสไปรณีย์</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_postcode" placeholder="" class="form-control" name="mem_buyer_postcode" maxlength="5">
            </div>
        </div>


        <h3>ที่อยู่ใบเสร็จ</h3><hr>
        <div class="form-group">
            <label class="col-md-3 control-label" for="address">ที่อยู่</label>
            <div class="col-md-9">
                <textarea style="width: 595px;height: 50px" class="form-control" id="address_bill" name="mem_buyer_address_bill">
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="text" id="subdistrict_bill" placeholder="" class="form-control" name="mem_buyer_subdistrict_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="text" id="district_bill" placeholder="" class="form-control" name="mem_buyer_district_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="text" id="province_bill" placeholder="" class="form-control" name="mem_buyer_province_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="postcode" class="col-sm-3 control-label">รหัสไปรณีย์</label>
            <div class="col-sm-9">
                <input type="text" id="postcode_bill" placeholder="" class="form-control" name="mem_buyer_postcode_bill" maxlength="5">
            </div>
        </div>
          <br>
        <div class="form-group">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                 <button type="submit" class="btn btn-info btn-block" href="">สมัครสมาชิก</button>
            </div>
        </div>
        <br>
    </form> <!-- /form -->
</div>
<?php echo form_close();?>
