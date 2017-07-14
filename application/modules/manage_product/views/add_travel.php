
<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Manage_product/form_validation',$attr); ?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="veiwport" content="width=dvice-width, initial-scale=1">
	<title>green house</title>
	<style type="text/css">
		#ohbox{
			border:solid 1px;
			border-color: gray;
			border-radius: 5px;
			height: 300px;
			padding-top: 50px;
		}
		#ohbox-map{
			border:solid 1px;
			border-color: gray;
			border-radius: 5px;
			padding: 10px 10px 10px 10px;
		}
	</style>
</head>
<body>
	<form action="<?php echo base_url()?>/Manage_product/form_validation" method="post" enctype="multipart/form-data"> <!-- ฟอร์มสำหรับเซฟข้อมูล-->
		<!-- กรอบรอบนอก -->
		<div align="center" class="container" style="margin-top: 30px;">
			<div align="left" style="font-size: 20pt;">ข้อมูลต่างๆ</div>
			<div class="col-md-6">
				<!-- ฟอร์มเพิ่มรูปภาพ -->
		 		<div id="ohbox">
		 			<input type="file" name="travel_pic" id="fileToUpload" style="display: inline;">
		 			<span class="text-danger"><?php echo form_error("travel_pic") ?></span>
			    	
		 		</div>
		 		<!-- สิ้สนุดฟอร์มเพิ่มรูปภาพ -->

			</div>

			<div class="col-md-6">
				<div id="ohbox-map">
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
				  		<textarea class="form-control" name="travel_detail" rows="8" id="comment" placeholder="บอกรายละเอียดต่างๆเกี่ยวกับสถานที่ท่องเที่ยวของคุณ" style="width: 100%;"></textarea>
				  		<span class="text-danger"><?php echo form_error('travel_detail'); ?></span>
			    	</div>
			    	<!-- สิ้นสุดฟอร์มสำหรับกรอกรายลเอียด -->
				</div>
				

		    	<!-- แสดงแผนที่ -->
		    	
		    	<!-- สิ้นสุดแสดงแผนที่ -->
			</div>
  		</div><!-- สิ้นสุด class row -->

		<div class="container">
			<hr>
			<div align="left" style="font-size: 20pt;">แผนที่</div>
		    	<div align="left" style="margin-left: 20px;"><span>เลือกสถานที่ตั้งของคุณ</div>
				<div id="ohbox-map">
					
					<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18204.426191710772!2d102.86917185406871!3d16.424360082447556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24ca9da06e436ef3!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lit4Li14Liq4Liy4LiZIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4guC4reC4meC5geC4geC5iOC4mQ!5e0!3m2!1sth!2sth!4v1500018553427" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
		</div>
  		<div align="center" style="margin-top: 20px;">
    		<button type="submit">บันทึกข้อมูล </button>
    	</div>
	</form>
</body>
</html>
<?php echo form_close(); ?>


