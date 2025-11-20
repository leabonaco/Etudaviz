<?php
// ------- Métadonnées -------
$title       = "Orientation";
$description = "Découvre les parcours, métiers et outils pour mieux t’orienter vers tes études supérieures.";
$h1          = "Comment apprendre à s'orienter ?";
require "./include/header.inc.php";

$profil = $_GET['profil'] ?? null;

// ------- Personnalisation dynamique -------
$profilsData = [
    "lyceen" => [
        "titre" => "Lycéen ? Prépare ton avenir dès aujourd’hui 🎓",
        "texte" => "Tu veux anticiper ton orientation après le bac ? Explore les formations, les parcours possibles et découvre les témoignages d’étudiants qui ont trouvé leur voie.",
        "cta"   => "<a href='formations.php?type=bac' class='btn-primary'>Explorer les formations post-bac</a>",
        "image" => "./images/lyceen.jpg"
    ],
    "etudiant" => [
        "titre" => "Déjà étudiant ? Trace ton propre chemin 🚀",
        "texte" => "Réorientation, passerelles, formations complémentaires : découvre les options qui te ressemblent pour construire un projet solide.",
        "cta"   => "<a href='formations.php?type=etudesup' class='btn-primary'>Voir les parcours compatibles</a>",
        "image" => "./images/etudiant.jpg"
    ],
    "cpge" => [
        "titre" => "En prépa ? Oriente ton futur avec confiance 🧠",
        "texte" => "Les débouchés après une CPGE sont variés ! Explore les écoles, les formations et les retours d’anciens étudiants.",
        "cta"   => "<a href='formations.php?type=cpge' class='btn-primary'>Voir les débouchés</a>",
        "image" => "./images/cpge.jpg"
    ],
    "metiers" => [
        "titre" => "Découvre les métiers faits pour toi 💼",
        "texte" => "Tu ne sais pas encore vers quoi te diriger ? Explore des centaines de fiches métiers illustrées pour trouver ta voie.",
        "cta"   => "<a href='metiers.php' class='btn-primary'>Explorer les métiers</a>",
        "image" => "./images/metiers.jpg"
    ]
];

// Valeurs par défaut
$hero = $profilsData[$profil] ?? [
    "titre" => "Trouve ta voie avec Étudaviz 🌟",
    "texte" => "Dis-nous qui tu es pour accéder à des ressources personnalisées : formations, parcours, métiers et témoignages d’étudiants.",
    "cta"   => "<a href='#profils' class='btn-primary'>Choisir mon profil</a>",
    "image" => "./images/orientation.jpg"
];
?>

<!-- ============================= -->
<!-- HERO ORIENTATION -->
<!-- ============================= -->
<section class="orientation-hero">
  <div class="orientation-hero-container">
    <div class="orientation-hero-text">
      <h2><?= $hero["titre"] ?></h2>
      <p><?= $hero["texte"] ?></p>
      <?= $hero["cta"] ?>
    </div>
    <div class="orientation-hero-image">
      <img src="<?= $hero["image"] ?>" alt="">
    </div>
  </div>
</section>

<!-- ============================= -->
<!-- PHASE 1 — COMPRENDRE L'ORIENTATION -->
<!-- ============================= -->
<section class="orientation-timeline">
  <h2>Comment avancer dans ton orientation ? 🌱</h2>

  <div class="timeline">

      <!-- Étape 1 : Se découvrir -->
      <div class="timeline-item">
        <div class="timeline-content">
          <h3>1. Apprendre à mieux se connaître</h3>
          <p>Pour avancer sereinement, il faut comprendre ses motivations, ses centres d’intérêts, son rythme de travail
             et ce qui donne du sens à ses actions. Étudaviz te guide pas à pas.</p>
          <a href="test-orientation.php" class="btn-link">Faire le test →</a>
        </div>
        <div class="timeline-image">
          <img src="./images/timeline1.jpg" alt="">
        </div>
      </div>

      <!-- Étape 2 : Explorer les voies -->
      <div class="timeline-item">
        <div class="timeline-image">
          <img src="./images/timeline2.jpg" alt="">
        </div>
        <div class="timeline-content">
          <h3>2. Explorer les formations et parcours</h3>
          <p>Licences, BUT, BTS, CPGE, écoles spécialisées… Chaque voie a ses particularités. Nous t’expliquons les
             programmes, débouchés et niveaux d’accès.</p>
          <a href="formations.php" class="btn-link">Explorer les formations →</a>
        </div>
      </div>

      <!-- Étape 3 : Découvrir les métiers -->
      <div class="timeline-item">
        <div class="timeline-content">
          <h3>3. Découvrir des métiers réels</h3>
          <p>Plonge dans des fiches métiers illustrées, basées sur des retours d’étudiants et de professionnels.
             Comprends le quotidien, les compétences et les salaires.</p>
          <a href="metiers.php" class="btn-link">Découvrir →</a>
        </div>
        <div class="timeline-image">
          <img src="./images/timeline3.jpg" alt="">
        </div>
      </div>
  </div>
</section>

<!-- ============================= -->
<!-- PHASE 2 — CHOISIR TON PROFIL -->
<!-- ============================= -->
<section id="profils" class="orientation-profil-section">
  <h2>Quel est ton profil ? 🔍</h2>
  <p class="subtitle">Accède à des contenus personnalisés en un clic.</p>

  <div class="profil-grid">
    <a href="orientation.php?profil=lyceen" class="profil-card">🎓 Je suis lycéen</a>
    <a href="orientation.php?profil=etudiant" class="profil-card">🎯 Je suis étudiant</a>
    <a href="orientation.php?profil=cpge" class="profil-card">📘 Je suis en prépa</a>
    <a href="orientation.php?profil=metiers" class="profil-card">💼 Je découvre des métiers</a>
  </div>
</section>

<!-- ============================= -->
<!-- PHASE 3 — OUTILS -->
<!-- ============================= -->
<section class="orientation-tools">
  <h2>Nos outils pour t’aider à t’orienter 🧭</h2>

  <div class="tool-grid">
    <div class="tool-card">
      <img src="./images/test.jpg" alt="">
      <h4>🧭 Test d’orientation</h4>
      <p>Découvre les domaines et environnements qui te correspondent.</p>
      <a href="test-orientation.php" class="btn-secondary">Faire le test</a>
    </div>

    <div class="tool-card">
      <img src="./images/metier.jpg" alt="">
      <h4>💼 Fiches métiers</h4>
      <p>Explore les métiers les plus recherchés et les formations associées.</p>
      <a href="metiers.php" class="btn-secondary">Explorer</a>
    </div>

    <div class="tool-card">
      <img src="./images/guide.jpg" alt="">
      <h4>📚 Guides étudiants</h4>
      <p>Comprendre les parcours, les modalités d’accès, et les débouchés.</p>
      <a href="articles.php" class="btn-secondary">Voir les guides</a>
    </div>
  </div>
</section>

<?php require "./include/footer.inc.php"; ?>
