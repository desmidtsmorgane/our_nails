<?php 
ob_start();
include('config.php'); 
?><!DOCTYPE html>
<html lang="fr">
		<head>
		  <title>Créer mon tutoriel | Our Nails - Nail Art</title>
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
		<section id="tutoriel">
			<h2>Créer mon tutoriel</h2>
			<?php 
				if(isset($erreur))
				{
					echo $erreur;
				}
			?>
			<p>Pour plus de visibilité, privilégiez les images de grandes tailles.
				Comme support, vous pouvez visualiser ce <a href="base.php" target="_blank">tutoriel</a>.
			</p>

			<?php 
				if(isset($_SESSION['id']))
				{	
					$requser = $pdo->prepare("SELECT * FROM membres WHERE id = ?");
					$requser->execute(array($_SESSION['id']));
					$user = $requser->fetch();
					$pseudo = $user['pseudo'];

					if(isset($_POST['formtutoriel'])) 
					{
						$pseudo = htmlspecialchars($_POST['pseudo']);
						
						$titre_intro = htmlspecialchars($_POST['titre_intro']);
						$texte_intro = htmlspecialchars($_POST['texte_intro']);

						$categorie = htmlspecialchars($_POST['categorie']);

						$titre_materiel = htmlspecialchars($_POST['titre_materiel']);
						$text_materiel = htmlspecialchars($_POST['text_materiel']);

						$titre_etape1 = htmlspecialchars($_POST['titre_etape1']);
						$text_etape1 = htmlspecialchars($_POST['text_etape1']);

						$titre_etape2 = htmlspecialchars($_POST['titre_etape2']);
						$text_etape2 = htmlspecialchars($_POST['text_etape2']);

						$titre_etape3 = htmlspecialchars($_POST['titre_etape3']);
						$text_etape3 = htmlspecialchars($_POST['text_etape3']);

						$titre_etape4 = htmlspecialchars($_POST['titre_etape4']);
						$text_etape4 = htmlspecialchars($_POST['text_etape4']);

						$titre_etape5 = htmlspecialchars($_POST['titre_etape5']);
						$text_etape5 = htmlspecialchars($_POST['text_etape5']);

						$titre_etape6 = htmlspecialchars($_POST['titre_etape6']);
						$text_etape6 = htmlspecialchars($_POST['text_etape6']);

						$target_dir = "./upload/";
						$target_file = $target_dir . basename($_FILES["img_resultat"]["name"]);
						$target_file2 = $target_dir . basename($_FILES["img_materiel"]["name"]);
						$target_file3 = $target_dir . basename($_FILES["img_cuticule1"]["name"]);
						$target_file4 = $target_dir . basename($_FILES["img_cuticule2"]["name"]);
						$target_file5 = $target_dir . basename($_FILES["img_poncage1"]["name"]);
						$target_file6 = $target_dir . basename($_FILES["img_poncage2"]["name"]);
						$target_file7 = $target_dir . basename($_FILES["img_primer1"]["name"]);
						$target_file8 = $target_dir . basename($_FILES["img_primer2"]["name"]);
						$target_file9 = $target_dir . basename($_FILES["img_base1"]["name"]);
						$target_file10 = $target_dir . basename($_FILES["img_base2"]["name"]);
						$target_file11 = $target_dir . basename($_FILES["img_base3"]["name"]); // upload local s'arrête ici
						$target_file12 = $target_dir . basename($_FILES["img_forme1"]["name"]);
						$target_file13 = $target_dir . basename($_FILES["img_forme2"]["name"]);
						$target_file14 = $target_dir . basename($_FILES["img_forme3"]["name"]);
						$target_file15 = $target_dir . basename($_FILES["img_construction1"]["name"]);
						$target_file16 = $target_dir . basename($_FILES["img_construction2"]["name"]);
						$target_file17 = $target_dir . basename($_FILES["img_construction3"]["name"]);
						$target_file18 = $target_dir . basename($_FILES["img_construction4"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

					
						if(!empty($_POST['pseudo']) AND !empty($_POST['titre_intro']) AND !empty($_POST['texte_intro']) AND !empty($_POST['categorie']) AND !empty($_POST['titre_materiel']) AND !empty($_POST['text_materiel']) AND !empty($_POST['titre_etape1']) AND !empty($_POST['text_etape1']) AND !empty($_POST['titre_etape2']) AND !empty($_POST['text_etape2']) AND !empty($_POST['titre_etape3']) AND !empty($_POST['text_etape3']) AND !empty($_POST['titre_etape4']) AND !empty($_POST['text_etape4']) AND !empty($_POST['titre_etape5']) AND !empty($_POST['text_etape5']) AND !empty($_POST['titre_etape6']) AND !empty($_POST['text_etape6']) AND !empty($_FILES['img_resultat']) AND !empty($_FILES['img_materiel']) AND !empty($_FILES['img_cuticule1']) AND !empty($_FILES['img_cuticule2']) AND !empty($_FILES['img_poncage1']) AND !empty($_FILES['img_poncage2']) AND !empty($_FILES['img_primer1']) AND !empty($_FILES['img_primer2']) AND !empty($_FILES['img_base1']) AND !empty($_FILES['img_base2']) AND !empty($_FILES['img_base3']) AND !empty($_FILES['img_forme1']) AND !empty($_FILES['img_forme2']) AND !empty($_FILES['img_forme3']) AND !empty($_FILES['img_construction1']) AND !empty($_FILES['img_construction2']) AND !empty($_FILES['img_construction3']) AND !empty($_FILES['img_construction4']))
						{
							$inserttuto = $pdo->prepare("INSERT INTO tutoriel(pseudo, titre_intro, texte_intro, categorie, titre_materiel, text_materiel, titre_etape1, text_etape1, titre_etape2, text_etape2, titre_etape3, text_etape3, titre_etape4, text_etape4, titre_etape5, text_etape5, titre_etape6, text_etape6, img_resultat, img_materiel, img_cuticule1, img_cuticule2, img_poncage1, img_poncage2, img_primer1, img_primer2, img_base1, img_base2, img_base3, img_forme1, img_forme2, img_forme3, img_construction1, img_construction2, img_construction3, img_construction4) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
							$inserttuto->execute(array($pseudo, $titre_intro, $texte_intro, $categorie, $titre_materiel, $text_materiel, $titre_etape1, $text_etape1, $titre_etape2, $text_etape2, $titre_etape3, $text_etape3, $titre_etape4, $text_etape4, $titre_etape5, $text_etape5, $titre_etape6, $text_etape6, $target_file, $target_file2, $target_file3, $target_file4, $target_file5, $target_file6, $target_file7, $target_file8, $target_file9, $target_file10, $target_file11, $target_file12, $target_file13, $target_file14, $target_file15, $target_file16, $target_file17, $target_file18));
							
							if ($_FILES["img_resultat"]["size"] > 500000 AND $_FILES["img_materiel"]["size"] > 500000 AND $_FILES["img_cuticule1"]["size"] > 500000 AND $_FILES["img_cuticule2"]["size"] > 500000 AND $_FILES["img_poncage1"]["size"] > 500000 AND $_FILES["img_poncage2"]["size"] > 500000 AND $_FILES["img_primer1"]["size"] > 500000 AND $_FILES["img_primer2"]["size"] > 500000 AND $_FILES["img_base1"]["size"] > 500000 AND $_FILES["img_base2"]["size"] > 500000 AND $_FILES["img_base3"]["size"] > 500000 AND $_FILES["img_forme1"]["size"] > 500000 AND $_FILES["img_forme2"]["size"] > 500000 AND $_FILES["img_forme3"]["size"] > 500000 AND $_FILES["img_construction1"]["size"] > 500000 AND $_FILES["img_construction2"]["size"] > 500000 AND $_FILES["img_construction3"]["size"] > 500000 AND $_FILES["img_construction4"]["size"] > 500000) 
							{
							    $uploadOk = 0;
							}
							else {
							    $error = "Le fichier est trop lourd.";
							}

							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
							{
							    $uploadOk = 0;
							}
							else {
							    $error = "Seul les fichiers JPG, JPEG, PNG et GIF sont acceptés.";
							}

							if ($uploadOk == 0) 
							{
							    $error = "Le fichier n'a pas été envoyé.";
							} 
							    else 
							    {
							        if (move_uploaded_file($_FILES["img_resultat"]["tmp_name"], $target_file) AND move_uploaded_file($_FILES["img_materiel"]["tmp_name"], $target_file2) AND move_uploaded_file($_FILES["img_cuticule1"]["tmp_name"], $target_file3) AND move_uploaded_file($_FILES["img_cuticule2"]["tmp_name"], $target_file4) AND move_uploaded_file($_FILES["img_poncage1"]["tmp_name"], $target_file5) AND move_uploaded_file($_FILES["img_poncage2"]["tmp_name"], $target_file6) AND move_uploaded_file($_FILES["img_primer1"]["tmp_name"], $target_file7) AND move_uploaded_file($_FILES["img_primer2"]["tmp_name"], $target_file8) AND move_uploaded_file($_FILES["img_base1"]["tmp_name"], $target_file9) AND move_uploaded_file($_FILES["img_base2"]["tmp_name"], $target_file10) AND move_uploaded_file($_FILES["img_base2"]["tmp_name"], $target_file11) AND move_uploaded_file($_FILES["img_forme1"]["tmp_name"], $target_file12) AND move_uploaded_file($_FILES["img_forme2"]["tmp_name"], $target_file13) AND move_uploaded_file($_FILES["img_forme3"]["tmp_name"], $target_file14) AND move_uploaded_file($_FILES["img_construction1"]["tmp_name"], $target_file15) AND move_uploaded_file($_FILES["img_construction2"]["tmp_name"], $target_file16) AND move_uploaded_file($_FILES["img_construction3"]["tmp_name"], $target_file17) AND move_uploaded_file($_FILES["img_construction4"]["tmp_name"], $target_file18))
							        {
							           // echo "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été envoyé.";
							        } else {
							            $error = "Une erreur s'est produite lors du téléchargement.";
							        }
							    }

							?>
							<div class="message">Le tutoriel a bien été envoyé.<br /></div>
							<?php
						}
						else 
						{
							$erreur = "Tous les champs doivent être complétés.";
						}
					}	
				?>

				    <form action="#" method="POST" enctype="multipart/form-data">

				    	<input type="text" name="pseudo" placeholder="Nom d'utilisateur" value="<?php if(isset($pseudo)) { echo $pseudo; }?>" />

				        <input type="text" name="titre_intro" placeholder="Nom du tutoriel" value="<?php if(isset($titre_intro)) { echo $titre_intro; }?>" />
				        <textarea name="texte_intro" placeholder="Description de la pose"><?php if(isset($texte_intro)) { echo $texte_intro; }?></textarea>
				       
				        <select name="categorie">
						  <option value="simple">Simple</option>
						  <option value="uni">Uni</option>
						  <option value="nailart">Nail Art</option>
						</select>
				  
				       	<label for="resultat">Poster mon image</label>
				       	<input type="file" name="img_resultat" id="resultat"/>
				        
				        <input type="text" name="titre_materiel" placeholder="Tu as besoin de:" value="<?php if(isset($titre_materiel)) { echo $titre_materiel; }?>" />
				        <textarea name="text_materiel" placeholder="Liste du matériel"><?php if(isset($text_materiel)) { echo $text_materiel; }?></textarea>

				        <label for="materiel">Poster mon image</label>
				        <input type="file" name="img_materiel" id="materiel"/>

				        <input type="text" name="titre_etape1" placeholder="1. Les cuticules" value="<?php if(isset($titre_etape1)) { echo $titre_etape1; }?>" />
				        <textarea name="text_etape1" placeholder="Description de l'étape"><?php if(isset($text_etape1)) { echo $text_etape1; }?></textarea>
				        <label for="cuticule1">Poster mon image</label>
				        <input type="file" name="img_cuticule1" id="cuticule1"/>
				        <label for="cuticule2">Poster mon image</label>
				        <input type="file" name="img_cuticule2" id="cuticule2"/>

				        <input type="text" name="titre_etape2" placeholder="2. Le ponçage" value="<?php if(isset($titre_etape2)) { echo $titre_etape2; }?>" />
				        <textarea name="text_etape2" placeholder="Description de l'étape"><?php if(isset($text_etape2)) { echo $text_etape2; }?></textarea>
				        <label for="poncage_1">Poster mon image</label>
				        <input type="file" name="img_poncage1" id="poncage_1"/>
				        <label for="poncage_2">Poster mon image</label>
				        <input type="file" name="img_poncage2" id="poncage_2"/>

				        <input type="text" name="titre_etape3" placeholder="3. Le primer" value="<?php if(isset($titre_etape3)) { echo $titre_etape3; }?>" />
				        <textarea name="text_etape3" placeholder="Description de l'étape"><?php if(isset($text_etape3)) { echo $text_etape3; }?></textarea>
				        <label for="primer_1">Poster mon image</label>
				        <input type="file" name="img_primer1" id="primer_1"/>
				        <label for="primer_2">Poster mon image</label>
				        <input type="file" name="img_primer2" id="primer_2"/>

				        <input type="text" name="titre_etape4" placeholder="4. La base" value="<?php if(isset($titre_etape4)) { echo $titre_etape4; }?>" />
				        <textarea name="text_etape4" placeholder="Description de l'étape"><?php if(isset($text_etape4)) { echo $text_etape4; }?></textarea>
				        <label for="base_1">Poster mon image</label>
				        <input type="file" name="img_base1" id="base_1"/>
				        <label for="base_2">Poster mon image</label>
				        <input type="file" name="img_base2" id="base_2"/>
				        <label for="base_3">Poster mon image</label>
				        <input type="file" name="img_base3" id="base_3"/>

				        <input type="text" name="titre_etape5" placeholder="5. Nom de l'étape" value="<?php if(isset($titre_etape5)) { echo $titre_etape5; }?>" />
				        <textarea name="text_etape5" placeholder="Description de l'étape"><?php if(isset($text_etape5)) { echo $text_etape5; }?></textarea>
				        <label for="forme_1">Poster mon image</label>
				        <input type="file" name="img_forme1" id="forme_1"/>
				        <label for="forme_2">Poster mon image</label>
				        <input type="file" name="img_forme2" id="forme_2"/>
				        <label for="forme_3">Poster mon image</label>
				        <input type="file" name="img_forme3" id="forme_3"/>

				        <input type="text" name="titre_etape6" placeholder="6. La construction" value="<?php if(isset($titre_etape6)) { echo $titre_etape6; }?>" />
				        <textarea name="text_etape6" placeholder="Description de l'étape"><?php if(isset($text_etape6)) { echo $text_etape6; }?></textarea>
				        <label for="construction_1">Poster mon image</label>
				        <input type="file" name="img_construction1" id="construction_1"/>
				        <label for="construction_2">Poster mon image</label>
				        <input type="file" name="img_construction2" id="construction_2"/>
				        <label for="construction_3">Poster mon image</label>
				        <input type="file" name="img_construction3" id="construction_3"/>
				        <label for="construction_4">Poster mon image</label>
				        <input type="file" name="img_construction4" id="construction_4"/>

				        <input type="submit" name="formtutoriel" value="Envoyer mon tutoriel" />
				    </form>

		</section> <!-- end section tutoriel -->
		<?php
			}
			else
			{
				header('Location: connexion.php');
			}
			?>
		</div> <!-- end container -->
		<?php include('footer.php'); ?>
		</body>
</html>
