<?php
    $form = new form();
    $lbname = new label('ชื่อ');
    $lblastname = new label('นามสกุล');
    $lbaddress = new label('ที่อยู่');
    $lbsubdistrict = new label('แขวง/ตำบล');
    $lbdistrict = new label('เขต/อำเภอ');
    $lbprovince = new label('จังหวัด');
    $lbtell = new label('เบอร์โทรศัพท์');
    $lbline = new label('LineID');
    $txtname = new textfield('-','','form-control','','');
    $txtlastname = new textfield('-','','form-control','','');
    $txtaddress = new textArea('','','','','');$button = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
	echo $form->open("","","","insert_customer.php","");
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:10px;">
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h1>ลงทะเบียน</h1>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbname; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtname; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lblastname; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtlastname; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbprovince; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><select class="form-control col-12" id="selProvince">
																				<option value=""> ------- เลือก ------ </option>
																				<?php
																					$rs = $db->conditions2("PROVINCE_ID,PROVINCE_NAME","province","CONVERT(province_NAME USING TIS620) ASC")->execute();
																					//$rs = $db->conditions3("district_ID,district_NAME","district","PROVINCE_ID = '1'","CONVERT(province_NAME USING TIS620) ASC")->execute();
																					while($row = mysqli_fetch_assoc($rs)){
																						echo '<option value="', $row['PROVINCE_ID'], '">', $row['PROVINCE_NAME'],'</option>';
																					}
																				?>
																				</select>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbdistrict; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><select class="form-control col-12" id="selDistrict">
																				<option value=""> ------- เลือก ------ </option>
																				</select><span id="waitDistrict"></span>
																				</span>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbsubdistrict; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><select class="form-control col-12" id="selSubdistrict">
																				<option value=""> ------- เลือก ------ </option>
																				</select><span id="waitSubdistrict">
																				</span>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbaddress; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtaddress; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbtell; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbline; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"><?php echo $button; ?></div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"><div>
	</div>
</div>