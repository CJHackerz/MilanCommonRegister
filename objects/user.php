<?php
include_once '../objects/mail.php';


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
  public function newUser($name, $email, $role) {
    $this->name = htmlspecialchars(strip_tags($name));
    $this->email = htmlspecialchars(strip_tags($email));
    $uniq_password = uniqid();
    $this->password = password_hash($uniq_password, PASSWORD_DEFAULT);
    $this->role = htmlspecialchars(strip_tags($role));

    $sql = "INSERT INTO user(name, email, password, role)
            VALUES(
              '$this->name',
              '$this->email',
              '$this->password',
              '$this->role'
            )";
    if($this->conn->query($sql)) {
      $mail = new Mail();
      return $mail->newUserMail($this->email, $this->name, $uniq_password);
    } else {
      return false;
    }
  }

  public function login($email, $password) {
    $this->email = htmlspecialchars(strip_tags($email));
    $this->password = htmlspecialchars(strip_tags($password));

    $sql = "SELECT * FROM user where email = '$this->email'";

    $result = $this->conn->query($sql);
    $row = $result->fetch_assoc();
    
    if(password_verify($this->password, $row['password'])) {
      session_start();
      $_SESSION['user'] = $row;
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
