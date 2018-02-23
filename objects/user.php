<?php
class User {
  // database connection and table name
  private $conn;
  // Object properties
  public $id;
  public $name;
  public $email;
  public $password;
  public $timestamp;
  public function __construct($db){
      $this->conn = $db;
  }
  public function newUser($name, $email, $password) {
    $this->name = htmlspecialchars(strip_tags($name));
    $this->email = htmlspecialchars(strip_tags($email));
    $this->password = password_hash(htmlspecialchars(strip_tags($password)), PASSWORD_BCRYPT);

    $sql = "INSERT INTO user(name, email, password)
            VALUES(
              '$this->name',
              '$this->email',
              '$this->password'
            )";
    if($this->conn->query($sql)) {
      return true;
    } else {
      return false;
    }
  }

  public function loginUser($name, $password) {
    $this->email = htmlspecialchars(strip_tags($email));
    $this->password = password_hash(htmlspecialchars(strip_tags($password)), PASSWORD_BCRYPT);

    $sql = "SELECT * FROM user where email = '$this->email' AND password = '$this->password'";

    $result = $this->conn->query($sql);

    if($result->num_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

}
?>
