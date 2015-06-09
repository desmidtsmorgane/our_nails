<?php include('config.php') ?>
<?php $page = 'produits'; 
?><!DOCTYPE html>
<html lang="fr">
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

    <?php include('head.php');?>

    <div id="container">
    <section id="produits">
      <h2>Les produits</h2>
        <p>Vous trouverez ici une liste de tous les produits repris dans chaque tutoriel avec en plus une description.
          Cette liste est purement à titre indicatif, aucun de ces produits n'est destiné à la vente.</p>

      <ul>
          <li>
            <div id="lampe">lampe uv</div>
            <h3>Lampe UV 36 Watts</h3>
            <p>Pour pouvoir faire catalyser (séchage) le gel, il faut laisser la main sous la lampe entre 2 à 3 minutes.</p>
            <span>± 33€</span>
          </li>
          <li>
            <div id="gel_mono">gel monophasé</div>
            <h3>Gel monophasé 50gr</h3>
            <p>On dit qu'un gel est monophasé parce qu'il est composé de 3 gels différents (base, construction et finition), c'est un 3 en 1.</p>
            <span>± 43,50€</span>
          </li>
          <li>
            <div id="primer">primer</div>
            <h3>Primer</h3>
            <p>Le primer permet au gel d'adhérer à l'ongle. Son odeur est assez forte car il contient de l'acide.</p>
            <span>± 9,95€</span>
          </li>
          <li>
            <div id="repoussoir">repoussoir à cuticules</div>
            <h3>Repoussoir à cuticules</h3>
            <p>Le repoussoir à cuticules en métal permet de repousser ses cuticules.</p>
            <span>± 7,95€</span>
          </li>
          <li>
            <div id="lime">lime</div>
            <h3>Lime droite</h3>
            <p>Lime à gros grains pour un limage optimal.</p>
            <span>± 1€</span>
          </li>
          <li>
            <div id="bloc">bloc blanc</div>
            <h3>Bloc blanc</h3>
            <p>Le bloc permet de limer en douceur l'ongle avant d'appliquer le primer.</p>
            <span>± 7,50€</span>
          </li>
          <li>
            <div id="pinceau_gel">pinceau à gel</div>
            <h3>Pinceau à gel</h3>
            <p>Le pinceau à gel sert à appliquer la base ainsi que la construction, par sa taille il est très pratique.</p>
            <span>± 6,50€</span>
          </li>
          <li>
            <div id="pinceau_chat">pinceau langue de chat</div>
            <h3>Pinceau langue de chat</h3>
            <p>Ce pinceau permet d'appliquer toutes sortes de gels colorés, il est principalement utilisé pour le remplissage(en entier) de l'ongle et permet de travailler plus vite.</p>
            <span>± 6,50€</span>
          </li>
          <li>
            <div id="dissolvant">dissolvant doux</div>
            <h3>Dissolvant</h3>
            <p>Le dissolvant doux permet de dégraisser chaque couche de gel après avoir été catalysée.</p>
            <span>± 3,95€</span>
          </li>
          <li>
            <div id="gel_blanc">gel couleur blanche</div>
            <h3>Gel blanc naturel 5gr</h3>
            <p>Le gel blanc peut être utilisé pour faire une french ou tout simplement un remplissage. Il doit catalyser 2 à 3 minutes.</p>
            <span>± 6,95€</span>
          </li>
          <li>
            <div id="gel_praline">gel couleur praline</div>
            <h3>Gel praline 5gr</h3>
            <p>Le gel praline peut être utilisé pour faire une french ou tout simplement un remplissage. Il doit catalyser 2 à 3 minutes.</p>
            <span>± 6,95€</span>
          </li>
          <li>
            <div id="gel_nude">gel couleur nude</div>
            <h3>Gel nude 5gr</h3>
            <p>Le gel nude peut être utilisé pour faire une french ou tout simplement un remplissage. Il doit catalyser 2 à 3 minutes.</p>
            <span>± 6,95€</span>
          </li>
          <li>
            <div id="gel_noir">gel couleur noire</div>
            <h3>Gel noir 5gr</h3>
            <p>Le gel noir peut être utilisé pour faire une french ou tout simplement un remplissage. Il doit catalyser 2 à 3 minutes.</p>
            <span>± 6,95€</span>
          </li>
          <li>
            <div id="gel_turquoize">gel couleur turquoize</div>
            <h3>Gel turquoize 5gr</h3>
            <p>Le gel turquoize peut être utilisé pour faire une french ou tout simplement un remplissage. Il doit catalyser 2 à 3 minutes.</p>
            <span>± 6,95€</span>
          </li>
          <li>
            <div id="liner">Polish base black</div>
            <h3>Liner noir</h3>
            <p>Il permet de réaliser de fins traits ou dessin.</p>
            <span>± 4,95€</span>
          </li>
          <li>
            <div id="perle">carrousel de perles</div>
            <h3>Carrousel de perles</h3>
            <p>À ajouter à la fin de votre pose.</p>
            <span>± 7,95€</span>
          </li>
      </ul>
      </section> <!-- end section produits -->

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
