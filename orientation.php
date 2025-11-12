<?php
// ------- Métadonnées de page -------
$title       = "Orientation";
$description = "Découvre les parcours, métiers et outils pour mieux t’orienter vers tes études supérieures.";
$h1          = "Comment apprendre à s'orienter ?";

// Header du site
require "./include/header.inc.php";

// ------- Récupération du profil -------
$profil = isset($_GET['profil']) ? $_GET['profil'] : null;

// Valeurs par défaut (au cas où aucun profil n'est passé)
$titre = "Trouve ta voie avec Étudaviz 🌟";
$texte = "Dis-nous qui tu es pour accéder à des ressources personnalisées : formations, parcours, métiers et témoignages d’étudiants.";
$cta   = "<a href='#profils' class='btn-primary'>Choisir mon profil</a>";
$image = "./images/orientation.jpg";

// ------- Contenu dynamique selon le profil -------
switch ($profil) {
    case 'lyceen':
        $titre = "Lycéen ? Prépare ton avenir dès aujourd’hui 🎓";
        $texte = "Tu veux anticiper ton orientation après le bac ? Découvre les formations, parcours et témoignages d’étudiants pour trouver ta voie.";
        $cta   = "<a href='formations.php?type=bac' class='btn-primary'>Explorer les formations post-bac</a>";
        $image = "./images/lyceen.jpg";
        break;

    case 'etudiant':
        $titre = "Déjà étudiant ? Trace ton propre chemin 🚀";
        $texte = "Réoriente-toi, découvre les passerelles possibles ou explore les formations complémentaires pour affiner ton projet.";
        $cta   = "<a href='formations.php?type=etudesup' class='btn-primary'>Voir les parcours compatibles</a>";
        $image = "./images/etudiant.jpg";
        break;

    case 'cpge':
        $titre = "En prépa ? Oriente ton futur avec confiance 🧠";
        $texte = "Les débouchés après une CPGE sont variés ! Explore les écoles, les formations et les témoignages d’anciens élèves.";
        $cta   = "<a href='formations.php?type=cpge' class='btn-primary'>Voir les débouchés</a>";
        $image = "./images/cpge.jpg";
        break;

    case 'metiers':
        $titre = "Découvre les métiers faits pour toi 💼";
        $texte = "Tu ne sais pas encore vers quoi te diriger ? Explore des fiches métiers illustrées et trouve ce qui te correspond.";
        $cta   = "<a href='metiers.php' class='btn-primary'>Explorer les métiers</a>";
        $image = "./images/metiers.jpg";
        break;

    // pas de default nécessaire : les valeurs par défaut sont déjà définies au-dessus
}
?>

  <!-- Hero -->
  <section class="orientation-hero">
    <div class="hero-content">
      <div class="hero-text">
        <h2><?= htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') ?></h2>
        <p><?= htmlspecialchars($texte, ENT_QUOTES, 'UTF-8') ?></p>
        <?= $cta ?>
      </div>
      <div class="hero-image">
        <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="Illustration orientation">
      </div>
    </div>
  </section>

  <!-- Profils -->
  <section id="profils" class="orientation-profil">
    <h3>Quel est ton profil ?</h3>
    <p class="subtitle">Choisis celui qui te correspond pour accéder à des contenus personnalisés 👇</p>
    <div class="profil-grid">
      <a href="orientation.php?profil=lyceen" class="profil-card lyceen">
        <h4>🎓 Je suis lycéen</h4>
        <p>Je prépare mon orientation après le bac</p>
      </a>
      <a href="orientation.php?profil=etudiant" class="profil-card etudiant">
        <h4>🎯 Je suis étudiant</h4>
        <p>Je veux me réorienter ou compléter ma formation</p>
      </a>
      <a href="orientation.php?profil=cpge" class="profil-card cpge">
        <h4>📘 Je suis en prépa</h4>
        <p>Je veux découvrir mes débouchés après la CPGE</p>
      </a>
      <a href="orientation.php?profil=metiers" class="profil-card metiers">
        <h4>💼 Je découvre des métiers</h4>
        <p>Je cherche une voie qui me passionne</p>
      </a>
    </div>
  </section>

  <!-- Outils -->
  <section class="orientation-suggestions">
    <h3>Nos outils pour t’aider à t’orienter</h3>
    <div class="orientation-grid">
      <div class="orientation-card">
        <img src="./images/test.jpg" alt="">
        <h4>🧭 Test d’orientation</h4>
        <p>Réponds à quelques questions pour découvrir les domaines faits pour toi.</p>
        <a href="test-orientation.php" class="btn-secondary">Faire le test</a>
      </div>
      <div class="orientation-card">
        <img src="./images/metier.jpg" alt="">
        <h4>💼 Fiches métiers</h4>
        <p>Découvre les métiers populaires et les formations qui y mènent.</p>
        <a href="metiers.php" class="btn-secondary">Explorer</a>
      </div>
      <div class="orientation-card">
        <img src="./images/guide.jpg" alt="">
        <h4>📚 Guides étudiants</h4>
        <p>Lis nos articles pour mieux comprendre les parcours et les débouchés.</p>
        <a href="articles.php" class="btn-secondary">Voir les guides</a>
      </div>
    </div>
  </section>



<?php
// Footer du site
require "./include/footer.inc.php";
