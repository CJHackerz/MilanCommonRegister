<?php
class User {
  // database connection and table name
  private $conn;
  // Object properties
  public $id;
  public $name;
  public $email;
  public $password;
  public $role;
  public $timestamp;
  public function __construct($db){
      $this->conn = $db;
  }
  public function newUser($name, $email, $password, $role) {
    $this->name = htmlspecialchars(strip_tags($name));
    $this->email = htmlspecialchars(strip_tags($email));
    $this->password = password_hash(htmlspecialchars(strip_tags($password)), PASSWORD_BCRYPT);
    $this->role = htmlspecialchars(strip_tags($role));

    $sql = "INSERT INTO user(name, email, password, role)
            VALUES(
              '$this->name',
              '$this->email',
              '$this->password',
              '$this->role'
            )";
    if($this->conn->query($sql)) {
      return true;
    } else {
      return false;
    }
  }

  public function login($name, $password) {
    $this->email = htmlspecialchars(strip_tags($email));
    $this->password = password_hash(htmlspecialchars(strip_tags($password)), PASSWORD_BCRYPT);

    $sql = "SELECT * FROM user where email = '$this->email' AND password = '$this->password'";

    $result = $this->conn->query($sql);

    if($result->num_rows > 0) {
      session_start();
      $row = $result->fetch_assoc();
      $_SESSION['user'] = $name;
      $_SESSION['role'] = $row['role'];
      return true;
    } else {
      return false;
    }
  }

  public function logout() {
    session_destroy();
    return true;
  }
}
?>
