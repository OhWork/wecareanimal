<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <link rel="stylesheet" href="CSS/main.css">
		<link rel="stylesheet" href="CSS/scss/_input-group.scss">
		<title></title>
		<?php
            include_once 'inc_js.php';
            include_once 'database/db_tools.php';
            include_once 'connect.php';
            include_once 'form/main_form.php';
            include_once 'form/gridview.php';
        ?>
	</head>
	<body>
		<div class="warpper">
			<div class="container">
				<div class="row">
					<?php include 'menumain.php'; ?>
					<?php include 'content.php'; ?>
					<?php include 'history.php'; ?>
				</div>
			</div>
		</div>
	</body>