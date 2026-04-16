<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$tipo = $_POST["tipo"];

$sentencia = $mysql -> prepare("INSERT INTO videojuegos (nombre, descripcion, tipo) VALUES (?, ?, ?)");
$sentencia->bind_param("ss", $nombre, $descripcion, $tipo);
$sentencia->execute();

// UN cop fet el INSERT, obtenim l'ID de la nova fila
$id = mysql->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];

// redigirir a una pág de avís, passant l'id per paràmetre
header("Location: mostrar.php");
