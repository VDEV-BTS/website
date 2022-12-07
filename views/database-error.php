<?php
include_once "./database/data-source.php";

$database = new DataSource();
if (isset($database->database)) {
  header("Location: /");
}
?>

<div>Erreur de base de donnée</div>