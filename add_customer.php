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
    echo $lbdistrict;
    echo $lbtell;
    echo $lbline;
    echo $button;
?>