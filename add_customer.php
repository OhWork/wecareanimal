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
    $txttell = new textfield('-','','form-control','','');
    $txtline = new textfield('-','','form-control','','');
    $txtaddress = new textArea('','txtarea','','','');
	$button = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:10px;">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<div class="row">
								<button class="btn btn-light col-12 menuleft" style="margin-top:15px;"><a href ="index.php?url=add_customer.php"><img src="images/user.png" /></a></button>
								<button class="btn btn-light col-12 menuleft2" style="margin-top:5px;"><a href ="#"><img src="images/pet.png" width="64" height="64" /></a></button>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
				<?php
	echo $form->open("","","","insert_customer.php","");
	?>
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
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txttell; ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top:6px;"><?php echo $lbline; ?></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9"><?php echo $txtline; ?></div>
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
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.menuleft').addClass('disabled');
		$('.menuleft').on("click",function(e) {
		$('.menuleft').addClass('disabled');
		});
		$('.menuleft2').on("click",function(e) {
		$('.menuleft2').addClass('disabled');
		$('.menuleft').removeClass('disabled');
		console.log(1);
		});
	});
</script>