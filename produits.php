<?php include('config.php') ?>
<?php $page = 'produits'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Produits | Our Nails - Nail Art</title>
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
<section id="produits">
  <h1>Les produits</h1>
    <p>Le mini magasin reprennant une liste de tout les produits qui sont repris dans chaque tutoriels avec en plus une description.</p>

  <ul>
      <li>
        <div id="lampe"></div>
        <h3>Lampe UV 36 Watts</h3>
        <p>Pour pouvoir faire catalyser (séchasage) le gel, il faut laisser la main sous la lampe entre 2 à 3 minutes.</p>
        <span>± 33€</span>
      </li>
      <li>
        <div id="gel_mono"></div>
        <h3>Gel monophasé 50gr</h3>
        <p>On dit qu'un gel est monophasé parce qu'il est composé de 3 gels différents (base, construction et finition), c'est un 3 en 1.</p>
        <span>± 43,50€</span>
      </li>
      <li>
        <div id="primer"></div>
        <h3>Primer</h3>
        <p>Le primer permet on gel d'adhérer à l'ongle. Son odeur est assez forte car il contient de l'acide.</p>
        <span>± 9,95€</span>
      </li>
      <li>
        <div id="repoussoir"></div>
        <h3>Repoussoir à cuticules</h3>
        <p>Le repoussoir à cuticules en métal permet de repousser ses cuticules.</p>
        <span>± 7,95€</span>
      </li>
      <li>
        <div id="lime"></div>
        <h3>Lime droite</h3>
        <p>Lime à gros grains pour un limage optimal.</p>
        <span>± 1€</span>
      </li>
      <li>
        <div id="bloc"></div>
        <h3>Bloc blanc</h3>
        <p>Le bloc permet de limer en douceur l'ongle avant d'appliquer le primer.</p>
        <span>± 7,50€</span>
      </li>
      <li>
        <div id="pinceau_gel"></div>
        <h3>Pinceau à gel</h3>
        <p>Le pinceau à gel sert à appliquer la base ainsi que la construction, par sa taille il est très pratique.</p>
        <span>± 6,50€</span>
      </li>
      <li>
        <div id="pinceau_chat"></div>
        <h3>Pinceau langue de chat</h3>
        <p>Ce pinceau permet d'appliquer toutes sortes de gel colorés, il est principalement utilisé pour le remplissage(en entier) de l'ongle et permet de travailler plus vite.</p>
        <span>± 6,50€</span>
      </li>
      <li>
        <div id="dissolvant"></div>
        <h3>Dissolvant</h3>
        <p>Le dissolvant doux permet de dégraisser chaque couche de gel après avoir été catalysée.</p>
        <span>± 3,95€</span>
      </li>
      <li>
        <div id="gel_blanc"></div>
        <h3>Gel blanc naturel 5gr</h3>
        <p>Le gel blanc peut être utilisé pour faire une french ou tout simplement un remplissage. Il doit être catalyser 2 à 3 minutes.</p>
        <span>± 6,95€</span>
      </li>
     <!-- <li>
        <h3>Gel de camoufflage 5gr</h3>
        <p></p>
        <span>8,50€</span>
      </li>-->
  </ul>

  </section>

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
