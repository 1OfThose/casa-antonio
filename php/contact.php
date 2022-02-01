<?php

	$name = $_POST['nom'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sujet = $_POST['sujet'];

/* 	$eCute = chr(233);
	$eGrave = chr(232);
	$aCute = chr(224);
	$cCedi = chr(231); */

	$sujet2 = "Votre message pour La Casa Di Antonio";
	$message2 = "Merci de nous avoir contactés\n\nLa Casa Di Antonio a bien reçu votre message et vous répondra dans les plus brefs dèlais.\n(Nous pouvons vous re-contacter directement par téléphone dans certains cas, pour des questions de rapidité)\n\nCordialement,\nLa Casa Di Antonio.";

	if(!empty($email) && !empty($message)){	
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){

			$receiver = "contact@lacasadiantonio.com";
			$subject = $sujet;
			$body = "Nom : $name\nEmail : $email\nTéléphone : $tel\n\nMessage : \n$message";
			$headers = 'From: La Casa Di Antonio <contact@lacasadiantonio.com>' . "\r\n" .
			'Reply-To: contact@lacasadiantonio.com' . "\r\n" .
			"Content-Type: text/plain; charset=\"utf-8\"\r\n" .
			'X-Mailer: PHP/' . phpversion();

			if(mail($receiver, $subject, $body, $headers)  && mail($email, $sujet2, $message2, $headers)){
				echo "Le message à bien été envoyé!";
			} else {
				echo "Le message n'as pas pu être envoyé :(";
			}

		} else {
			echo "Votre email n'est pas valide!";
		}

	} else {
		echo "Email et message sont obligatoires!";
	}
?>