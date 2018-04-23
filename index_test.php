<?php

include 'inc_js.php';
include 'database/db_tools.php';
include 'connect.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dependent dropdownlist จังหวัด อำเภอ ตำบล</title>

<script type="text/javascript">
 // Specify a function to execute when the DOM is fully loaded.
$(function(){
	var defaultOption = '<option value=""> ------- เลือก ------ </option>';
	var loadingImage  = '<img src="images/loading4.gif" alt="loading" />';
	// Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
	$('#selProvince').change(function() {
		$("#selDistrict").html(defaultOption);
		$("#selSubdistrict").html(defaultOption);
		// Perform an asynchronous HTTP (Ajax) request.
		$.ajax({
			// A string containing the URL to which the request is sent.
			url: "jsonAction.php",
			// Data to be sent to the server.
			data: ({ nextList : 'district', provinceID: $('#selProvince').val() }),
			// The type of data that you're expecting back from the server.
			dataType: "json",
			// beforeSend is called before the request is sent
			beforeSend: function() {
				$("#waitDistrict").html(loadingImage);
			},
			// success is called if the request succeeds.
			success: function(json){
				$("#waitDistrict").html("");
				console.log(json);
				// Iterate over a jQuery object, executing a function for each matched element.
				$.each(json, function(index, value) {
					// Insert content, specified by the parameter, to the end of each element
					// in the set of matched elements.
					
					 $("#selDistrict").append('<option value="' + value.district_ID + 
											'">' + value.district_NAME + '</option>');
				});
			}
		});
	});
	
	$('#selDistrict').change(function() {
		$("#selSubdistrict").html(defaultOption);
		$.ajax({
			url: "jsonAction.php",
			data: ({ nextList : 'subDistrict', districtID: $('#selDistrict').val() }),
			dataType: "json",
			beforeSend: function() {
				$("#waitSubdistrict").html(loadingImage);
			},
			success: function(json){
				$("#waitSubdistrict").html("");
				$.each(json, function(index, value) {
					 $("#selSubdistrict").append('<option value="' + value.subdistrict_ID + 
											'">' + value.subdistrict_NAME + '</option>');
				});
			}
		});
	});
});
</script>


</head>

<body>
	<label>จังหวัด : </label>

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

    

    <label>อำเภอ : </label>
    <select id="selDistrict">
    	<option value=""> ------- เลือก ------ </option>
    </select><span id="waitDistrict"></span>
    
    <label>ตำบล : </label>
    <select id="selSubdistrict">
    	<option value=""> ------- เลือก ------ </option>
    </select><span id="waitSubdistrict"></span>
</body>
</html>