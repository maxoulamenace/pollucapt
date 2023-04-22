<html>
<head>
  <link rel="stylesheet" href="style.css" />
  <title>Pollucapt</title>
  <link rel="icon" type="image/png" href="logo.png" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">

<style>
  #map {
    height: 100%;
    width: 100%;
  }
</style>
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
</head>

<!-- ***************************************Menu***************************************\ -->

<meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav">
    <div>
      <img src="logo.png" height="50px">
    </div>
	<div>
	<h1>POLLUCAPT<img src="feuille.png" height="35px"></h1>
	</div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
  </label>
    <ul class="menu">
      <li><a id="menu" href="index.html">Accueil</a></li>
      <li><a id="menu" href="projet.php">Notre Projet</a></li>
      <li><a id="menu" href="carte.php">Carte</a></li>
      <li><a id="menu" href="acheter.html">Acheter</a></li>
      <li><a id="menu" href="contact.html">Contacte</a></li>
      <li><a id="menu" href="accueil.php">Connexion</a></li>
    </ul>
  </section>
  <!-- ***************************************Sommaire*************************************** -->
<body id="projet">
  <div id="sommaire">
    <h5></br>Sommaire</h5>
    <p id="sommaire">
        <a id="sommaire" href="#tire-obj">&#x2022; Objectif </br> </a>
        <a id="sommaire" href="">&#x2022; O&ugrave; </br> </a>
        <a id="sommaire" href="#materiel">&#x2022; R&eacute;alisation </br> </a>
    </p>
    </div>
<div id="tire-obj">
  <!-- ***************************************Objectif*************************************** -->

  <h6>Objectifs</h6>
</div>
    <main id="boxes">
      <div id="column1">
        <p id="objectif">
          <ol class="objectif">
            <li id="objectif">Objectifs de d&eacute;veloppement durable</li></br>
            <ul>
            <li id="objectif">Bonne sant&eacute; et boen &ecirc;tre</li></br>
            <li id="objectif">Villes et comunaut&eacute;es durable</li></br>
            </ul>
            <li id="objectif">Sensibiliser la population</li></br>
            <li id="objectif">Pr&eacute;server la sant&eacute;e des utilisateurs</li></br>
            <li id="objectif">objectifs de d&eacute;veloppement durable</li></br>
        </ol>
        </p>
      </div>
      <div id="column2">
        <p id="objectif">
          <ol class="objectif">
            <li id="objectif">D&eacute;tecter un niveau de pollution dangereux</li></br>
            <li id="objectif">Encourager les décideurs à prendre des mesures pour réduire la pollution de l'air</li></br>
            <li id="objectif">Améliorer la compréhension de la fluctuation de la pollution de l'air</li></br>
            <li id="objectif">Encourager la collaboration entre les communautés locales</li></br>
            <li id="objectif">Promouvoir la transparence et la responsabilité dans les politiques environnementales</li></br>
            <li id="objectif">Fournir des données précises pour aider les personnes souffrant de problèmes respiratoires</li></br>
          </ol>
        </p>
      </div>
    </main>

    <!-- ***************************************Matériel*************************************** -->

    <div id="materiel">
      <h5></br>Mat&eacute;riel</h5>
      <p id="materiel">
        <img id="materiel" src="esp.png">
        L'Arduino MKR1010 WiFi est un microcontrôleur compact et puissant qui prend en charge la connectivité WiFi, ce qui permet de transmettre facilement les données collectées à un serveur distant pour le stockage et l'analyse.

        Le capteur d'ozone est un capteur couramment utilisé pour mesurer la concentration d'ozone dans l'air. Il est très sensible à l'ozone et est capable de mesurer des concentrations de gaz aussi faibles que 10 ppb.
        
        Le capteur de température est un composant couramment utilisé pour mesurer la température ambiante. Les variations de température peuvent avoir un impact significatif sur la qualité de l'air et il est donc important de mesurer cette variable.
        
        La balise GPS est utilisée pour enregistrer la position géographique de l'appareil. Cela permet de suivre la trajectoire de l'appareil lorsqu'il se déplace et de cartographier les données collectées en fonction de leur position géographique.
        
        Le bouton d'allumage et les LED indicatrices peuvent aider à contrôler et à surveiller l'état de l'appareil. Le bouton peut être utilisé pour allumer et éteindre l'appareil, tandis que les LED peuvent être utilisées pour indiquer l'état de l'appareil, comme si les capteurs fonctionnent correctement ou si les données sont en cours de transmission.
        
        Ces composants ont été choisis pour leur compatibilité avec le microcontrôleur Arduino, leur capacité à collecter des données pertinentes pour surveiller la qualité de l'air et les conditions environnementales, ainsi que pour leur faible coût.
        
            </div>
    <!-- ***************************************Construction*************************************** -->

    <div id="construction">
      <h5>Construction</h5>
      <p id="construction">
        <img id="construction" src="construction.png">

        Définir les exigences du projet : la première étape consiste à définir les objectifs du projet, les données que vous souhaitez collecter et les fonctionnalités que vous souhaitez inclure dans votre solution.

        Concevoir le schéma électronique : une fois que vous avez défini les exigences du projet, vous pouvez concevoir un schéma électronique pour votre solution. Cela implique de sélectionner les composants appropriés, de les connecter entre eux et de les interfacer avec le microcontrôleur Arduino.
        
        Construire le circuit : une fois que vous avez conçu le schéma électronique, vous pouvez construire le circuit en connectant les différents composants ensemble en suivant le schéma électronique.
        
        Programmer l'Arduino : une fois que le circuit est construit, vous pouvez programmer l'Arduino en utilisant un langage de programmation tel que C++. Vous pouvez utiliser une variété de bibliothèques pour interagir avec les différents composants du circuit et collecter les données souhaitées.
        
        Tester et déboguer : une fois que le code est écrit, vous pouvez tester votre solution en la connectant à un ordinateur et en simulant différentes conditions. Vous pouvez également tester la solution sur le terrain pour vous assurer qu'elle fonctionne correctement.
        
        Intégrer les données à une carte en ligne : enfin, vous pouvez intégrer les données collectées à une carte en ligne en utilisant une plateforme de cartographie telle que Google Maps ou OpenStreetMap. Cela permettra aux utilisateurs d'afficher les données collectées et de les utiliser pour surveiller la qualité de l'air dans différentes zones géographiques.
        
        Ces étapes sont générales et peuvent varier en fonction des spécificités du projet.
            </div>

    </body>
    <!-- ***************************************Programation*************************************** -->

    <div id="programation">
      <h5>Programation</h5>
      <p id="programation">
        <img id="programation-text" src="esp.png">
        <img id="programation" src="programation.png">
        Nous avions choisi des capteur uizdeh fuizehfnc mpfh ifhu zeuipghf zeuofh czePUCFHEZ PIOCFH ZEUIFCHZE UIOFCH Nous avions choisi des capteur uizdeh fuizehfnc mpfh ifhu zeuipghf zeuofh czePUCFHEZ PIOCFH ZEUIFCHZE UIOFCH</p>
    </div>
    <!-- ***************************************Résultat*************************************** -->
    <div id="resultat">
      <h5></br>R&eacute;sultat</h5>
      <p id="resultat">
        <img id="resultat" src="esp.png">
          Nous avions choisi des capteur uizdeh fuizehfnc mpfh ifhu zeuipghf zeuofh czePUCFHEZ PIOCFH ZEUIFCHZE UIOFCH Nous avions choisi des capteur uizdeh fuizehfnc mpfh ifhu zeuipghf zeuofh czePUCFHEZ PIOCFH ZEUIFCHZE UIOFCH</p>
    </div>

    <!-- ***************************************Où*************************************** -->

<div id="ou">
      <h5></br>Où</h5>
        <div id="oucarte">
          <div id="map"></div>
    <script type="text/javascript">
      function couleur(a) {
        let result;
        if (a > 1300) {
          result = 'rgba(255, 0, 55, 0.5)';
        }
        else if (a < 900) {
          result = 'rgba(100, 250, 55, 0.5)';
        }
        else {
          result = 'rgba(255, 150, 0, 0.5)';
        }
        return result;
        }
      var nom = new ol.layer.Tile({
        source: new ol.source.OSM({attributions: [ "Pollucat'" ]})
      });

      var vert = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/pointvert.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [100, 250, 55, 0.7],
            })
          })
        })
      });
      var rouge = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/pointrouge.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [255, 0, 55, 0.7],
            })
          })
        })
      });

      var orange = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/pointorange.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [255, 150, 0, 0.7],
            })
          })
        })
      });

      var map = new ol.Map({
        layers: [nom, vert, rouge ,orange],
        target: "map",
        view: new ol.View({
          center: ol.proj.fromLonLat([2.333333, 48.866667]),
          zoom: 12
        })
      });
    </script>
        </div>
        <p id="ou">
        L'Arduino MKR1010 WiFi est un microcontrôleur compact et puissant qui prend en charge la connectivité WiFi, ce qui permet de transmettre facilement les données collectées à un serveur distant pour le stockage et l'analyse.

        Le capteur d'ozone est un capteur couramment utilisé pour mesurer la concentration d'ozone dans l'air. Il est très sensible à l'ozone et est capable de mesurer des concentrations de gaz aussi faibles que 10 ppb.
        
        Le capteur de température est un composant couramment utilisé pour mesurer la température ambiante. Les variations de température peuvent avoir un impact significatif sur la qualité de l'air et il est donc important de mesurer cette variable.
        
        La balise GPS est utilisée pour enregistrer la position géographique de l'appareil. Cela permet de suivre la trajectoire de l'appareil lorsqu'il se déplace et de cartographier les données collectées en fonction de leur position géographique.
        
        Le bouton d'allumage et les LED indicatrices peuvent aider à contrôler et à surveiller l'état de l'appareil. Le bouton peut être utilisé pour allumer et éteindre l'appareil, tandis que les LED peuvent être utilisées pour indiquer l'état de l'appareil, comme si les capteurs fonctionnent correctement ou si les données sont en cours de transmission.
        
        Ces composants ont été choisis pour leur compatibilité avec le microcontrôleur Arduino, leur capacité à collecter des données pertinentes pour surveiller la qualité de l'air et les conditions environnementales, ainsi que pour leur faible coût.
    </p>
            </div>
        </body>

