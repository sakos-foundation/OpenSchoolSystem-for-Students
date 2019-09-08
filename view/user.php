<div class="container">	
	<div class="row">
		<div class="col-sm-3">
			<img class="img-thumbnail float-left" src="files/avatars/<?= htmlspecialchars($avatar) ?>" alt="Avatar uživatele <?= htmlspecialchars($username) ?>" width="200" height="200" />
		</div>
		<div class="col-sm-1">
			
		</div>
		<div class="col-sm-8">
			<h1 class="text-center"><?= htmlspecialchars($username) ?> <?php if($nickname){echo '"'.htmlspecialchars($nickname).'"';}?></h1>
			<p><?= htmlspecialchars($description) ?></p>
		</div>
	</div>
</div>