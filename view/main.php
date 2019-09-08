<!DOCTYPE html>
<html lang="cs">
	<head>
		<?php
			header("X-XSS-Protection: 1; mode=block");
			header('X-Frame-Options: SAMEORIGIN');
			header('X-Content-Type-Options: nosniff');
			header('Referrer-Policy: no-referrer');
		?>
		<base href="/" />
		<meta http-equiv="Content-Security-Policy" content="default-src 'self'; 
			img-src *; 
			script-src 'self';
			object-src 'none';
			font-src 'self' data: " />	
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="OpenSchoolSystem for Students je součást kitu OpenSchoolSystem určená pro provozování třídního webu. Umožňuje sdílení souborů, využívání diáře a obsahuje chatroom." />
		<meta name="author" content="Sakos Foundation" />
		<meta name="keywords" content="Vypisky, OSS, Open School System for Students, OSSfS" />
		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<title><?= htmlspecialchars($title) ?> | OSSfS</title>
	</head>
	
	<body 
		<?php $this->control->drawNavbar(); ?>
		
			<article>
			<?php $this->control->drawView(); ?>
			</article>
		</div>
		
		<footer class="page-footer font-small">
			<div class="footer-copyright text-center py-3">
				Sakos Foundation, 2018-<?php echo date("Y"); ?><br />
				OSSfS využívá <a href="https://getbootstrap.com/" target="_blank">bootstrap.css</a><br />
				Zdrojový kód projektu: <a href="https://github.com/sakos-foundation/OpenSchoolSystem-for-Students" target="_blank">GitHub</a><br />
				<a href="changelog/changelog.html" target ="_blank" title="Changelog">Verze 0.1</a>
			</div>
		</footer>
		<script src="assets/js/jquery.min.js"></script>	
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>