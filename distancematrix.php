<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Test Distance Matrix</title>
		<script src="https://use.fontawesome.com/03de1f66e2.js"></script>
	</head>
	<body>
		<form method="post">
			Prénom :
			<input type="text" name="firstname">
			Nom :
			<input type="text" name="lastname">
			<br>
			<br>
			Numéro de Téléphone :
			<input type="tel" name="tel">
			<br>
			<br>
			Date de Naissance :
			<input type="date" name="birthday">
			<br>
			<br>
			Adresse :
			<a id="btnLoc"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></a>
			<input type="text" id="inputAddress" name="address">
			<p id="addressMessage" style="display: none;"></p>
			<br>
			<br>
			E-mail :
			<input type="email" name="email">
			<br>
			<br>
			Mot de passe :
			<input type="password" name="password">
			Confirmation :
			<input type="password" name="passwordConf">
			<br>
			<br>
			<input type="submit" value="Inscription">
			<?php
			//Connexion à la base de donnée : sendwish_test
			$bdd = new PDO('mysql:host=localhost; dbname=sendwish_test;charset=utf8','root','');
			if (isset($_POST['firstname']) && !empty($_POST['firstname']) &&
				isset($_POST['lastname']) && !empty($_POST['lastname']) &&
				isset($_POST['address']) && !empty($_POST['address']) &&
				isset($_POST['email']) && !empty($_POST['email']) &&
				isset($_POST['tel']) && !empty($_POST['tel']) &&
				isset($_POST['birthday']) && !empty($_POST['birthday']) &&
				isset($_POST['password']) && !empty($_POST['password']) &&
				isset($_POST['passwordConf']) && !empty($_POST['passwordConf']) &&
				$_POST['password'] === $_POST['passwordConf']
			) {
					// $varFirstName = htmlspecialchars($_POST['firstname']);
					// $varLastName = htmlspecialchars($_POST['lastname']);
					// $varAddress = htmlspecialchars($_POST['address']);
					// $varEmail = htmlspecialchars($_POST['email']);
					// $varTel = htmlspecialchars($_POST['tel']);
					// $varBrithday = htmlspecialchars($_POST['birthday']);
					// $varPassWord = htmlspecialchars($_POST['password']);
					// $varPassWordConf = htmlspecialchars($_POST['passwordConf']);;
					// //Insertion SQL
					// $addUsers = $bdd->prepare("INSERT INTO users (lastname, firstname)
					// 					VALUES (:lastN, :firstN)
					// 					");
					// $addUsers->execute(array(
					// 					'lastN' => $varLastName,
					// 	'firstN' => $varFirstName,
					// ));
					// $addAddress = $bdd->prepare("INSERT INTO address (formatted, telephone)
					// 					VALUES (:add, :phone)
					// 					");
					// $addAddress->execute(array(
					// 	'add' => $varAddress,
					// 	'phone' => $varTel,
					// ));
					// $addAccess = $bdd->prepare("INSERT INTO access (password, mail)
					// 					VALUES (:passW, :em)
					// 					");
					// $addAccess->execute(array(
					// 	'passW' => $varPassWord,
					// 	'em' => $varEmail,
					// ));
				}
			?>
		</form>
		<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkeHVc5oyBqsO1mjf7xwA4vrdVS12O6oI&callback=init">
		</script>
		<script src="js/scriptDM.js"></script>
	</body>
</html>