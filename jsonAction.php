<?php
include 'database/db_tools.php';
include 'connect.php';
// Set delay 1 second. 
sleep(1);


$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

switch($nextList) {
	case 'district':
		$provinceID = isset($_GET['provinceID']) ? $_GET['provinceID'] : '';
        $rs = $db->conditions3("district_ID,district_NAME","district","PROVINCE_ID = '$provinceID'","CONVERT(district_NAME USING TIS620) ASC")->execute();
		break;
	case 'subDistrict':
		$districtID = isset($_GET['districtID']) ? $_GET['districtID'] : '';
		$rs = $db->conditions3("subdistrict_ID,subdistrict_NAME","subdistrict","district_ID = '$districtID'","CONVERT(subdistrict_NAME USING TIS620) ASC")->execute();
		break;
}

$data = array();
while($row = mysqli_fetch_assoc($rs)) {
	$data[] = $row;
}

// Print the JSON representation of a value
echo json_encode($data);
?>