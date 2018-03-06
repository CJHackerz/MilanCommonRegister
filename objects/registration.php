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
  public $domains = array(
    0 => array(
      'text' => 'Dance',
      'value' => 'dance'
    ),
    1 => array(
      'text' => 'Fashion',
      'value' => 'fashion'
    ),
    2 => array(
      'text' => 'Creative',
      'value' => 'creative'
    ),
    3 => array(
      'text' => 'Literary',
      'value' => 'literary'
    ),
    4 => array(
      'text' => 'Drama',
      'value' => 'drama'
    ),
    5 => array(
      'text' => 'Music',
      'value' => 'music'
    ),
  );

  public $events = array(
    'dance'   => array(
      'western' => array(
        'text'    => 'Western Solo',
        'set'     => false
      ),
      'eastern' => array(
        'text'    => 'Eastern Solo',
        'set'     => false
      ),
      'doubles' => array(
        'text'    => 'Doubles',
        'set'     => false
      ),
      'triples' => array(
        'text'    => 'Triples',
        'set'     => false
      ),
      'bollywood' => array(
        'text'    => 'Folk/Bollywood Battle',
        'set'     => false
      ),
      'group' => array(
        'text'    => 'Group Battle',
        'set'     => false
      ),
      'choreo_theme' => array(
        'text'    => 'Choreo Night (theme)',
        'set'     => false
      ),
      'choreo_nontheme' => array(
        'text'    => 'Choreo Night (non themed)',
        'set'     => false
      )
    ),

    'fashion' => array(
      'ramp' => array(
        'text'    => '',
        'set'     => false
      ),
      'designer' => array(
        'text'    => 'Designer Round',
        'set'     => false
      ),
      'mrmsmilan' => array(
        'text'    => 'Mr & Mrs Milan',
        'set'     => false
      )
    ),

    'creative' => array(
      'road' => array(
        'text'    => 'Road Painting',
        'set'     => false
      ),
      'collage' => array(
        'text'    => 'Collage Making',
        'set'     => false
      ),
      'face' => array(
        'text'    => 'Face Painting',
        'set'     => false
      ),
      'mask' => array(
        'text'    => 'Mask Making',
        'set'     => false
      ),
      'tshirt' => array(
        'text'    => 'T-Shirt Painting',
        'set'     => false
      ),
      'potrait' => array(
        'text'    => 'Potrait Making',
        'set'     => false
      ),
      'wall' => array(
        'text'    => 'Wall Painting',
        'set'     => false
      )
    ),

    'literary' => array(
      'poetry' => array(
        'text'    => 'Poetry Out Loud',
        'set'     => false
      ),
      'jam' => array(
        'text'    => 'Just a Minute',
        'set'     => false
      ),
      'shipwreck' => array(
        'text'    => 'Shipwreck',
        'set'     => false
      ),
      'newsrace' => array(
        'text'    => 'Newsrace: The Journalism Event',
        'set'     => false
      ),
      'block' => array(
        'text'    => 'Block And Tackle',
        'set'     => false
      ),
      'comic' => array(
        'text'    => 'Comic Script',
        'set'     => false
      ),
      'inquisition' => array(
        'text'    => 'Inquisition',
        'set'     => false
      )
    ),

    'drama' => array(
      'street' => array(
        'text'    => 'The Street Play',
        'set'     => false
      ),
      'stage' => array(
        'text'    => 'The Stage Play',
        'set'     => false
      ),
      'spotlight' => array(
        'text'    => 'Spotlight',
        'set'     => false
      ),
      'mime' => array(
        'text'    => 'Mime',
        'set'     => false
      ),
      'lights' => array(
        'text'    => 'Lights Camera Action!',
        'set'     => false
      ),
      'act' => array(
        'text'    => 'Can you Act?',
        'set'     => false
      )
    ),

    'music' => array(
      'western' => array(
        'text'    => 'Western Solo',
        'set'     => false
      ),
      'eastern' => array(
        'text'    => 'Eastern Solo',
        'set'     => false
      ),
      'classical' => array(
        'text'    => 'Classical and Regional Solo',
        'set'     => false
      ),
      'instrumental' => array(
        'text'    => 'Solo Instrumental',
        'set'     => false
      ),
      'easternvocal' => array(
        'text'    => 'Eastern Vocal Duet',
        'set'     => false
      ),
      'westernvocal' => array(
        'text'    => 'Western Vocal Duet',
        'set'     => false
      ),
      'fusion' => array(
        'text'    => 'Vocal Fusion',
        'set'     => false
      ),
      'bobwestern' => array(
        'text'    => 'BOB Western',
        'set'     => false
      ),
      'bobeastern' => array(
        'text'    => 'BOB Eastern',
        'set'     => false
      ),
      'rap' => array(
        'text'    => 'Rap Battle',
        'set'     => false
      ),
      'dj' => array(
        'text'    => 'DJ Battle',
        'set'     => false
      )
    )
  );
  public $payment;
  public $timestamp;

  public function __construct($db){
      $this->conn = $db;
  }
  public function newRegistration($name, $college_name, $phone, $registerer, $milan_id, $payment) {
    $this->name = htmlspecialchars(strip_tags($name));
    $this->college_name = htmlspecialchars(strip_tags($college_name));
    $this->phone = htmlspecialchars(strip_tags($phone));
    $this->registerer = htmlspecialchars(strip_tags($registerer));
    $this->milan_id = htmlspecialchars(strip_tags($milan_id));
    $this->payment = $payment;

    $events = json_encode($this->events);

    $sql = "INSERT INTO registration(name, college_name, phone, registerer, milan_id, events, payment)
            VALUES(
              '$this->name',
              '$this->college_name',
              '$this->phone',
              '$this->registerer',
              '$this->milan_id',
              '$events',
              $this->payment
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
      return $result->fetch_assoc();
    } else {
      return false;
    }
  }

  public function selectAll() {
    $sql = "SELECT * FROM registration";

    return $this->conn->query($sql);
  }

  public function updateEvent($milan_id, $domain, $event) {
    $row = $this->selectParticipant($milan_id);
    $ev = json_decode($row['events'], true);

    if(!$ev[$domain][$event]['set']) {
      $ev[$domain][$event]['set'] = true;
      $ev = json_encode($ev);
      $sql = "UPDATE registration SET events = '$ev' where milan_id = '$milan_id'";

      if($this->conn->query($sql)) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
?>
