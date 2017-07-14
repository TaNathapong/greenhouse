
<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Manage_product/form_validation',$attr); ?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="veiwport" content="width=dvice-width, initial-scale=1">
	<title>green house</title>
</head>
<body>
	<form action="<?php echo base_url()?>/Manage_product/form_validation" method="post" enctype="multipart/form-data"> <!-- ฟอร์มสำหรับเซฟข้อมูล-->

		<!-- กรอบรอบนอก -->
		<div align="center" class="container" style="margin-top: 30px;">
		<h1>เพิ่มสถานที่ท่องเที่ยวของคุณ</h1>

		<!-- ฟอร์มเพิ่มรูปภาพ -->
 		<div>
 			<input type="file" name="travel_pic" id="fileToUpload" style="display: inline;">
	    	
 		</div>
 		<!-- สิ้สนุดฟอร์มเพิ่มรูปภาพ -->

 		<!-- ฟอร์มใส่ชื่อ -->
    	<div align="left">
    		<label>ชื่อสถานที่:</label><br>
			<input type="text" name="travel_name" placeholder="ชื่อสถานที่ท่องเที่ยว">	
			<span class="text-danger"><?php echo form_error("travel_name") ?></span>
    	</div>
    	<!-- สิ้นสุดฟอร์มใส่ชื่อ -->

    	<!-- ฟอร์มสำหรับกรอกรายละเอียด -->
    	<div align="left">
    		<label for="comment">รายละเอียด:</label><br>
	  		<textarea class="form-control" name="travel_detail" rows="5" id="comment" placeholder="บอกรายละเอียดต่างๆเกี่ยวกับสถานที่ท่องเที่ยวของคุณ" style="width: 100%;"></textarea>
	  		<span class="text-danger"><?php echo form_error('travel_detail'); ?></span>
    	</div>
    	<!-- สิ้นสุดฟอร์มสำหรับกรอกรายลเอียด -->

    	<!-- แสดงแผนที่ -->
		<div id="map-canvas" style="width: 100%; height: 100%">
			
		</div>
    	<!-- สิ้นสุดแสดงแผนที่ -->
		<div align="center">
    		<button type="submit">บันทึกข้อมูล </button>
    	</div>

  		</div>
	</form>
</body>
</html>
<?php echo form_close(); ?>


