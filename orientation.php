<?php
// ------- Métadonnées -------
$title       = "Orientation";
$description = "Découvre les parcours, métiers et outils pour mieux t’orienter vers tes études supérieures.";
$h1          = "Comment apprendre à s'orienter ?";
require "./include/header.inc.php";

?>

  <section class="orientation-hero">
      <div class="orientation-hero-wrapper">

          <div class="orientation-hero-left">
              <h2 class="orientation-hero-title">
                  Trouve ta voie avec Étudaviz 🌟
              </h2>
              <p class="orientation-hero-subtext">
                  Ici, pas besoin d’avoir déjà un projet précis : notre objectif est simple —
                  t’aider à comprendre qui tu es, découvrir des parcours possibles et avancer
                  étape par étape vers un choix d’orientation éclairé.
              </p>
              <div class="orientation-hero-cta">
                  <a href="#profils">Choisir mon profil</a>
                  <a href="test-orientation.php" class="btn-primary">🔥 Faire le test d’orientation</a>
              </div>
              <p class="orientation-hero-note">
                  Tu n’es pas seul : on t’accompagne du début jusqu’au choix final. 🌱
              </p>
          </div>
          <div class="orientation-hero-right">
              <img src="./images/orientation.jpg" alt="Illustration orientation">
          </div>

      </div>
  </section>



<section class="parcours-section">
    <h2 class="parcours-title">Comprendre ton parcours après le bac 🎓</h2>
    <p class="parcours-subtitle">
        En un coup d'œil, visualise comment se déroulent les grandes étapes des études supérieures.
    </p>

    <div class="parcours-timeline">
      <div class="parcours-step" data-step>
          <div class="step-header">
              <div class="step-number">1</div>
              <h3>L’entrée dans les études supérieures</h3>
              <button class="toggle-step">+</button>
          </div>

    <div class="step-content">

        <p class="step-intro">
            L’enseignement supérieur, c’est un nouveau rythme et plus d’autonomie.  
            Voici ce qui change vraiment quand tu quittes le lycée :
        </p>

        <div class="step-highlights">

            <div class="highlight-box">
                <span>📘</span>
                <p><strong>Un nouveau rythme</strong><br>
                CM pour les cours théoriques, TD/TP pour pratiquer.  
                Moins d’encadrement, plus d’organisation personnelle.</p>
            </div>

            <div class="highlight-box">
                <span>🧠</span>
                <p><strong>Des projets concrets</strong><br>
                Travaux en groupe, dossiers réels, oraux, mises en situation…  
                On applique ce qu’on apprend.</p>
            </div>

            <div class="highlight-box">
                <span>💼</span>
                <p><strong>Des stages</strong><br>
                Selon ta filière : stages obligatoires, missions, rencontres pro.  
                Parfait pour découvrir ce qui te plaît (ou pas !).</p>
            </div>

            <div class="highlight-box">
                <span>🎓</span>
                <p><strong>Une vraie vie étudiante</strong><br>
                Associations, soirées, clubs, sport, projets…  
                Tu t’intègres, tu rencontres du monde, tu développes ton réseau.</p>
            </div>

            <div class="highlight-box">
                <span>💸</span>
                <p><strong>Plus d’autonomie</strong><br>
                Logement, budget, repas, organisation.  
                Mais aussi des aides : APL, bourses, jobs étudiants.</p>
            </div>
        </div>
      </div>
    </div>

        <!-- Séparateur Illustré -->
        <div class="parcours-connector">
            <span class="connector-line"></span>
            <span class="connector-line"></span>
        </div>

        <!-- Étape 5 -->
        <div class="parcours-step" data-step>
            <div class="step-header">
                <div class="step-number">3</div>
                <h3>Après ton diplôme : que se passe-t-il ensuite ?</h3>
                <button class="toggle-step">+</button>
            </div>

            <div class="step-content">
                <p>
                    Une fois ton diplôme obtenu, plusieurs chemins s’ouvrent à toi selon tes envies
                    et ton projet professionnel.
                </p>

                <ul class="step-points">
                    <li><strong>Poursuites d’études :</strong> licence → master, BTS → bachelor, BUT → master</li>
                    <li><strong>Insertion pro :</strong> métiers techniques, santé, business, numérique…</li>
                    <li><strong>Évolution :</strong> spécialisation, concours, école d’ingénieur/de commerce…</li>
                </ul>

                <a href="formations.php" class="step-btn">Explorer les formations →</a>
            </div>
        </div>

    </div>
</section>






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

<script>
document.querySelectorAll('[data-step]').forEach(step => {
    const btn = step.querySelector('.toggle-step');
    const content = step.querySelector('.step-content');

    btn.addEventListener('click', () => {
        content.classList.toggle('open');
        btn.textContent = content.classList.contains('open') ? "×" : "+";
    });
});
</script>




<?php require "./include/footer.inc.php"; ?>
