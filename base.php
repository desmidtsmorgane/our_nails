<?php include('config.php') ?>
<?php $page = 'categories'; ?>
<?php $page = 'simple'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>La base - Catégories | Our Nails - Nail Art</title>
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
<section id="base">
  <h1>La base</h1>
  <p>
    Cette pose consiste à apprendre les bases des ongles en gel en réalisant une french blanche.
  </p>

  <ul class="info">
    <li>
      <svg version="1.1" id="temps" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg> 
      <p>1H30</p>
    </li>
    <li>
      <svg version="1.1" id="like" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px" height="27.333px" viewBox="0 0 29.5 27.333" enable-background="new 0 0 29.5 27.333" xml:space="preserve"> <path fill="#DB7197" d="M63.465,2.917c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S70.207,2.917,63.465,2.917z M63.465,25.708c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C74.048,20.97,69.31,25.708,63.465,25.708z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="63.465" y1="7.747" x2="63.465" y2="15.125"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="63.465" y1="15.125" x2="66.639" y2="19.776"/> <path fill="#DB7197" d="M20.876,1.753c4.258,0,7.71,3.453,7.71,7.71c0,7.036-13.941,16.382-13.941,16.382 S0.703,16.837,0.703,9.463c0-5.3,3.453-7.71,7.709-7.71c2.565,0,4.829,1.258,6.232,3.184C16.047,3.011,18.312,1.753,20.876,1.753z "/></svg>
      <p>24</p>
    </li>
    <li><span>Catégorie:</span> Simple</li>
  </ul>

  <div id="resultat"></div>
  
  <h2>Tu as besoin de</h2>
    <ul class="materiels">
      <li>- <a href="produits.php" target="_blank">Gel monophasé</a></li>
      <li>- <a href="produits.php" target="_blank">Gel blanc</a></li>
      <li>- <a href="produits.php" target="_blank">Pinceau à gel</a></li>
      <li>- <a href="produits.php" target="_blank">Pinceau à french</a></li>
      <li>- <a href="produits.php" target="_blank">Vernis</a></li>

      <li>- <a href="produits.php" target="_blank">Primer</a></li>
      <li>- <a href="produits.php" target="_blank">Lime</a></li>
      <li>- <a href="produits.php" target="_blank">Bloc blanc</a></li>
      <li>- <a href="produits.php" target="_blank">Dissolvant doux</a></li>
      <li>- <a href="produits.php" target="_blank">Lampes UV 36 watts</a></li>
    </ul>

    <div class="materiel"></div>

    <!--<a href="" class="button">Créer ton tuto !</a>-->

    <div id="etape_1">
      <h2>1. Les cuticules</h2>
      <p>Repousser les cuticules, en partant du bas de l'ongle vers le haut tout en poussant délicatement.</p>
      <ul>
        <li><svg version="1.1" id="temps_cuticules" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg><p>10 min.</p></li>
        <li><svg version="1.1" id="materiel_cuticules" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.75px" height="26.25px" viewBox="0 0 33.75 26.25" enable-background="new 0 0 33.75 26.25" xml:space="preserve"> <path fill="#DB7197" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M0.5,24.586c0,0,1.265-1.498,2.81-2.716 c1.545-1.218,5.877-5.053,6.087-5.229C9.608,16.466,25.216,2.527,25.216,2.527s0.55-0.503,0.901-0.152 c0.352,0.351,0.047,0.515-0.375,0.89C25.32,3.639,14.083,15.003,14.083,15.003s-3.515,3.017-3.89,3.251 c-0.375,0.234-6.229,4.553-6.229,4.553S2.233,24.024,0.5,24.586z"/> <path fill="#FFFFFF" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M10.372,18.125c0,0-0.503-1.146-1.216-1.282 l-0.221,0.185c-1.218,0.924-4.334,3.826-5.625,4.843c0,0,0.772,0.38,0.655,0.937C3.965,22.807,9.998,18.359,10.372,18.125z"/> <path fill="#878787" d="M55.465-9.089c4.258,0,7.711,3.453,7.711,7.71c0,7.036-13.941,16.382-13.941,16.382 S35.293,5.995,35.293-1.379c0-5.3,3.453-7.71,7.709-7.71c2.564,0,4.828,1.258,6.232,3.184C50.637-7.831,52.9-9.089,55.465-9.089z" /></svg><p>Repoussoir</p></li>
      </ul>
      <div class="cuticule_1"></div>
      <div class="cuticule_2"></div>
    </div>

    <div id="etape_2">
      <h2>2. Le ponçage</h2>
      <p>Poncer l’entièreté de l’ongle avec une lime ou un bloc. Pour le mouvement, c'est au choix, il faut juste veiller à bien poncer l'entièreté</p>
      <ul>
        <li><svg version="1.1" id="temps_poncage" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg><p>20 min.</p></li>
        <li><svg version="1.1" id="materiel_poncage" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.75px" height="26.25px" viewBox="0 0 33.75 26.25" enable-background="new 0 0 33.75 26.25" xml:space="preserve"> <path fill="#DB7197" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M0.5,24.586c0,0,1.265-1.498,2.81-2.716 c1.545-1.218,5.877-5.053,6.087-5.229C9.608,16.466,25.216,2.527,25.216,2.527s0.55-0.503,0.901-0.152 c0.352,0.351,0.047,0.515-0.375,0.89C25.32,3.639,14.083,15.003,14.083,15.003s-3.515,3.017-3.89,3.251 c-0.375,0.234-6.229,4.553-6.229,4.553S2.233,24.024,0.5,24.586z"/> <path fill="#FFFFFF" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M10.372,18.125c0,0-0.503-1.146-1.216-1.282 l-0.221,0.185c-1.218,0.924-4.334,3.826-5.625,4.843c0,0,0.772,0.38,0.655,0.937C3.965,22.807,9.998,18.359,10.372,18.125z"/> <path fill="#878787" d="M55.465-9.089c4.258,0,7.711,3.453,7.711,7.71c0,7.036-13.941,16.382-13.941,16.382 S35.293,5.995,35.293-1.379c0-5.3,3.453-7.71,7.709-7.71c2.564,0,4.828,1.258,6.232,3.184C50.637-7.831,52.9-9.089,55.465-9.089z" /></svg><p>Un bloc blanc</p></li>
      </ul>
      <div class="poncage_1"></div>
      <div class="poncage_2"></div>
    </div>

    <div id="etape_3">
      <h2>3. Le primer</h2>
      <p>Appliquer le primer sur l’entièreté de l’ongle pour que le gel adère parfaitement.</p>
      <ul>
        <li><svg version="1.1" id="temps_primer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg><p>30 min.</p></li>
        <li><svg version="1.1" id="materiel_primer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.75px" height="26.25px" viewBox="0 0 33.75 26.25" enable-background="new 0 0 33.75 26.25" xml:space="preserve"> <path fill="#DB7197" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M0.5,24.586c0,0,1.265-1.498,2.81-2.716 c1.545-1.218,5.877-5.053,6.087-5.229C9.608,16.466,25.216,2.527,25.216,2.527s0.55-0.503,0.901-0.152 c0.352,0.351,0.047,0.515-0.375,0.89C25.32,3.639,14.083,15.003,14.083,15.003s-3.515,3.017-3.89,3.251 c-0.375,0.234-6.229,4.553-6.229,4.553S2.233,24.024,0.5,24.586z"/> <path fill="#FFFFFF" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M10.372,18.125c0,0-0.503-1.146-1.216-1.282 l-0.221,0.185c-1.218,0.924-4.334,3.826-5.625,4.843c0,0,0.772,0.38,0.655,0.937C3.965,22.807,9.998,18.359,10.372,18.125z"/> <path fill="#878787" d="M55.465-9.089c4.258,0,7.711,3.453,7.711,7.71c0,7.036-13.941,16.382-13.941,16.382 S35.293,5.995,35.293-1.379c0-5.3,3.453-7.71,7.709-7.71c2.564,0,4.828,1.258,6.232,3.184C50.637-7.831,52.9-9.089,55.465-9.089z" /></svg><p>Un primer</p></li>
      </ul>
      <div class="primer_1"></div>
      <div class="primer_2"></div>
    </div>

    <div id="etape_4">
      <h2>4. La base</h2>
      <p>Appliquer une fine couche de gel puis catalyser environ 2 à 3 minutes sous la lampe. Dégraissez avec le dissolvant.</p>
      <div class="instruction">
      <ul>
        <li><svg version="1.1" id="temps_base" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg><p>40 min.</p></li>
      </ul>
      <ul class="left">
        <li><svg version="1.1" id="materiel_base" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.75px" height="26.25px" viewBox="0 0 33.75 26.25" enable-background="new 0 0 33.75 26.25" xml:space="preserve"> <path fill="#DB7197" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M0.5,24.586c0,0,1.265-1.498,2.81-2.716 c1.545-1.218,5.877-5.053,6.087-5.229C9.608,16.466,25.216,2.527,25.216,2.527s0.55-0.503,0.901-0.152 c0.352,0.351,0.047,0.515-0.375,0.89C25.32,3.639,14.083,15.003,14.083,15.003s-3.515,3.017-3.89,3.251 c-0.375,0.234-6.229,4.553-6.229,4.553S2.233,24.024,0.5,24.586z"/> <path fill="#FFFFFF" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M10.372,18.125c0,0-0.503-1.146-1.216-1.282 l-0.221,0.185c-1.218,0.924-4.334,3.826-5.625,4.843c0,0,0.772,0.38,0.655,0.937C3.965,22.807,9.998,18.359,10.372,18.125z"/> <path fill="#878787" d="M55.465-9.089c4.258,0,7.711,3.453,7.711,7.71c0,7.036-13.941,16.382-13.941,16.382 S35.293,5.995,35.293-1.379c0-5.3,3.453-7.71,7.709-7.71c2.564,0,4.828,1.258,6.232,3.184C50.637-7.831,52.9-9.089,55.465-9.089z" /></svg><p>Gel monophasé</p></li>
        <li>Pinceau à gel</li>
        <li>Dissolvant</li>
      </ul>
      </div>
      <div class="base"></div>
      <div class="catalyser"></div>
      <div class="degraisser"></div>
    </div>

    <div id="etape_5">
      <h2>5. La french blanche</h2>
      <p>Avec le gel blanc, appliquer une couche sur le bout de l'ongle pour ensuite remonté petit à petit pour y créer un dégradé. Catalsyser.</p>
      <div class="instruction">
      <ul>
        <li><svg version="1.1" id="temps_french" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg><p>1h</p></li>
      </ul>
      <ul class="left">
        <li><svg version="1.1" id="materiel_french" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.75px" height="26.25px" viewBox="0 0 33.75 26.25" enable-background="new 0 0 33.75 26.25" xml:space="preserve"> <path fill="#DB7197" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M0.5,24.586c0,0,1.265-1.498,2.81-2.716 c1.545-1.218,5.877-5.053,6.087-5.229C9.608,16.466,25.216,2.527,25.216,2.527s0.55-0.503,0.901-0.152 c0.352,0.351,0.047,0.515-0.375,0.89C25.32,3.639,14.083,15.003,14.083,15.003s-3.515,3.017-3.89,3.251 c-0.375,0.234-6.229,4.553-6.229,4.553S2.233,24.024,0.5,24.586z"/> <path fill="#FFFFFF" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M10.372,18.125c0,0-0.503-1.146-1.216-1.282 l-0.221,0.185c-1.218,0.924-4.334,3.826-5.625,4.843c0,0,0.772,0.38,0.655,0.937C3.965,22.807,9.998,18.359,10.372,18.125z"/> <path fill="#878787" d="M55.465-9.089c4.258,0,7.711,3.453,7.711,7.71c0,7.036-13.941,16.382-13.941,16.382 S35.293,5.995,35.293-1.379c0-5.3,3.453-7.71,7.709-7.71c2.564,0,4.828,1.258,6.232,3.184C50.637-7.831,52.9-9.089,55.465-9.089z" /></svg><p>Gel blanc</p></li>
        <li>Pinceau fin</li>
      </ul>
      </div>
      
      <div class="french_1"></div>
      <div class="french_2"></div>
      <div class="french_3"></div>
    </div>

    <div id="etape_6">
      <h2>6. La construction</h2>
      <p>Pour terminer, une couche de gel monophasé pour faire la construction. Cataylser puis dégraisser et ensuite appliquer une couche de vernis.</p>
      <div class="instruction">
      <ul>
        <li><svg version="1.1" id="temps_construction" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="27.333px" viewBox="0 0 27 27.333" enable-background="new 0 0 27 27.333" xml:space="preserve"> <path fill="#DB7197" d="M13.954,1.502c-6.742,0-12.208,5.466-12.208,12.208s5.466,12.208,12.208,12.208s12.208-5.466,12.208-12.208 S20.696,1.502,13.954,1.502z M13.954,24.292c-5.844,0-10.582-4.737-10.582-10.582c0-5.844,4.738-10.582,10.582-10.582 c5.845,0,10.583,4.738,10.583,10.582C24.537,19.555,19.799,24.292,13.954,24.292z"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="6.332" x2="13.954" y2="13.71"/> <line fill="none" stroke="#DB7197" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.954" y1="13.71" x2="17.128" y2="18.361"/></svg><p>1h30</p></li>
      </ul>
      <ul class="left">
        <li><svg version="1.1" id="materiel_construction" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.75px" height="26.25px" viewBox="0 0 33.75 26.25" enable-background="new 0 0 33.75 26.25" xml:space="preserve"> <path fill="#DB7197" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M0.5,24.586c0,0,1.265-1.498,2.81-2.716 c1.545-1.218,5.877-5.053,6.087-5.229C9.608,16.466,25.216,2.527,25.216,2.527s0.55-0.503,0.901-0.152 c0.352,0.351,0.047,0.515-0.375,0.89C25.32,3.639,14.083,15.003,14.083,15.003s-3.515,3.017-3.89,3.251 c-0.375,0.234-6.229,4.553-6.229,4.553S2.233,24.024,0.5,24.586z"/> <path fill="#FFFFFF" stroke="#DB7197" stroke-width="0.3" stroke-miterlimit="10" d="M10.372,18.125c0,0-0.503-1.146-1.216-1.282 l-0.221,0.185c-1.218,0.924-4.334,3.826-5.625,4.843c0,0,0.772,0.38,0.655,0.937C3.965,22.807,9.998,18.359,10.372,18.125z"/> <path fill="#878787" d="M55.465-9.089c4.258,0,7.711,3.453,7.711,7.71c0,7.036-13.941,16.382-13.941,16.382 S35.293,5.995,35.293-1.379c0-5.3,3.453-7.71,7.709-7.71c2.564,0,4.828,1.258,6.232,3.184C50.637-7.831,52.9-9.089,55.465-9.089z" /></svg><p>Gel monophasé</p></li>
        <li>Pinceau à gel</li>
        <li>Dissolvant</li>
        <li>Vernis</li>
      </ul>
      </div>
      <div class="construction"></div>
      <div class="catalyser_construction"></div>
      <div class="degraisser"></div>
      <div class="vernis"></div>
    </div>

    <div id="etape_7">
      <h2>Le résultat</h2>
      <div class="resultat"></div>
    </div>

    <?php
    //Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
      if(isset($_SESSION['username']))
      {
      ?>
      <a href="edit_infos.php" class="button">Créer ton tuto</a>
      <?php
      }
      else
      {
      //Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
      ?>
      <a href="sign_up.php" class="button">Créer ton tuto</a>
      <?php
      }
    ?>
  </section>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'ournails';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

</div> <!-- end container -->

<!--<div id="test">

  <ul>
      <li>
        <img src="img/img_23.png" alt="" />
        <h2>Dégradé avec fleure</h2>
        <p>Un dégradé sympas et simple agrémenté d'une fleure</p>
        <a href="#">Voir le tuto</a>
      </li>

  </ul>

</div> -->
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

<? include('footer.php');?>

</body>

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'ournails';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>

</html>
