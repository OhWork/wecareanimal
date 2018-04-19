<?php
    $form = new form();
    $lbname = new label('ชื่อ');
    $lblastname = new label('นามสกุล');
    $lbaddress = new label('ที่อยู่');
    $lbsubdistrict = new label('แขวง/ตำบล');
    $lbdistrict = new label('เขต/อำเภอ');
    $lbtell = new label('เบอร์โทรศัพท์');
    $lbline = new label('LineID');
    $txtname = new textfield('-','','form-control','','');
    $txtlastname = new textfield('-','','form-control','','');
    $txtaddress = new textArea('','','','','form-control');
    $button = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
	echo $form->open("","","","insert_customer.php","");
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h1>ลงทะเบียน</h1>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lbname; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtname; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lblastname; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtlastname; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lbaddress; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtaddress; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lbsubdistrict; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lbdistrict; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lbtell; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><?php echo $lbline; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"><?php echo $button; ?></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
	</div>
</div>