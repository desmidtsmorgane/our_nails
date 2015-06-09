<?php include('config.php');
?><!DOCTYPE html>
<html lang="fr">
		<head>
			<title>Inscription | Our Nails - Nail Art</title>
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
		<section id="inscription">
			<h2>Inscription</h2>
				<?php
				$form = true;
				if(isset($_POST['forminscription'])) 
				{
					$pseudo = htmlspecialchars($_POST['pseudo']);
					$mail = htmlspecialchars($_POST['mail']);
					$mail2 = htmlspecialchars($_POST['mail2']);
					$mdp = sha1($_POST['mdp']);
					$mdp2 = sha1($_POST['mdp2']);
					
					if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['accord']))
					{
						if (isset($_POST['accord'])) 
						{
							$pseudolength = strlen($pseudo);
							if($pseudolength <= 255) 
							{
								if($mail == $mail2) 
								{
									if(filter_var($mail, FILTER_VALIDATE_EMAIL))
									{
										$reqmail = $pdo->prepare("SELECT * FROM membres WHERE mail = ? ");
										$reqmail->execute(array($mail));
										$mailexist = $reqmail->rowCount();
										if($mailexist == 0) 
										{

											if(filter_var($pseudo, FILTER_SANITIZE_STRING))
											{
												$reqpseudo = $pdo->prepare("SELECT * FROM membres WHERE pseudo = ? ");
												$reqpseudo->execute(array($pseudo));
												$pseudoexist = $reqpseudo->rowCount();
												
												if($pseudoexist == 0) 
												{
													if($mdp == $mdp2)
													{
														$insertmbr = $pdo->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
														$insertmbr->execute(array($pseudo, $mail, $mdp));
														//$erreur = "Le compte a bien été créé.";
														$form = false;
														?>
															<div class="message">Vous avez bien &eacute;t&eacute; inscrit. Vous pouvez dor&eacute;navant vous connecter.<br />
															<a href="connexion.php" class="button">Se connecter</a></div>
														<?php
													}
													else {
														$erreur = "Les mots de passes ne correspondent pas.";
													}
												}
											else 
											{
												$erreur = "Le nom d'utilisateur est déjà utilisé.";
											}
											}
										}
										else 
										{
											$erreur = "L'adresse mail est déjà utilisée.";
										}
									}
									else
									{
										$erreur = "L'adresse email n'est pas valide.";
									}
								}
								else 
								{
									$erreur = "Les adresses email ne correspondent pas.";
								}
							}
							else 
							{
								$erreur = "Le pseudo ne doit pas dépasser 255 caractères.";
							}
						}

						
						else 
						{
							$erreur = "Les conditions doivent être acceptées.";
						}
					}

				

					else {
						$erreur = "Tout les champs doivent être remplis et conditions acceptées.";
					}
				}

				else
				{
					$form = true;
				}

				?>
					<?php 
				    	if(isset($erreur))
				    	{
				    		echo $erreur;
				    	}
				    ?>
				    <?php if($form): ?>
				    <form action="#" method="POST">
				    	<input type="text" name="pseudo" placeholder="Nom d'utilisateur" value="<?php if(isset($pseudo)) { echo $pseudo; }?>" />
				    	<input type="email" name="mail" placeholder="Email" value="<?php if(isset($mail)) { echo $mail; }?>" />
				    	<input type="email" name="mail2" placeholder="Confirmation de l'email" value="<?php if(isset($mail2)) { echo $mail2; }?>" />
				    	<input type="password" name="mdp" placeholder="Mot de passe" />
				    	<input type="password" name="mdp2" placeholder="Vérification du mot de passe" />
				    	
				    	<input type="checkbox" name="accord" value="accord"> J'ai lu et <a href="conditions.php" target="_blank">accepte les conditions</a>
				    	<input type="submit" name="forminscription" value="S'inscrire" />
				    </form>
					
				    <p>Tu es déjà inscrit ? <a href="connexion.php">Connecte-toi</a></p>
				    <?php endif; ?>

		</section> <!-- end section inscription -->
		</div> <!-- end container -->

		<?php include('footer.php'); ?>
		</body>
</html>
