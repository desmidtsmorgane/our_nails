<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>S'inscrire | Our Nails - Nail Art</title>
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
<section id="inscription">
	<h1>S'inscrire</h1>
		<?php
		//On verifie que le formulaire a ete envoye
		if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']) and $_POST['username']!='')
		{
			//On enleve lechappement si get_magic_quotes_gpc est active
			if(get_magic_quotes_gpc())
			{
				$_POST['username'] = stripslashes($_POST['username']);
				$_POST['password'] = stripslashes($_POST['password']);
				$_POST['passverif'] = stripslashes($_POST['passverif']);
				$_POST['email'] = stripslashes($_POST['email']);
				$_POST['avatar'] = stripslashes($_POST['avatar']);
			}
			//On vérifie si les conditions sont acceptées
			if (isset($_POST['accord'])) {
				//On verifie si le mot de passe et celui de la verification sont identiques
				if($_POST['password']==$_POST['passverif'])
				{
					//On verifie si le mot de passe a 6 caracteres ou plus
					if(strlen($_POST['password'])>=6)
					{
						//On verifie si lemail est valide
						if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
						{
							//On echape les variables pour pouvoir les mettre dans une requette SQL
							$username = mysql_real_escape_string($_POST['username']);
							//$password = mysql_real_escape_string($_POST['password']);
							$password = sha1($_POST['password']);
							$email = mysql_real_escape_string($_POST['email']);
							$avatar = mysql_real_escape_string($_POST['avatar']);
							//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
							$dn = mysql_num_rows(mysql_query('select id from users where username="'.$username.'"'));
							if($dn==0)
							{
								//On recupere le nombre dutilisateurs pour donner un identifiant a lutilisateur actuel
								$dn2 = mysql_num_rows(mysql_query('select id from users'));
								$id = $dn2+1;
								//On enregistre les informations dans la base de donnee
								if(mysql_query('insert into users(id, username, password, email, avatar, signup_date) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.$avatar.'", "'.time().'")'))
								{
									//Si ca a fonctionne, on naffiche pas le formulaire
									$form = false;
			?>
				<div class="message">Vous avez bien &eacute;t&eacute; inscrit. Vous pouvez dor&eacute;navant vous connecter.<br />
				<a href="connexion.php" class="button">Se connecter</a></div>
			<?php
								}
								else
								{
									//Sinon on dit quil y a eu une erreur
									$form = true;
									$message = '* Une erreur est survenue lors de l\'inscription.';
								}
							}
							else
							{
								//Sinon, on dit que le pseudo voulu est deja pris
								$form = true;
								$message = '* Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
							}
						}
						else
						{
							//Sinon, on dit que lemail nest pas valide
							$form = true;
							$message = '* L\'email que vous avez entr&eacute; n\'est pas valide.';
						}
					}
					else
					{
						//Sinon, on dit que le mot de passe nest pas assez long
						$form = true;
						$message = '* Le mot de passe que vous avez entr&eacute; contient moins de 6 caract&egrave;res.';
					}
				}
				else
				{
					//Sinon, on dit que les mots de passes ne sont pas identiques
					$form = true;
					$message = '* Les mots de passe que vous avez entr&eacute; ne sont pas identiques.';
				}
			}
			else
			{
				//Sinon, on dit que les conditions doivent être acceptées
				$form = true;
				$message = '* Les conditions d\'utilisation doivent être acceptées.';
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

		    <form action="sign_up.php" method="post">
		    	<input type="text" placeholder="Nom d'utilisateur" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" />
		    	<input type="password" name="password" placeholder="Mot de passe (6 caract&egrave;res min.)" />
		    	<input type="password" name="passverif" placeholder="Vérification du mot de passe" />
		    	<input type="text" placeholder="Email" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" />
		    	<input type="text" placeholder="Url de ton image" name="avatar" value="<?php if(isset($_POST['avatar'])){echo htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');} ?>" />
		    	<input type="checkbox" name="accord" value="accord"> J'ai lu et <a href="conditions.php" target="_blank">accepte les conditions</a>
		    	<input type="submit" value="S'inscrire" />
		    </form>

		    <p>Tu es déjà inscrit ? <a href="connexion.php">Connecte-toi</a></p>
		<?php
		}
		?>
</section> <!-- end section inscription -->
</div> <!-- end container -->

<? include('footer.php') ?>
</body>
</html>
