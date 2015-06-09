<?php include('config.php') ?>
<?php $page = 'astuces'; 
?><!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Astuces | Our Nails - Nail Art</title>
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
    <section id="astuces">
      <h2>Astuces</h2>

        <section id="pot">
          <h3>Les pots de gel</h3>
            <ul>
              <li>Ne pas les mettre à la lumière du jour ou au soleil.</li>
              <li>Ne pas les laisser trop longtemps ouvert durant la pose.</li>
              <li>Il ne faut pas mélanger le gel monophasé.</li>
              <li>Les mettre dans un endroit tempéré.</li>
              <li>S'il fait des bulles, le faire tremper dans de l’eau chaude.</li>
            </ul>
            <div id="pot_lumiere">exposition du pot de gel au soleil</div> <!-- end pot_lumiere -->
            <div id="pot_ouvert">pot de gel ouvert au soleil</div> <!-- end pot_ouvert -->
            <div id="pot_eau">pot de gel dans l'eau</div> <!-- end pot_eau -->
        </section> <!-- pot -->

        <section id="lime">
          <h3>La lime</h3>
          <ul>
              <li>Si la lime est nouvelle, on peut prendre une ancienne lime pour limer les arrêts de la nouvelle. 
              Au sinon, on coupe ses doigts avec le frottement.</li>
          </ul>
            <div id="lime_nouvelle">nouvelle lime</div> <!-- end lime-->
        </section> <!-- lime -->
        
        <section id="bloc">
          <h3>Le bloc</h3>
          <ul>
              <li>Pour faire des économies, coupez un bloc en deux.</li>
          </ul>
            <div id="bloc_coupe">bloc coupé</div>
        </section> <!-- lime -->

        <section id="pinceaux">
          <h3>Les pinceaux</h3>
            <ul>
              <li>Pour faire un dégradé entre deux couleurs, ou des petits points, on peut utiliser un cure-dent.</li>
              <li>Ne jamais mettre un pinceau à proximité des lampes UV au sinon le gel durci et le pinceau est inutilisable.</li>
              <li>Le pinceau à gel monophasé, ne jamais le nettoyer au dissolvant car celui-ci s’abime.</li>
              <li>Pour la french, utilisez un pinceau avec un embout fin.</li>
              <li>Pour le remplissage de l’ongle, utiliser un pinceau plus ou moins épais pour la rapidité.</li>
            </ul>
            <div id="cure_dent">petit point avec cure-dent</div> <!-- end cure_dent -->
            <div id="pinceau">pinceau usé</div> <!-- end pinceau -->
        </section> <!-- pinceaux -->

        <section id="couleur">
          <h3>La couleur</h3>
            <ul>
              <li>On peut créer de nouvelles couleurs avec du gel et un peu de maquillage en poudre.</li>
              <li>Avec les fonds de pot, on peut faire des mélanges pour créer une nouvelle couleur.</li>
              <li>Avec des paillettes en poudre, dans un petit pot fermable, y mélanger un peu de gel avec des paillettes pour pouvoir l’appliquer sur l’ongle comme décoration par exemple.</li>
            </ul>
            <div id="maquillage">poudre à maquillage pour faire des nouvelles couleurs</div> <!-- end maquillage -->
            <div id="paillette">paillette pour faire des couleurs pailletées</div> <!-- end paillette -->
        </section> <!-- couleur -->

        <section id="cuticules">
          <h3>Les cuticules</h3>
            <ul>
              <li>Ne jamais les enlever.</li>
              <li>Les repousser avec un bâtonnet en bois, pour avoir plus facile, on peut mettre de l’huile pour les mains.</li>
            </ul>
            <div id="cuticule">repousser les cuticules avec un repousse cuticules</div> <!-- end cuticules -->
        </section> <!-- cuticules -->

        <section id="ponceuse">
          <h3>La ponceuse</h3>
            <ul>
              <li>Ne pas trop poncer l’ongle au risque d’abimer la plaque de l’ongle. Dès que l’on sent que ça chauffe, il faut diminuer le ponçage.</li>
              <li>Ne jamais enlever le gel soi-même, poncer avec une lime ou avec la ponceuse.</li>
            </ul>
            <div id="lime_ponceuse">limer le gel avec une lime</div> <!-- end lime_ponceuse -->
            <div id="ponceuse_materiel">la ponceuse pour limer le gel</div> <!-- end ponceuse -->
        </section> <!-- ponceuse -->

        <a href="mailto:desmidts.morgane@gmail.com" class="button">Envoyez mes astuces</a>

    </section> <!-- end section astuces -->
    </div> <!-- end container -->

    <div class="back-to-top">back to top</div>
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
