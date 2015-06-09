<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>A propos | Our Nails - Nail Art</title>
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
<section id="a_propos">
  <h2>À propos</h2>
    <p>Avec Our Nails, tu apprends et partages tes créations quel que soit ton niveau. Tu peux également participer à des concours. 
      Nous veillons à ce que Our Nails reste accessible à tous.</p>
    <p>Nous mettons le site régulièrement à jour pour que les tutoriels soient au gout du jour !</p>

</section> <!-- end section a_propos -->
</div> <!-- end container -->

<div class="back-to-top">back to top</div>
  <script src="js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

          $(document).scroll(function()
          {
              if($(document).scrollTop() > "400")
              {
                $(".back-to-top").css("opacity","1");
              }

              if($(document).scrollTop() < "400")
              {
                $(".back-to-top").css("opacity","0");
              }
          });

            $(".back-to-top").click(function()
            {
              $('body,html').animate({
              scrollTop: 0
            }, 300);
            });
        });
    </script>

<?php include('footer.php');?>
</body>
</html>
