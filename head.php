<!DOCTYPE html>
<html lang="cs">
	<head>
		<?php
			header("X-XSS-Protection: 1; mode=block");
			header('X-Frame-Options: SAMEORIGIN');
			header('X-Content-Type-Options: nosniff');
			header('Referrer-Policy: no-referrer');
		?>
		<meta http-equiv="Content-Security-Policy" content="default-src 'self'; 
			img-src *; 
			script-src https://oss.maxcdn.com/  'self';
			object-src 'none';
			font-src 'self' data: ">	
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="OpenSchoolSystem for Students je součást kitu OpenSchoolSystem určená pro provozování třídního webu. Umožňuje sdílení souborů, využívání diáře a obsahuje chatroom.">
		<meta name="author" content="Sakos Foundation">
		<meta name="keywords" content="Vypisky, OSS, Open School System for Students, OSSfS">
		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css">
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->