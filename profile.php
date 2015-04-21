<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil | Our Nails - Nail Art</title>
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
  <h1>Profil</h1>
<?php
//On verifie que lidentifiant de lutilisateur est defini
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
	//On verifie que lutilisateur existe
	$dn = mysql_query('select username, email, avatar, signup_date from users where id="'.$id.'"');
	if(mysql_num_rows($dn)>0)
	{
		$dnn = mysql_fetch_array($dn);
		//On affiche les donnees de lutilisateur
?>
<!-- Voici le profil de "<?php echo htmlentities($dnn['username']); ?>" :-->
<table style="width:500px;">
	<tr>
    	<td><?php
if($dnn['avatar']!='')
{
	echo '<img src="'.htmlentities($dnn['avatar'], ENT_QUOTES, 'UTF-8').'" alt="Image Perso" style="max-width:100px;max-height:100px;" />';
}
else
{
	echo 'Cet utilisateur n\'a pas d\'image perso.';
}
?></td>
    	<td class="left"><h1><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        Cet utilisateur s'est inscrit le <?php echo date('d/m/Y',$dnn['signup_date']); ?></td>
    </tr>
</table>
<?php
	}
	else
	{
		echo 'Cet utilisateur n\'existe pas.';
	}
}
else
{
	echo 'L\'identifiant de l\'utilisateur n\'est pas d&eacute;fini.';
}
?>

</div><!-- end container -->

<? include('footer.php') ?>
</body>
</html>
