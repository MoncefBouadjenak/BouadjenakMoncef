<?php

if(isset($_POST['contact-form'])) {
    // récupérer les données et traiter le formulaire
}
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Construction du message à envoyer
  $to = "bouadjenakmoncef@gmail.com"; // votre adresse email ici
  $subject_email = "Nouveau message depuis votre site web";
  $body_email = "Nom: ".$name."\n\n";
  $body_email .= "Prénom: ".$surname."\n\n";
  $body_email .= "Email: ".$email."\n\n";
  $body_email .= "Téléphone: ".$phone."\n\n";
  $body_email .= "Objet: ".$subject."\n\n";
  $body_email .= "Message: \n".$message."\n";

  // Envoi de l'email
  if(mail($to, $subject_email, $body_email)) {
    echo "Merci, votre message a bien été envoyé !";
  } else {
    echo "Désolé, une erreur s'est produite. Votre message n'a pas pu être envoyé.";
  }
  
}

?>
