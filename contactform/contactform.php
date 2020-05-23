<?php
  /**
  * Requires the PHP Mail Form library
  * The PHP Mail Form library is available only in the pro version of the template
  * The library should be uploaded to: lib/php-mail-form/php-mail-form.php
  * For more info and help: https://templatemag.com/php-mail-form/
  */

  /*if( file_exists($php_mail_form_library = '../lib/php-mail-form/php-mail-form.php' )) {
    include( $php_mail_form_library );
  } else {
    die( 'Unable to load the PHP Mail Form Library!');
  }*/

 /* $contactform = new PHP_Mail_Form;
  $contactform->ajax = true;

  // Replace with your real receiving email address
  $contactform->to = 'isabelsalesdca@gmail.com';
  $contactform->from_name = $_POST['name'];
  $contactform->from_email = $_POST['email'];
  $contactform->subject = $_POST['subject'];

  $contactform->add_message( $_POST['name'], 'From');
  $contactform->add_message( $_POST['email'], 'Email');
  $contactform->add_message( $_POST['message'], 'Message', 10);

  echo $contactform->send();*/
  
  
$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$menssagem = $_POST['message'];


$to = "isabelsalesdca@gmail.com";
$subject = "$assunto";
$menssagem = "<strong>Nome:</strong> $nome<br /><br /><strong>E-mail:</strong>$email<br /><br /><strong>Assunto:</strong> $assunto<br /><br /><strong>Menssagem:</strong> $menssagem ";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";
mail($to, $subject, $menssagem,$header);
echo "Enviado com sucesso!";
  
  
  
?>
