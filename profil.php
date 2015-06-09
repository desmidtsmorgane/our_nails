<?php 
ob_start();
include('config.php'); 
?><!DOCTYPE html>
<?php 
	if(isset($_GET['id']))
	{
		//$getid = intval($_GET['id']);
		$id = $_GET['id'];
	  	$requser = $pdo->prepare('SELECT * FROM membres WHERE id = :id');
	  	$requser->bindParam(':id', $id);
	  	$requser->execute();
	  	$userinfo = $requser->fetchAll(PDO::FETCH_ASSOC);

	  	if(count($userinfo) == 0)
	  	{
	  		header("Location: erreur_404.html");
	  	}

	  	//var_dump($userinfo);
?>
<html lang="fr">
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

	<?php include('head.php');?>

	<div id="container">
	<section id="profil">
	  <h2>Mon profil</h2>
	  <div class="info_user">
	  	<div class="info_profil">
		  <p><svg version="1.1" id="profile" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.405px" height="25.013px" viewBox="0 0 17.405 25.013" enable-background="new 0 0 17.405 25.013" xml:space="preserve"><path fill="#F7236F" d="M8.991,0.857c-0.037,0-0.113,0-0.151,0c-10.338,0-7.427,14.855-6.907,17.727
	            c1.167,6.438,4.506,5.695,4.663,5.539c0.353-0.354-1.928-2.844-2.007-3.559C4.577,20.455,4.647,20.39,4.7,20.368
	            c2.715-1.141,3.146-4.001,2.358-4.477c-1.18-0.71-2.107-2.167-2.383-3.105c-0.296-1.005-0.26-2.764-0.26-3.923
	            c0,0-0.003-0.082,0.144-0.082c1.227,0,3.817,0,5.875,0.001c0.274,0,1.458-1.51,1.71-1.509c0.279,0-0.333,1.51-0.094,1.51
	            c0.569,0,0.959,0,1.172,0c0.153,0,0.143,0.094,0.143,0.094c0,0.957,0.085,2.904-0.21,3.909
	            c-0.275,0.938-1.148,2.335-2.383,3.105c-0.701,0.438-0.345,3.313,2.361,4.478c0.052,0.021,0.12,0.088,0.106,0.2
	            c-0.079,0.722-2.246,3.312-2.005,3.554c0.329,0.329,3.496,0.898,4.662-5.539C16.418,15.713,18.969,0.857,8.991,0.857z"/>
	          </svg> 

	        <span><?php echo $userinfo[0]['pseudo']; ?></span></p>

		  <p><svg version="1.1" id="email" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="23.334px" viewBox="0 0 26 23.334" enable-background="new 0 0 26 23.334" xml:space="preserve"> <path fill="#F7236F" d="M22.683,16.995c0,0.418-0.118,0.805-0.306,1.145l-6.012-6.727l5.947-5.203
			c0.23,0.367,0.37,0.798,0.37,1.265V16.995L22.683,16.995z M13.163,12.634l8.274-7.24c-0.339-0.186-0.722-0.3-1.135-0.3H6.022
			c-0.414,0-0.797,0.114-1.135,0.3L13.163,12.634z M15.469,12.196l-1.916,1.677c-0.111,0.098-0.252,0.146-0.391,0.146
			c-0.141,0-0.28-0.048-0.393-0.146l-1.916-1.677l-6.088,6.812c0.365,0.229,0.793,0.367,1.256,0.367h14.28
			c0.463,0,0.891-0.138,1.256-0.367L15.469,12.196z M4.012,6.21C3.78,6.577,3.641,7.008,3.641,7.475v9.521
			c0,0.418,0.116,0.805,0.305,1.145l6.013-6.728L4.012,6.21z"/>
			</svg> <span><?php echo $userinfo[0]['mail']; ?></span></p>
		 </div>

		 <?php if($_SESSION['id'] == $_GET['id'])
		 {
		 	echo '<ul class="editprofil">
					<li><a href="editprofil.php" class="button">Editer mon profil</a></li>
					<li><a href="creation_tutoriel.php" class="button">Créer un tutoriel</a></li>
				</ul>';
		}
		?>

		<h3>Mes tutoriels</h3>

		<?php 
		
			//$sql = 'SELECT * FROM tutoriel LEFT JOIN membres ON tutoriel.pseudo = membres.pseudo WHERE membres.id = :idUser'; 

			$sql = 'SELECT * FROM tutoriel WHERE tutoriel.pseudo = :pseudo';   
			$prepareStatement = $pdo->prepare($sql);
			$prepareStatement->bindParam(":pseudo", $userinfo[0]['pseudo']);
			$prepareStatement->execute();
			$data = $prepareStatement->fetchAll(PDO::FETCH_ASSOC);
		?>

		<ul class="tutoriel_user">
			<?php 
			for($i=0; $i<count($data); $i++)
			{
			    echo '<li>
			    		<h4><a href="tutoriel.php?id='. $data[$i]['id'].'">'.$data[$i]['titre_intro'].'</h4></a>
			    		<p>'.$data[$i]['texte_intro'].'</p>
			    		<a href="tutoriel.php?id='. $data[$i]['id'].'" class="button">'.'Voir le tutoriel'.'</a>
			   		 </li>';
			}
			?>
		</ul>
		
		</div> <!-- end info_user -->
	</section> <!-- end section profil -->
	</div><!-- end container -->

	<?php include('footer.php') ?>
	</body>
</html>
<?php 
}
else {
	header('Location: inscription.php');
}
?>
