<?php include "conexao.php";
	$playlist = selectIdPlaylist($_POST["id_playlist"]);

?>

<meta charset = "UTF-8">
<form name = "playlist" action = "conexao.php" method = "POST">
	<table border = "1">
		<tbody>
			<tr>
				<td>Nome da Playlist</td>
				<td><input type = "text" name = "nome_playlist" value = "<?=$playlist["nome_playlist"]?>" size = "20"/></td>
			</tr>
			<tr>
				<td>
					<input type = "hidden" name = "acao" value = "alterar"/>
					<input type = "hidden" name = "id_playlist" value = "<?=$playlist["id_playlist"]?>"/>
					
				</td>
				<td><input type = "submit" value = "Enviar" name = "Enviar"/></td>
			</tr>
		</tbody>
	</table>
</form>
