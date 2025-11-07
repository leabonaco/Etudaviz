<?php
require "./include/functions.inc.php";

$id = $_GET['id'] ?? null;
if (!$id) die("Formation introuvable.");

$etab = getEtablissementById($id);
if (!$etab) die("Aucune donnée trouvée.");

$debouches = getDebouchesDepuisOnisep(
    $etab['nom'] ?? '',
    $etab['code_formation'] ?? null
);
// Plus tard, tu remplaceras ceci par ton vrai système de session
$user_is_subscribed = false; // true si abonné connecté

$title = "Détails - " . ($etab['nom'] ?? 'Formation');
$h1    = $etab['nom'] ?? 'Formation';
require "./include/header.inc.php";
?>

<section class="formation-detail">
  <div class="formation-section presentation">
    <h3>Présentation de la formation</h3>

    <?php
      $fl = $etab['nom'] ?? '';
      $tf = $etab['type'] ?? '';
      $etablissement = $etab['etablissement'] ?? '';
      $discipline = '';

      // Si le nom contient un tiret, on prend la partie après pour isoler la spécialité
      if (!empty($fl) && strpos($fl, '-') !== false) {
          $parts = explode('-', $fl, 2);
          $discipline = trim($parts[1]);
      }

      // ✅ Texte d’intro dynamique selon le type de formation
      $introTexte = "";
      switch (true) {
        case stripos($tf, 'BTS') !== false:
          $introTexte = "Le {$tf} {$discipline} est une formation courte et professionnalisante de niveau Bac+2. 
          Elle prépare les étudiants à une insertion rapide dans le monde du travail tout en offrant des possibilités 
          de poursuite d’études, notamment vers les licences professionnelles ou les écoles spécialisées.";
          break;

        case stripos($tf, 'BUT') !== false:
          $introTexte = "Le {$tf} {$discipline} est un diplôme de niveau Bac+3 proposé par les Instituts Universitaires 
          de Technologie. Il associe enseignements théoriques, projets tutorés et stages, pour former des techniciens 
          supérieurs immédiatement opérationnels.";
          break;

        case stripos($tf, 'Licence professionnelle') !== false:
          $introTexte = "Cette {$tf} {$discipline} est une formation universitaire d’un an, destinée à des étudiants 
          souhaitant se spécialiser après un Bac+2. Elle met l’accent sur la professionnalisation et l’expérience en entreprise.";
          break;

        case stripos($tf, 'Licence') !== false:
          $introTexte = "La {$tf} {$discipline} est un cursus universitaire en trois ans qui offre une base solide dans 
          le domaine concerné. Elle vise à développer les connaissances académiques et les compétences fondamentales 
          nécessaires pour la poursuite d’études ou l’entrée dans la vie active.";
          break;

        case stripos($tf, 'Master') !== false:
          $introTexte = "Le {$tf} {$discipline} est une formation de niveau Bac+5 qui approfondit les compétences 
          acquises en licence. Elle prépare à des fonctions d’expertise, de recherche ou de management, selon la spécialité choisie.";
          break;

        default:
            $disc = $discipline ?: 'la discipline concernée';
            $introTexte = "La formation {$fl} proposée par {$etablissement} permet d’acquérir des compétences solides 
            dans le domaine de {$disc}. 
            Elle associe cours théoriques, travaux pratiques et mise en situation professionnelle.";
            break;

      }
    ?>

    <p class="intro">
      <?= nl2br(htmlspecialchars($introTexte)) ?>
    </p>

    <ul class="presentation-details">
      <?php if (!empty($etab['annee'])): ?>
        <li><strong>Année de référence :</strong> <?= htmlspecialchars($etab['annee']) ?></li>
      <?php endif; ?>

      <?php if (!empty($etab['app'])): ?>
        <li><strong>Modalité :</strong> <?= htmlspecialchars($etab['app']) ?></li>
      <?php endif; ?>

      <?php if (!empty($etab['region']) || !empty($etab['departement']) || !empty($etab['ville'])): ?>
        <li><strong>Localisation :</strong> 
          <?= htmlspecialchars(trim(($etab['ville'] ?? '').', '.($etab['departement'] ?? '').', '.($etab['region'] ?? ''), ' ,')) ?>
        </li>
      <?php endif; ?>

      <?php if (!empty($etab['site'])): ?>
        <li><strong>Site de l’établissement :</strong> 
          <a href="<?= htmlspecialchars($etab['site']) ?>" target="_blank" rel="noopener">
            Visiter le site
          </a>
        </li>
      <?php endif; ?>

      <?php if (!empty($etab['lien'])): ?>
        <li><strong>Fiche Parcoursup :</strong> 
          <a href="<?= htmlspecialchars($etab['lien']) ?>" target="_blank" rel="noopener">
            Consulter la fiche
          </a>
        </li>
      <?php endif; ?>
    </ul>

    <div class="formation-description">
      <p>
        Cette formation associe enseignements théoriques et mises en pratique 
        à travers des projets concrets et, selon le parcours, des stages en milieu professionnel. 
        Les contenus varient d’un établissement à l’autre et peuvent inclure des modules d’ouverture 
        vers d’autres disciplines.
      </p>
      <p>
        Les étudiants développent ainsi à la fois des savoirs fondamentaux et des compétences 
        directement mobilisables dans leur futur environnement professionnel.
      </p>
    </div>
  </div>

  <?php if ($debouches): ?>
    <div class="formation-section debouches">
      <h3>Débouchés et poursuites d’études</h3>
        <?php if (!empty($debouches['secteur'])): ?>
          <p><strong>Secteur(s) :</strong> <?= htmlspecialchars($debouches['secteur']) ?></p>
        <?php endif; ?>
        <?php if (!empty($debouches['debouches'])): ?>
          <p><strong>Métiers visés :</strong> <?= nl2br(htmlspecialchars($debouches['debouches'])) ?></p>
        <?php endif; ?>
        <?php if (!empty($debouches['poursuite_etudes'])): ?>
          <p><strong>Poursuites d’études :</strong> <?= nl2br(htmlspecialchars($debouches['poursuite_etudes'])) ?></p>
        <?php endif; ?>
    </div>
  <?php endif; ?>

    <?php if (!empty($etab['coordonnees'][0]) && !empty($etab['coordonnees'][1])):$lat = $etab['coordonnees'][0]; $lon = $etab['coordonnees'][1];?>
      <div class="formation-section map">
        <h3>Localisation de l’établissement</h3>
          <div id="map" style="height: 300px; border-radius: 10px;"></div>
      </div>
      <div class="formation-section distance-calculator">
        <h3>Calculer la distance depuis votre domicile</h3>
          <?php if (!$user_is_subscribed): ?>
            <p>Entrez votre adresse pour estimer la distance jusqu’à cet établissement :</p>
            <div class="distance-form">
              <input type="text" id="userAddress" placeholder="Entrez votre ville (ex. : Lille)" />
              <button id="btnDistance" onclick="calculateDistance()">Calculer</button>
            </div>
            <p id="distanceResult" class="distance-result"></p>
          <?php else: ?>
            <div class="distance-locked">
              <p>🔒 Cette fonctionnalité est réservée à nos abonnés.</p>
              <a href="/login.php" class="btn-login">Se connecter</a>
              <a href="/abonnement.php" class="btn-subscribe">Découvrir les offres</a>
            </div>
          <?php endif; ?>
      </div>
    <?php endif; ?>
  </section>




<!-- Leaflet CSS + JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
  window.mapLat = <?= json_encode($lat) ?>;
  window.mapLon = <?= json_encode($lon) ?>;
  window.mapZoom = 14;
  window.mapMarkerLabel = <?= json_encode($etab['etablissement'] . ' - ' . ($etab['ville'] ?? '')) ?>;
</script>


<script src="./js/map.js"></script>
<script src="./js/distance.js"></script>


<?php require "./include/footer.inc.php"; ?>
