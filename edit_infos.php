<?php include('config.php'); ?>
<?php $page = 'edit_infos'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Mon profil | Our Nails - Nail Art</title>
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
<section id="profil">
  <h1>Mon profil</h1>
	<?php
	//On verifie si lutilisateur est connecte
	if(isset($_SESSION['username']))
	{
		//On verifie si le formulaire a ete envoye
		if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']))
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
						$password = mysql_real_escape_string($_POST['password']);
						$email = mysql_real_escape_string($_POST['email']);
						$avatar = mysql_real_escape_string($_POST['avatar']);
						//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
						$dn = mysql_fetch_array(mysql_query('select count(*) as nb from users where username="'.$username.'"'));
						//On verifie si le pseudo a ete modifie pour un autre et que celui-ci n'est pas deja utilise
						if($dn['nb']==0 or $_POST['username']==$_SESSION['username'])
						{
							//On modifie les informations de lutilisateur avec les nouvelles
							if(mysql_query('update users set username="'.$username.'", password="'.$password.'", email="'.$email.'", avatar="'.$avatar.'" where id="'.mysql_real_escape_string($_SESSION['userid']).'"'))
							{
								//Si ca a fonctionne, on naffiche pas le formulaire
								$form = false;
								//On supprime les sessions username et userid au cas ou il aurait modifie son pseudo
								unset($_SESSION['username'], $_SESSION['userid']);
	?>
		<div class="message">Vos informations ont bien &eacute;t&eacute; modifif&eacute;e. Vous devez vous reconnecter.<br />
		<a href="connexion.php">Se connecter</a></div>
	<?php
						}
						else
						{
							//Sinon on dit quil y a eu une erreur
							$form = true;
							$message = 'Une erreur est survenue lors des modifications.';
						}
					}
					else
					{
						//Sinon, on dit que le pseudo voulu est deja pris
						$form = true;
						$message = 'Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
					}
				}
				else
				{
					//Sinon, on dit que lemail nest pas valide
					$form = true;
					$message = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
				}
			}
			else
			{
				//Sinon, on dit que le mot de passe nest pas assez long
				$form = true;
				$message = 'Le mot de passe que vous avez entr&eacute; contien moins de 6 caract&egrave;res.';
			}
		}
		else
		{
			//Sinon, on dit que les mots de passes ne sont pas identiques
			$form = true;
			$message = 'Les mot de passe que vous avez entr&eacute; ne sont pas identiques.';
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
			echo '<strong>'.$message.'</strong>';
		}
		//Si le formulaire a deja ete envoye on recupere les donnes que lutilisateur avait deja insere
		if(isset($_POST['username'],$_POST['password'],$_POST['email']))
		{
			$username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
			if($_POST['password']==$_POST['passverif'])
			{
				$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');
			}
			else
			{
				$password = '';
			}
			$email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
			$avatar = htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');
		}
		else
		{
			//Sinon, on affiche les donnes a partir de la base de donnee
			$dnn = mysql_fetch_array(mysql_query('select username,password,email,avatar from users where username="'.$_SESSION['username'].'"'));
			$username = htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8');
			$password = htmlentities($dnn['password'], ENT_QUOTES, 'UTF-8');
			$email = htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8');
			$avatar = htmlentities($dnn['avatar'], ENT_QUOTES, 'UTF-8');
		}
		//On affiche le formulaire
	?>

	    <form action="edit_infos.php" method="post">
	        <p>Modifier mes informations:</p>
	        <a href="users.php" target="_blank">Voir la liste des utilisateurs</a>
	            <label for="username">Nom d'utilisateur</label><input type="text" name="username" id="username" value="<?php echo $username; ?>" />
	            <label for="password">Mot de passe<span class="small">(6 caract&egrave;res min.)</span></label><input type="password" name="password" id="password" value="<?php echo $password; ?>" />
	            <label for="passverif">Mot de passe<span class="small">(v&eacute;rification)</span></label><input type="password" name="passverif" id="passverif" value="<?php echo $password; ?>" />
	            <label for="email">Email</label><input type="text" name="email" id="email" value="<?php echo $email; ?>" />
	            <label for="avatar">Image perso<span class="small">(facultatif)</span></label><input type="text" name="avatar" id="avatar" value="<?php echo $avatar; ?>" />
	            <input type="submit" value="Envoyer" />
	    </form>

	    <div class="edit" id="div_1">Dolor</div>
		<div class="edit_area" id="div_2">Lorem ipsum dolor sit amet, consectetuer
adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
magna aliquam erat volutpat.</div>
<script type="text/javascript">
 $('.editable').editable(function(value, settings) {
     console.log(this);
     console.log(value);
     console.log(settings);
     return(value);
  }, {
     type    : 'textarea',
     submit  : 'OK',
 });
 
$(document).ready(function() {
     $('.edit').editable('http://www.example.com/save.php');
 });

 $(document).ready(function() {
     $('.edit').editable('http://www.example.com/save.php', {
         indicator : 'Saving...',
         tooltip   : 'Click to edit...'
     });
     $('.edit_area').editable('http://www.example.com/save.php', {
         type      : 'textarea',
         cancel    : 'Cancel',
         submit    : 'OK',
         indicator : '<img src="img/indicator.gif">',
         tooltip   : 'Click to edit...'
     });
 });

</script>

	<?php
		}
	}
	else
	{
	?>
	<div class="message">Pour acc&eacute;der &agrave; cette page, vous devez &ecirc;tre connect&eacute;.<br />
	<a href="connexion.php">Se connecter</a></div>
	<?php
	}
	?>

</section> <!-- end section profile -->
</div> <!-- end container-->
<? include('footer.php') ?>
</body>
</html>
