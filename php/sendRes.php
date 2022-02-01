<?php

//________________ A.1 LOCAL DB SETTINGS

define("DB_HOST", "localhost");
define("DB_NAME", "casa_antonio");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

//________________ A.2 PRODUCTION DB SETTINGS

/* define("DB_HOST", "db5006356542.hosting-data.io");
define("DB_NAME", "dbs5293489");
define("DB_CHARSET", "utf8");
define("DB_USER", "dbu7057");
define("DB_PASSWORD", "SQL_reservations2022@"); */

//________________ A.2.1 GLOBAL DB VARIABLES

$host = DB_HOST;
$db   = DB_NAME;
$user = DB_USER;
$pass = DB_PASSWORD;
$charset = DB_CHARSET;

//________________ A.3 POST DATA

$errors = [];

$date = $_POST["date"] ?? false;
if(!$date) $errors["date"] = "Veuillez selectionner une date";

$time = $_POST["time"] ?? false;
if(!$time) $errors["time"] = "Veuillez selectionner l'horaire";

$nom = $_POST["nom"] ?? false;
if(!$nom) $errors["nom"] = "Veuillez indiquer votre nom";

$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ?? false;
if(!$email) $errors["email"] = "Veuillez indiquer un mail valide";

$tel = $_POST["tel"] ?? false;
if(!$tel) $errors["tel"] = "Veuillez indiquer votre portable";

$people = $_POST["people"] ?? false;
if(!$people) $errors["people"] = "Veuillez indiquer le nombre d'adultes";

$enfant = $_POST["enfant"];
if(empty($enfant)) $enfant = 0;

date_default_timezone_set('Europe/Paris');
$created = date('d-m-Y H:i:s', time());

//________________ A.4 INSERT DATA INTO DB & SEND EMAILS

if(empty($errors)){
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	try {
		$pdo = new PDO($dsn, $user, $pass);

		$sqlSearch = "SELECT * FROM reservations WHERE res_date = :date";
		$stmt = $pdo->prepare($sqlSearch);
		$stmt->execute(array(":date" => $date));
		$dateArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$length = count($dateArray);

		if($length >= 6) {
			echo 'res_limit';
		} else {
			$sql = "INSERT INTO `reservations` (`res_date`, `res_time`, `res_name`, `res_email`, `res_tel`, `res_people`, `res_enf`, `res_creation`) VALUES (?,?,?,?,?,?,?,?)";
			$stmt2 = $pdo->prepare($sql);
			$stmt2->execute([$date, $time, $nom, $email, $tel, $people, $enfant, $created]);

			$receiver = "contact@lacasadiantonio.com";
			$subject = "Reservation le $date";
			$sujet2 = "Merci de votre réservation";
			$total = $people + $enfant;
			$message = "Nom : $nom\nEmail : $email\nTéléphone : $tel\n\nReservation : $date , à $time\n Personnes : $people\n Enfants : $enfant ";
			$message2 = "Merci de votre réservation.\n\nNous avons bien reçu votre réservation pour $total personnes et sommes prêts à vous accueillir le $date, à $time.\n\nCordialement,\nLa Casa Di Antonio.";
			$headers = 'From: La Casa Di Antonio <contact@lacasadiantonio.com>' . "\r\n" .
			'Reply-To: contact@lacasadiantonio.com' . "\r\n" .
			"Content-Type: text/plain; charset=\"utf-8\"\r\n" .
			'X-Mailer: PHP/' . phpversion();

			if(mail($receiver, $subject, $message, $headers)  && mail($email, $sujet2, $message2, $headers)){
				echo "Reservation effectuée. Confirmation envoyée par email";
			} else {
				echo "Reservation effectuée.";
			}
		 }

	} catch(\PDOException $e) {
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
		$errors["DB"] = "DB error!";
		echo "Erreur server";
	}
} else {
	echo json_encode($errors);
}
