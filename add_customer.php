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
    $txtaddress = new textArea('','','','','');
    
    
    $button = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
    echo "<h1>ลงทะเบียน</h1>";
    echo $form->open("","","","insert_customer.php","");
    echo $lbname;
    echo $txtname;
    echo $lblastname;
    echo $txtlastname;
    echo $lbaddress;
    echo $txtaddress;
    echo $lbsubdistrict;
    ?>
     <select id="selSubdistrict">
    	<option value=""> ------- เลือก ------ </option>
    </select><span id="waitSubdistrict"></span>
    <?php
    echo $lbdistrict;
    ?>
    <select id="selDistrict">
    	<option value=""> ------- เลือก ------ </option>
    </select><span id="waitDistrict"></span>
    <?php
    echo $lbprovince;
    ?>
     <select id="selProvince">
    	<option value=""> ------- เลือก ------ </option>
        <?php
            $rs = $db->conditions2("PROVINCE_ID,PROVINCE_NAME","province","CONVERT(province_NAME USING TIS620) ASC")->execute();
            //$rs = $db->conditions3("district_ID,district_NAME","district","PROVINCE_ID = '1'","CONVERT(province_NAME USING TIS620) ASC")->execute();
			while($row = mysqli_fetch_assoc($rs)){
				echo '<option value="', $row['PROVINCE_ID'], '">', $row['PROVINCE_NAME'],'</option>';
			}
		?>
    </select>
    <?php
    echo $lbtell;
    echo $lbline;
    echo $button;
?>