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
              <h2>Trouve ta voie avec Étudaviz 🌟</h2>
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
              <p><strong>Un nouveau rythme</strong><br>CM pour les cours théoriques, TD/TP pour pratiquer.Moins d’encadrement, plus d’organisation personnelle.</p>
            </div>

            <div class="highlight-box">
                <span>🧠</span>
                <p><strong>Des projets concrets</strong><br>
                Travaux en groupe, dossiers réels, oraux, mises en situation…  
                On applique ce qu’on apprend.</p>
            </div>

            <div class="highlight-box-last">
                <span>💼</span>
                <p><strong>Des stages</strong><br>
                Selon ta filière : stages obligatoires, missions, rencontres pro.  
                Parfait pour découvrir ce qui te plaît (ou pas !).</p>
            </div>
          </div>
        </div>
      </div>

      <div class="parcours-connector">
          <span class="connector-line"></span>
          <span class="connector-line"></span>
      </div>

      <div class="parcours-step" data-step>
        <div class="step-header">
          <div class="step-number">2</div>
            <h3>Vie associative & épanouissement étudiant</h3>
            <button class="toggle-step">+</button>
          </div>

          <div class="step-content">
            <p class="step-intro"> La vie étudiante ne se résume pas aux cours. Associations, projets, rencontres… c’est souvent là que tu t’épanouis le plus, que tu découvres tes forces et que tu construis ta personnalité.<p>
              <div class="step-highlights">
                <div class="highlight-box">
                  <span>🤝</span>
                  <p><strong>Participer à une association</strong><br>Sport, culture, solidarité, entrepreneuriat, événementiel… Il existe des dizaines d’assos : tu trouveras forcément celle qui te correspond.</p>
                </div>
                <div class="highlight-box">
                  <span>🎤</span> <p><strong>Découvrir de nouveaux talents</strong><br> Organiser un événement, tenir un stand, gérer un budget, communiquer…   Tu développes des compétences concrètes et très recherchées.</p>
                </div>

                <div class="highlight-box">
                  <span>🌍</span>
                  <p><strong>Créer des liens et élargir ton réseau</strong><br>
                  Tu rencontres des étudiants d’autres filières, des anciens, des professionnels…  
                  Des amitiés, des opportunités, des stages peuvent naître d’une simple implication.</p>
                </div>

                <div class="highlight-box">
                  <span>🔥</span>
                  <p><strong>Éviter la solitude</strong><br>
                  Participer à une asso t’aide énormément pour t’intégrer et éviter la sensation d’isolement  
                  que beaucoup d’étudiants ressentent au début.</p>
                </div>
              </div>
            </div>
        </div>


      <div class="parcours-connector">
          <span class="connector-line"></span>
          <span class="connector-line"></span>
      </div>

      <div class="parcours-step" data-step>
    <div class="step-header">
        <div class="step-number">3</div>
        <h3>Après ton diplôme : que se passe-t-il ensuite ?</h3>
        <button class="toggle-step">+</button>
    </div>

    <div class="step-content">
      <p class="step-intro">
            Ton diplôme ne marque pas la fin du chemin : c’est le début de plusieurs options possibles.
            Tu peux continuer tes études, entrer sur le marché du travail ou même changer de direction.
      </p>
      <div class="step-highlights">
        <div class="highlight-box">
          <span>🎓</span>
          <p><strong>Poursuites d’études</strong><br>
          Master après une licence, bachelor après un BTS, école d’ingénieur ou de commerce,
          spécialisations…  
          Idéal pour approfondir un domaine ou monter en compétences.</p>
        </div>

        <div class="highlight-box">
          <span>🌍</span>
          <p><strong>Partir à l’étranger</strong><br>
          Échanges universitaires, volontariat, stages ou premières expériences hors de France :  
          un vrai plus pour ton CV et ton ouverture culturelle.</p>
        </div>

        <div class="highlight-box-last">
          <span>🧭</span>
          <p><strong>Construire ton projet pro</strong><br>
          C’est normal d’être encore un peu perdu après un diplôme.  
          Ateliers, stages, rencontres, expériences t’aideront à ajuster ton orientation.</p>
        </div>
      </div>   
    </div>
  </div>
</section>

<section class="orientation-roadmap">
    <h2 class="roadmap-title">Les 4 étapes pour trouver ta voie 🧭</h2>
    <p class="roadmap-subtitle">
        Personne ne sait spontanément quoi faire de sa vie.  
        Voici le chemin le plus simple pour avancer sereinement 👇
    </p>

    <div class="roadmap-grid">

        <div class="roadmap-card">
            <div class="roadmap-icon">🧩</div>
            <h3>1. Apprendre à mieux se connaître</h3>
            <p>Comprendre tes forces, tes envies, ce qui t’attire ou te fatigue.  
               C’est la première brique d’une orientation solide.</p>
            <a href="test-orientation.php" class="roadmap-link">Faire le test →</a>
        </div>

        <div class="roadmap-card">
            <div class="roadmap-icon">🔍</div>
            <h3>2. Explorer les domaines & métiers</h3>
            <p>Découvre ce qui existe vraiment : missions, environnements, compétences.</p>
            <a href="metiers.php" class="roadmap-link">Explorer les métiers →</a>
        </div>

        <div class="roadmap-card">
            <div class="roadmap-icon">🎓</div>
            <h3>3. Comprendre les formations</h3>
            <p>BTS ? BUT ? Licence ? Écoles ? On t’aide à comprendre simplement.</p>
            <a href="formations.php" class="roadmap-link">Voir les formations →</a>
        </div>

        <div class="roadmap-card">
            <div class="roadmap-icon">🤝</div>
            <h3>4. Tester, rencontrer, essayer</h3>
            <p>Portes ouvertes, immersions, échanges avec des étudiants.</p>
            <a href="articles.php" class="roadmap-link">Découvrir les événements →</a>
        </div>

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
