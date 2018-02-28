<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;

class Mail {
  private $mailgun;

  public function __construct() {
    $this->mailgun = Mailgun::create('key-28f57d982d256aa39f2fa195678151b3');
  }

  public function newUserMail($email, $name, $password) {
    return $this->mailgun->messages()->send('webarchsrm.com', [
      'from'    => 'milan@webarchsrm.com',
      'to'      => $email,
      'subject' => 'Milan Registration Login',
      'html'    => '<html>

      Click
      <a href="http://register.srmmilan.in/user/login.php">HERE</a> to login. <br> <b>Details</b> <br>Name: ' . $name . '<br>Password: ' . $password .
      '<br>
        <a href="https://webarchsrm.com"><img src="../webarch_logo.png"></a>
      </html>'
    ]);
  }

}

?>
