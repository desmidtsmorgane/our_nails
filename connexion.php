<?php include('config.php'); 
?><!DOCTYPE html>
<html lang="fr">
		<head>
		  <title>Connexion | Our Nails - Nail Art</title>
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
		<section id="connexion">
			<h2>Connexion</h2>
				<?php
				if(isset($_SESSION['pseudo']))
				{
					unset($_SESSION['pseudo'], $_SESSION['id']);
				?>
				<div class="message">Vous avez bien &eacute;t&eacute; d&eacute;connect&eacute;.<br />
				<a href="<?php echo $url_home; ?>" class="button">Retour à l'accueil</a></div>
				<?php
				}
				else
				{
					if(isset($_POST['pseudoconnect'], $_POST['mdpconnect']))
					{
						if(get_magic_quotes_gpc())
						{
							$pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
							$mdpconnect = sha1($_POST['mdpconnect']);
						}
						else
						{
							$pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
							$mdpconnect = sha1($_POST['mdpconnect']);
						}
							$requser = $pdo->prepare("SELECT * FROM membres WHERE pseudo = ? AND motdepasse = ?");

		               		$requser->execute(array($pseudoconnect, $mdpconnect));
							$userexist = $requser->rowCount();
						if($userexist == 1)
						{
							$form = false;
							$userinfo = $requser->fetch();
							$_SESSION['id'] = $userinfo['id'];
							$_SESSION['pseudo'] = $userinfo['pseudo'];
							$_SESSION['mail'] = $userinfo['mail'];
				?>
				<div class="message">Vous avez bien &eacute;t&eacute; connect&eacute;. Vous pouvez acc&eacute;der &agrave; votre espace membre.<br />
				<a href="<?php echo "profil.php?id=".$_SESSION['id']; ?>" class="button">Accéder à mon profil</a></div>
				<?php
						}
						else
						{
							$form = true;
							$erreur = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
						}
					}
					else
					{
						$form = true;
					}
					if($form)
					{
					if(isset($erreur))
					{
						echo '<div class="message">'.$erreur.'</div>';
					}
				?>
				    <form action="#" method="POST">
				        <input type="text" name="pseudoconnect" placeholder="Nom d'utilisateur" value="<?php if(isset($pseudoconnect)) { echo $pseudoconnect; }?>" />
				        <input type="password" name="mdpconnect" placeholder="Mot de passe"/>
				        <input type="submit" name="formconnexion" value="Se connecter" />
				    </form>

				<?php
					}
				}
				?>
		</section> <!-- end section connexion -->
		</div> <!-- end container -->
		<? include('footer.php'); ?>
		</body>
</html>
