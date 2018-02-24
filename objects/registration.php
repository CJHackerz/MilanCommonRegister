<?php
class Registration {
  // database connection and table name
  private $conn;
  // Object properties
  public $id;
  public $name;
  public $college_name;
  public $phone;
  public $registerer;
  public $milan_id;
  public $events;
  public $timestamp;

  public function __construct($db){
      $this->conn = $db;
  }
  public function newRegistration($name, $college_name, $phone, $registerer, $milan_id) {
    $this->name = htmlspecialchars(strip_tags($name));
    $this->college_name = htmlspecialchars(strip_tags($college_name));
    $this->phone = htmlspecialchars(strip_tags($phone));
    $this->registerer = htmlspecialchars(strip_tags($registerer));
    $this->milan_id = htmlspecialchars(strip_tags($milan_id));

    $sql = "INSERT INTO registration(name, college_name, phone, registerer, milan_id)
            VALUES(
              '$this->name',
              '$this->college_name',
              '$this->phone',
              '$this->registerer',
              '$this->milan_id'
            )";
    if($this->conn->query($sql)) {
      return true;
    } else {
      return false;
    }
  }

  public function selectParticipant($milan_id) {
    $this->milan_id = htmlspecialchars(strip_tags($milan_id));
    $sql = "SELECT * FROM registration where milan_id = '$milan_id'";

    $result = $this->conn->query($sql);

    if($result->num_rows > 0) {
      return result->fetch_assoc();
    } else {
      return false;
    }
  }

}
?>
