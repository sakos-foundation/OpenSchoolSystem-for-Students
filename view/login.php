<div class="container">	
	<h2>Přihlášení</h2>
	<p>Pro možnost pokračovat na stránku OSSfS je třeba se přihlásit.</p>
			   
	<form method="post">
		<div class="form-group">
			<label for="username">Uživatelské jméno:</label>
			<input type="text" name="username" id="username" class="form-control" placeholder="Zde zadejte své uživatelské jméno" value="<?php if(isset($_POST['username'])){echo(htmlspecialchars($_POST['username']));} ?>" autofocus required="required" autocomplete>
			<span class="form-text text-muted"><?= htmlspecialchars($username_err) ?></span>
		</div> 
					
		<div class="form-group">
			<label for="password">Heslo:</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Zde zadejte své heslo" required="required">
			<span class="form-text text-muted"><?= htmlspecialchars($password_err) ?></span>
		</div>
					
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Přihlásit se" name="login">
		</div>
	</form>
</div>