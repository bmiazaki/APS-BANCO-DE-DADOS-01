<?php include("conexao.php");
	$grupo = selectAllPlaylist();

?>

<html>
	<head>
		<meta charset = "UTF-8">
		<title>Projeto BD1</title>
	</head>
	<body>
		<h1>Playlist</h1>
		<a href = "inserir.php"> Add Playlist </a>
		
		<table border = "1">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($grupo as $playlist) { ?>
						<tr>
							<td><?=$playlist["nome_playlist"]?></td>
							<td>
								<form name = "alterar" action = "alterar.php" method = "POST">
									<input type = "hidden" name = "id_playlist" value = <?=$playlist["id_playlist"]?> />
									<input type = "submit" value = "Editar" name = "Editar" />									
								</form>
							</td>
							<td>
								<form name = "Excluir" action = "conexao.php" method = "POST">
									<input type = "hidden" name = "id_playlist" value = "<?=$playlist["id_playlist"]?>" />
									<input type = "hidden" name = "acao" value = "excluir" />
									<input type = "submit" value = "Excluir" name = "excluir" />									
								</form>
							</td>
						</tr>
					<?php }
				?>
			</tbody>
		</table>
		<?php 
			//content
		?>
	</body>
</html>
