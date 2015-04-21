<?php include('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Les utilisateurs | Our Nails - Nail Art</title>
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
<section id="user">
    <h1>Les utilisateurs</h1>
<p>Voici la liste des utilisateurs:</p>
<table>
    <tr>
    	<th>Id</th>
    	<th>Nom d'utilisateur</th>
    	<th>Email</th>
    </tr>
<?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs
$req = mysql_query('select id, username, email from users');
while($dnn = mysql_fetch_array($req))
{
?>
	<tr>
    	<td class="left"><?php echo $dnn['id']; ?></td>
    	<td class="left"><a href="profile.php?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
</table>

</section>
		
</div> <!-- end container -->

<?php include('footer.php') ?>
</body>
</html>
