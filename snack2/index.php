<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
  // var_dump($_GET);
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
  $message = '';

  if (empty($name) || empty($mail) || empty($age)) {
    $message = 'errore';
  }
  elseif (strlen($name) <= 3) {
    $message = 'accesso negato!';
  }elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
    $message = 'accesso riuscito';
  }elseif (!is_numeric($age)) {
    $message = 'accesso riuscito';
  }else {
    $message = 'accesso riuscito';
  }
  echo $message;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
