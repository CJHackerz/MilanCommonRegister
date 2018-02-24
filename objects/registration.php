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
  public $events = array(
    'dance' => array(
      'western' => array(
        'text' => 'We',
        'set' => false
      ),
      'eastern' => array(
        'text' => '',
        'set' => false
      ),
      'doubles' => array(
        'text' => '',
        'set' => false
      ),
      'triples' => array(
        'text' => '',
        'set' => false
      ),
      'bollywood' => array(
        'text' => '',
        'set' => false
      ),
      'group' => array(
        'text' => '',
        'set' => false
      ),
      'choreo_theme' => array(
        'text' => '',
        'set' => false
      ),
      'choreo_nontheme' => array(
        'text' => '',
        'set' => false
      )
    ),
    'fashion' => array(
      'text' => '',
      'set' => false
    ),
    'creative' => array(
      'road' => array(
        'text' => '',
        'set' => false
      ),
      'collage' => array(
        'text' => '',
        'set' => false
      ),
      'face' => array(
        'text' => '',
        'set' => false
      ),
      'mask' => array(
        'text' => '',
        'set' => false
      )
    ),
    'literary' => array(

    )
  );
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

  public function selectAll() {
    $sql = "SELECT * FROM registration";

    return $this->conn->query($sql);
  }

}
?>
