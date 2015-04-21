<?php include('config.php') ?>
<?php $page = 'astuces'; ?>
<!DOCTYPE html>
<html>
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

<?php include('header.php');?>

<div id="container">
<section id="astuces">
  <h1>Astuces</h1>

    <section id="pot">
      <h2>Les pots de gel</h2>
        <ul>
          <li>Ne pas les mettre à la lumière du jour ou au soleil.</li>
          <li>Ne pas les laisser trop longtemps ouvert durant la pose.</li>
          <li>Il ne faut pas mélanger le gel monophasé.</li>
          <li>Les mettres dans un endroit tempéré.</li>
          <li>Si il fait des bulles, le faire tremper dans de l’eau chaude.</li>
          
        </ul>
        <div id="pot_lumiere"></div> <!-- end pot_lumiere -->
        <div id="pot_ouvert"></div> <!-- end pot_ouvert -->
        <div id="pot_eau"></div> <!-- end pot_eau -->
    </section> <!-- pot -->

    <section id="lime">
      <h2>La lime</h2>
        <ul>
          <li>Si la lime est nouvelle, on peut prendre une ancienne lime pour limer les arrêts de la nouvelle. Au sinon, on coupe ses doigts avec le frottement.</li>
        </ul>
        <div id="lime"></div> <!-- end lime-->
    </section> <!-- lime -->

    <h2>Le bloc</h2>
      <ul>
        <li>Pour faire des économies, couper un bloc en deux.</li>
    </ul>

    <section id="pinceaux">
      <h2>Les pinceaux</h2>
        <ul>
          <li>Pour fair un dégradé entre deux couleurs, ou pour faire des petits points, on peut utiliser un cure-dent.</li>
          <li>Ne jamais mettre un pinceau à proximité des lampes UV au sinon le gel durci et le pinceau est inutilisable.</li>
          <li>Le pinceau à gel monophasé, ne jamais le nettoyer au dissolvant car celui-ci s’abime.</li>
          <li>Pour la french, utiliser un pinceau avec un embout fin.</li>
          <li>Pour le remplissage de l’ongle, utiliser un pinceau plus ou moins épais pour la rapidité.</li>
        </ul>
        <div id="cure_dent"></div> <!-- end cure_dent -->
        <div id="pinceau"></div> <!-- end pinceau -->
    </section> <!-- pinceaux -->

    <section id="couleur">
      <h2>La couleur</h2>
        <ul>
          <li>On peut créer de nouvelles couleurs avec du gel et un peu de maquillage en poudre.</li>
          <li>Avec les fonds de pot, on peut faire des mélanges pour créer une nouvelles couleurs.</li>
          <li>Avec des pailettes en poudre, dans un petit pot fermable, y mélanger un peu de gel avec des pailettes pour pouvoir l’appliquer sur l’ongle comme décoration par exemple.</li>
        </ul>
        <div id="maquillage"></div> <!-- end maquillage -->
        <div id="paillette"></div> <!-- end paillette -->
    </section> <!-- couleur -->

    <section id="cuticules">
      <h2>Les cuticules</h2>
        <ul>
          <li>Ne jamais les enlever.</li>
          <li>Les repousser avec un batonnet en bois, pour avoir plus facile, on peut mettre de l’huile pour les mains.</li>
        </ul>
        <div id="cuticules"></div> <!-- end cuticules -->
    </section> <!-- cuticules -->

    <section id="ponceuse">
      <h2>La ponceuse</h2>
        <ul>
          <li>Ne pas trop poncer l’ongle au risque d’abimer la plaque de l’ongle. Dès que l’on sent que ça chauffe, il faut diminuer le ponsage.</li>
          <li>Ne jamais enlever le gel soi-même, poncer avec une lime ou avec la ponceuse.</li>
        </ul>
        <div id="lime_ponceuse"></div> <!-- end lime_ponceuse -->
        <div id="ponceuse"></div> <!-- end ponceuse -->
    </section> <!-- ponceuse -->

    <a href="sign_up.php" class="button">Propose tes astuces !</a>

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

<? include('footer.php');?>
</body>
</html>
