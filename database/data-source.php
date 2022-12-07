<?php
class DataSource
{
  public $database = null;

  function __construct()
  {
    try {
      $this->database = new PDO("mysql:host=localhost;dbname=VDEV", "root", "root");
      $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      $this->database = null;
      if ($_SERVER['REQUEST_URI'] !== "/database-error") {
        header("Location: /database-error");
      }
    }
  }
}
