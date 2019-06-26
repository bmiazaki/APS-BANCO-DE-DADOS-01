<?php


?>

<meta charset = "UTF-8">
<form name = "playlist" action = "conexao.php" method = "POST">
	<table border = "1">
		<tbody>
			<tr>
				<td>Nome da Playlist</td>
				<td><input type = "text" name = "nome_playlist" value = "" /></td>
			</tr>
			<tr>
				<td><input type = "hidden" name = "acao" value = "inserir"/></td>
				<td><input type = "submit" value = "Enviar" name = "Enviar"/></td>
			</tr>
		</tbody>
	</table>
</form>
