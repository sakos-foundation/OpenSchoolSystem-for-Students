<h2 class="text-center">Všechny soubory</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th scope="col">Název</th>
			<th scope="col">Předmět</th>
			<th scope="col">Autor</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($files as $file) : ?>
			<tr>
				<td>
					<a href="file/<?= htmlspecialchars($file['files_id']) ?>"><?= htmlspecialchars($file['name']) ?></a>
				</td>
				<td>
					<?= htmlspecialchars($file['subject']) ?>
				</td>
				<td>
					<?= htmlspecialchars($file['author']) ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>