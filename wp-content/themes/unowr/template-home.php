<?php
/*
Template Name: Home
*/

get_header( 'home' ); ?>


<body class="pushable">



    <div class="ui text container">
      <h1 class="ui inverted header">UNOWR</h1>
      <h2>Trouvez le restaurant <b>idéal</b> pour un moment <b>parfait</b> !</h2>
      <p>Simple, rapide, efficace & gratuit !</p>
      <a href="<?php echo get_template_directory_uri(); ?>/rechercher-un-restaurant"><button class="snip1535">Chercher un restaurant</button></a>
    </div>
  </div>
  <div class="transition-bottom"></div>

  <div class="ui vertical stripe segment" style="background-color: #FAFAFA">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <div class="ui container">
            <h2 class="ui header">Nous te trouvons le restaurant qu'il te faut !</h2>
            <p>Nous te posons une série de questions afin de connaitre tes envies du moment, puis nous te proposons trois restaurants les plus pertinents. Tu n'as plus qu'à choisir celui que tu préfères !</p>
          </div>
        </div>
        <div class="six wide right floated column">
          <img src="<?php echo get_template_directory_uri(); ?>/css/img/avatar/4.neutral-thanks.svg" class="ui large rounded image" style="margin: auto !important">
        </div>
      </div>
    </div>
  </div>
    
<div class="black">
  <div class="ui container w3-content">    
  <div class="mySlides ui vertical stripe quote">
      <div class="ui equal width stackable grid">
        <div class="row">
          <div class="column" style="padding: 0 !important">
            <img src="<?php echo get_template_directory_uri(); ?>/css/img/iphone.svg" class="fluide image" style="max-height: 550px;">
          </div>
          <div class="middle aligned column" style="padding-bottom: 0 !important">
            <h3><span style="font-family: 'SFDisplay medium'; font-size: 60px; color: #E0E0E0">01.</span><br>
            Répond aux questions</h3>
            <p>Nous te posons une suite de questions afin de connaitre tes envies.</p>
            <button class="ui icon disabled button">Étape 1</button>
            <button class="ui icon button" onclick="plusDivs(1)">Étape 2</button>
            <button class="ui icon button" onclick="plusDivs(2)">Étape 3</button>
          </div>
        </div>
      </div>
    </div>

    <div class="mySlides ui vertical stripe quote">
      <div class="ui equal width stackable grid">
        <div class="row">
          <div class="column" style="padding: 0 !important">
            <img src="<?php echo get_template_directory_uri(); ?>/css/img/iphone.svg" class="fluide image" style="max-height: 550px;">
          </div>
          <div class="middle aligned column" style="padding-bottom: 0 !important">
            <h3><span style="font-family: 'SFDisplay medium'; font-size: 60px; color: #E0E0E0">02.</span><br>
            Choisi ton restaurant</h3>
            <p>À la fin des questions, nous te proposons trois restaurants les plus pertinents. Tu peux choisir le restaurant qui te plait.</p>
            <button class="ui icon button" onclick="plusDivs(-1)">Étape 1</button>
            <button class="ui icon disabled button">Étape 2</button>
            <button class="ui icon button" onclick="plusDivs(1)">Étape 3</button>
          </div>
        </div>
      </div>
    </div>

    <div class="mySlides ui vertical stripe quote">
      <div class="ui equal width stackable grid">
        <div class="row">
          <div class="column" style="padding: 0 !important">
            <img src="<?php echo get_template_directory_uri(); ?>/css/img/iphone.svg" class="fluide image" style="max-height: 550px;">
          </div>
          <div class="middle aligned column" style="padding-bottom: 0 !important">
            <h3><span style="font-family: 'SFDisplay medium'; font-size: 60px; color: #E0E0E0">03.</span><br>
            Réserve gratuitement</h3>
            <p>C'est simple et rapide, tu cliques et c'est réservé !</p>
            <button class="ui icon button" onclick="plusDivs(-2)">Étape 1</button>
            <button class="ui icon button" onclick="plusDivs(-1)">Étape 2</button>
            <button class="ui icon button disabled">Étape 3</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>

  <div class="ui vertical stripe">
<div id="concept-part" class="ui center aligned equal width stackable three quarter height grid container"> 
      <div class="row">
        <div class="middle aligned column">
          <img src="<?php echo get_template_directory_uri(); ?>/css/img/stopwatch.svg" class="ui tiny image" style="margin: auto !important">
          <h2>2 minutes</h2>
          <p>C'est le temps qu'il te faudra pour trouver LE restaurant parfait.</p>
        </div>
        <div class="middle aligned column">
          <img src="<?php echo get_template_directory_uri(); ?>/css/img/box.svg" class="ui tiny image" style="margin: auto !important"> 
          <h2>8 questions (max)</h2>
          <p>C'est tout ce dont nous avons besoin pour connaître tes envies.</p>
        </div>
        <div class="middle aligned column">
          <img src="<?php echo get_template_directory_uri(); ?>/css/img/store-concept.svg" class="ui tiny image" style="margin: auto !important">
          <h2>3 restaurants</h2>
          <p>C'est le nombre de résultats proposés. Tu n'as plus qu'à choisir !</p>
        </div>
        <br>
      </div>
    </div>
  </div>

  <div class="transition-top"></div>

  <div class="ui inverted vertical stripe segment">
    <div class="ui container">
      <div class="ui grid">
      <div class="center aligned row">
          <div class="column">
              <h2>Nous sommes connectés !</h2>
              <p>Retrouve nous sur les réseaux sociaux.</p>
              <button class="ui massive basic teal inverted icon button"><i class="icon twitter"></i></button>
              <button class="ui massive basic blue inverted icon button"><i class="icon facebook f"></i></button>
              <button class="ui massive basic purple inverted icon button"><i class="icon instagram"></i></button>
              <br><br>
              <p>Ou contacte nous par e-mail :<br> 
              <u>contact@unowr.fr</u></p>
          </div>
        </div>  
      </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer( '' ); ?>
