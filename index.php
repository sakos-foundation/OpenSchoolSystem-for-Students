		<?php 
			include("head.php");
		?>
		<title>Přihlášení | OSSfS</title>
	</head>

	<body>
		<div class="container">	
			<h2>Přihlášení</h2>
			<p>Pro možnost pokračovat na stránku OSSfS je třeba se přihlásit.</p>
			   
			<form action="" method="post">
				<div class="form-group">
					<label for="username">Uživatelské jméno:</label>
					<input type="text" name="username" class="form-control" placeholder="Zde zadejte své uživatelské jméno" autofocus required>
					<span class="help-block"></span>
				</div> 
					
				<div class="form-group">
					<label for="password">Heslo:</label>
					<input type="password" name="password" class="form-control" placeholder="Zde zadejte své heslo" required>
					<span class="help-block"></span>
				</div>
					
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Přihlásit se">
				</div>
			</form>
		</div>
	<?php
		include("footer.php");
	?>