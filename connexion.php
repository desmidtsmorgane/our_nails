<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Se connecter | Ours Nails - Nail Art</title>
  <meta charset="UTF-8">
  <meta name="description" content="Morgane Desmidts - Web Designer">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
  <link rel="shortcut icon" href="img/favicon.png" />
</head>

<body>

<?php include('header.php');?>

<div id="container">
<section id="connexion">
	<h1>Se connecter</h1>
		<?php
		//Si lutilisateur est connecte, on le deconecte
		if(isset($_SESSION['username']))
		{
			//On le deconecte en supprimant simplement les sessions username et userid
			unset($_SESSION['username'], $_SESSION['userid']);
		?>
		<div class="message">Vous avez bien &eacute;t&eacute; d&eacute;connect&eacute;.<br />
		<a href="<?php echo $url_home; ?>" class="button">Retour à l'accueil</a></div>
		<?php
		}
		else
		{
			$ousername = '';
			//On verifie si le formulaire a ete envoye
			if(isset($_POST['username'], $_POST['password']))
			{
				//On echappe les variables pour pouvoir les mettre dans des requetes SQL
				if(get_magic_quotes_gpc())
				{
					$ousername = stripslashes($_POST['username']);
					$username = mysql_real_escape_string(stripslashes($_POST['username']));
					$password = stripslashes($_POST['password']);
				}
				else
				{
					$username = mysql_real_escape_string($_POST['username']);
					$password = $_POST['password'];
				}
				//On recupere le mot de passe de lutilisateur
				$req = mysql_query('select password,id from users where username="'.$username.'"');
				$dn = mysql_fetch_array($req);
				//On le compare a celui quil a entre et on verifie si le membre existe
				//if($dn['password']==$password and mysql_num_rows($req)>0)
				if($dn['password']==sha1($password) and mysql_num_rows($req)>0)
				{
					//Si le mot de passe es bon, on ne vas pas afficher le formulaire
					$form = false;
					//On enregistre son pseudo dans la session username et son identifiant dans la session userid
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['userid'] = $dn['id'];
		?>
		<div class="message">Vous avez bien &eacute;t&eacute; connect&eacute;. Vous pouvez acc&eacute;der &agrave; votre espace membre.<br />
		<a href="<?php echo $url_home; ?>" class="button">Retour à l'accueil</a></div>
		<?php
				}
				else
				{
					//Sinon, on indique que la combinaison nest pas bonne
					$form = true;
					$message = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
				}
			}
			else
			{
				$form = true;
			}
			if($form)
			{
				//On affiche un message sil y a lieu
			if(isset($message))
			{
				echo '<div class="message">'.$message.'</div>';
			}
			//On affiche le formulaire
		?>
		    <form action="connexion.php" method="post">
		        <div class="center">
		            <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" />
		            <input type="password" name="password" id="password" placeholder="Mot de passe"/>
		            <input type="submit" value="Se connecter" />
				</div>
		    </form>

		<?php
			}
		}
		?>
</section> <!-- end section connexion -->
</div> <!-- end container -->
<? include('footer.php') ?>
</body>
</html>
