<?php
session_start();
$conexion = mysqli_connect('localhost', 'root', '', 'system innovation');
$select = "SELECT * FROM registrosastreria";
$result = $conexion->query($select);




?>