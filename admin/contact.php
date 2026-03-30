<?php
include('./include/header.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='ridabatool306@gmail.com';
    $mail->Password='hxzzrjucljdiccnh';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('ridabatool306@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];

    $mail->send();

    echo
    "
    <script> 
    alert('Send Successfully');
    document.location.href='contact.php';
    </script>
    ";
}


include('./connection.php');
?>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
            <div class="login-brand">
              Otika
            </div>
            <div class="card card-primary">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-5 p-0">
                  <div class="card-header text-center">
                    <h4>Reply</h4>
                  </div>
                  <div class="card-body">
                    <form method="post">
                      
                      <div class="form-group floating-addon">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-envelope"></i>
                            </div>
                          </div>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Subject</label>
                        <textarea class="form-control" placeholder="Type your Subject" name="subject" data-height="150"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" placeholder="Type your message" data-height="150"></textarea>
                      </div>
                      <div class="form-group text-right">
                        <button type="submit" name="send" class="btn btn-round btn-lg btn-primary">
                          Send Message
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7 p-0">
                  <div id="map" class="contact-map"></div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
<?php
include('./include/footer.php');
?>