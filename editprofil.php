<?php 
ob_start();
include('config.php'); 
?><!DOCTYPE html>
<html lang="fr">
		<head>
		  <title>Editer mon profil | Our Nails - Nail Art</title>
		  <meta charset="UTF-8">
		  <meta name="description" content="Morgane Desmidts - Web Designer">
		  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
		  <link rel="stylesheet" href="css/reset.css">
		  <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
		  <link rel="shortcut icon" href="img/favicon.png" />
		</head>
			  
		<body>

		<?php include('head.php');?>

		<div id="container">
		<section id="profil">
		 	<h2>Editer mon profil</h2>

		 <?php 
			if(isset($_SESSION['id']))
			{
				$requser = $pdo->prepare("SELECT * FROM membres WHERE id = ?");
				$requser->execute(array($_SESSION['id']));
				$user = $requser->fetch();

				if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
				{
					$newpseudo = htmlspecialchars($_POST['newpseudo']);
					$insertpseudo = $pdo->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
					$insertpseudo->execute(array($newpseudo, $_SESSION['id']));
					header('Location: profil.php?id='.$_SESSION['id']);
					exit;
				}

				if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
				{
					$newmail = htmlspecialchars($_POST['newmail']);
					$insertmail = $pdo->prepare("UPDATE membres SET mail = ? WHERE id = ?");
					$insertmail->execute(array($newmail, $_SESSION['id']));
					header('Location: profil.php?id='.$_SESSION['id']);
				}

				if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
				{
					$tailleMax = 2097152;
					$extensionValides = array('jpg', 'jpeg', 'png', 'gif');
					if($_FILES['avatar']['size'] <= $tailleMax)
					{
						$exentionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
						if(in_array($exentionUpload, $extensionValides))
						{
							$chemin = "membres/avatars/".$_SESSION['id'].".".$exentionUpload;
							$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
							if($resultat)
							{
								$updateAvatar = $pdo->prepare('UPDATE membres SET avatar = :avatar WHERE = :id');
								$updateAvatar->execute(array(
									'avatar' => $_SESSION['id'].".".$exentionUpload,
									'id' => $_SESSION['id']
									));
								header('Location: profil.php?id='.$_SESSION['id']);
							}
							else 
							{
								$erreur = "Une erreur s'est produite lors de l'importation du fichier.";
							}
						}
						else 
						{
							$erreur = "Votre photo de profil doit être au format jpg, jpeg, png ou gif.";
						}
					}
					else 
					{
						$erreur = "Votre photo de profil ne doit pas dépasser 2Mo.";
					}
				}

				if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
				{
					$mpd1 = sha1($_POST['newmdp1']);
					$mpd2 = sha1($_POST['newmdp2']);

					if($mpd1 == $mpd2)
					{
						$insertmdp = $pdo->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
						$insertmdp->execute(array($mpd1, $_SESSION['id']));
						header('Location: profil.php?id='.$_SESSION['id']);
					}
					else
					{
						$erreur = "Les deux mots de passes ne correspondent pas.";
					}
				}

				$requser = $pdo->prepare("SELECT * FROM membres WHERE id = ?");
				$requser->execute(array($_SESSION['id']));
				$user = $requser->fetch();

				if(isset($_POST['newpseudo']) AND $_POST['pseudo'] == $user['pseudo'])
				{
					header('Location: profil.php?id='.$_SESSION['id']);
				}
		?>

		 	<?php 
				if(isset($erreur))
				{
					echo $erreur;
				}
			?>

			<form method="POST" action="#">
		  		<input type="text" name="newpseudo" id="newpseudo" placeholder="Nom d'utilisateur" value="<?php echo $user['pseudo']; ?>" />
				<input type="text" name="newmail" id="newmail" placeholder="Adresse email" value="<?php echo $user['mail']; ?>" />
				<input type="password" name="newmdp1" id="newmdp1" placeholder="Mot de passe" />
				<input type="password" name="newmdp2" id="newmdp2" placeholder="Confirmation du mot de passe" />
				<input type="submit" value="Mettre à jour mes informations" />
			</form>

		</section> <!-- end profil -->
		</div><!-- end container -->

		<?php include('footer.php');?>
		</body>
</html>
<?php 
}
?>
