<?php

if (isset($_POST["acao"])) {
	if ($_POST["acao"] == "inserir") {
		inserirPlaylist();
	}
	if ($_POST["acao"] == "alterar") {
		alterarPlaylist();
	}
	if ($_POST["acao"] == "excluir") {
		excluirPlaylist();
	}
}

function abrirBanco() {
	$conexao = new mysqli("localhost", "root", "", "musicasbd");
	return $conexao;
}

function inserirPlaylist() {
	$musicasbd = abrirBanco();
	$sql = "INSERT INTO playlist (nome_playlist) VALUES ('{$_POST["nome_playlist"]}')";
	$musicasbd->query($sql);
	$musicasbd->close();
	voltarIndex();
}

function alterarPlaylist() {
	$musicasbd = abrirBanco();
	$sql = "UPDATE playlist SET nome_playlist = '{$_POST["nome_playlist"]}' WHERE id_playlist = '{$_POST["id_playlist"]}'";
	$musicasbd->query($sql);
	$musicasbd->close();
	voltarIndex();
}

function excluirPlaylist() {
	$musicasbd = abrirBanco();
	$sql = "DELETE FROM PLAYLIST WHERE id_playlist = '{$_POST["id_playlist"]}'";
	$musicasbd->query($sql);
	$musicasbd->close();
	voltarIndex();
}

function selectAllPlaylist() {
	$musicasbd = abrirBanco();
	$sql = "SELECT * FROM PLAYLIST ORDER BY nome_playlist";
	$resultado = $musicasbd->query($sql);
	while ($row = mysqli_fetch_array($resultado)) {
		$grupo[] = $row;
	}
	return $grupo;
}

function selectIdPlaylist($id_playlist) {
	$musicasbd = abrirBanco();
	$sql = "SELECT * FROM PLAYLIST WHERE id_playlist = ".$id_playlist;
	$resultado = $musicasbd->query($sql);
	$playlist = mysqli_fetch_assoc($resultado);
	return $playlist;
}

function voltarIndex() {
	header("Location: index.php");	
}

?>
