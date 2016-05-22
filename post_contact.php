	<?php


	var_dump($_POST);


	$erros = [];

	if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
		$errors['name'] =  "Merci de renseigner votre nom";
	}

	if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
		$errors['subject'] =  "Merci de renseigner le sujet de votre mail";
	}

	if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors['email'] =  "Merci de renseigner une adresse mail valide";
	}

	if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
		$errors['message'] =  "Merci de ne pas envoyer un mail vide :)";
	}
		session_start();

	if(!empty($errors)){


		$_SESSION['errors'] = $errors;
		$_SESSION['inputs'] = $_POST;
		header('Location: index.php');

	}else{

	$_SESSION['success']=1;
	$message = $_POST['message'];
	$headers = $_POST['email'];


	mail('contact@clement-marie.fr', 'Formulaire de contact', $message, $headers);

	header('Location:index.php');
	}


	var_dump($errors);
	die();



	?>