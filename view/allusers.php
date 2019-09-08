<h2 class="text-center">Všichni uživatelé</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Uživatel</th>
			<th scope="col">Přezdívka</th>
			<th scope="col">Ocenění</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user) : ?>
			<tr>
				<td>
					<?= htmlspecialchars($user['users_id']) ?>
				</td>
				<td>
					<a href="user/<?= htmlspecialchars($user['username']) ?>"><?= htmlspecialchars($user['username']) ?></a>
				</td>
				<td>
					<?= htmlspecialchars($user['nickname']) ?>
				</td>
				<td>
					<?= htmlspecialchars($user['ranks']) ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>