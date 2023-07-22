<?php
$marca = $_GET['marca'];

// Simulação da consulta ao banco de dados
if ($marca == "xiaomi") {
  $peliculas = array(
    array("marca" => "Xiaomi", "modelo" => "Modelo 1", "compatibilidade" => "Compatibilidade 1"),
    array("marca" => "Xiaomi", "modelo" => "Modelo 2", "compatibilidade" => "Compatibilidade 2"),
    array("marca" => "Xiaomi", "modelo" => "Modelo 3", "compatibilidade" => "Compatibilidade 3")
  );
} else if ($marca == "apple") {
  $peliculas = array(
    array("marca" => "Apple", "modelo" => "Modelo 4", "compatibilidade" => "Compatibilidade 4"),
    array("marca" => "Apple", "modelo" => "Modelo 5", "compatibilidade" => "Compatibilidade 5")
  );
} else {
  $peliculas = array();
}

echo json_encode($peliculas);
?>