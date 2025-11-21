<?php
    require "./include/functions.inc.php";
    $satisfaction = getTauxSatisfaction();
    $avis= getNombreAvis();
    $partenaires = getNombrePartenaires();
    if ($satisfaction==NULL) {
                $satisfaction= 98;
    }
    if ($avis==NULL) {
       $avis= 1000;
    }
    if ($partenaires==NULL) {
        $partenaires = 1000;
    }
    $title = "Accueil";
    $description = "Etudaviz - Trouve ta voie : découvre les formations, les témoignages étudiants et les guides d’orientation pour construire ton avenir.";
    $h1 = "Bienvenue sur Etudaviz";
    require "./include/header.inc.php";
?>

    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-text">
                <h2>Ton futur mérite mieux que le hasard</h2>
                <p>
                    Etudaviz t’accompagne dans la construction de ton avenir.
                    Découvre les formations qui te correspondent, explore les parcours possibles après le bac et 
                    inspire-toi des témoignages d’étudiants qui ont trouvé leur voie.
                    Que tu sois lycéen, étudiant ou en prépa, fais le bon choix grâce à des informations claires, fiables et à ton rythme.
                </p>
                <div class="hero-buttons">
                    <a href="formations.php" class="btn-primary">Explorer les formations</a>
                    <a href="orientation.php" class="btn-secondary">Trouver ma voie</a>
                </div>
            </div>
            <div class="profil-buttons">
                <h3 class="profil-title">Quel est ton profil&nbsp;?</h3>
                    <div class="profil-grid">
                        <a href="orientation.php?profil=lyceen" class="btn-profil lyceen"> Je suis lycéen</a>
                        <a href="formations.php?profil=etudiant" class="btn-profil etudiant"> Je suis déjà en Etude Sup</a>
                        <a href="formations.php?profil=cpge" class="btn-profil cpge"> Je suis en prépa (CPGE)</a>
                        <a href="metiers.php" class="btn-profil metiers">Je veux découvrir des métiers</a>
                    </div>
            </div>

        </div>
    </section>

    <section class="trust-section">
        <div class="trust-intro">
            <h2>Pourquoi faire confiance à <span>Etudaviz</span> ?</h2>
            <p style="text-align: center">
            Notre mission : t’aider à construire ton avenir avec clarté, sans pression ni jargon.  
            Ici, chaque outil, chaque témoignage, chaque donnée a un seul but : t’accompagner dans ton choix d’orientation en toute confiance.
            </p>
        </div>

        <div class="trust-highlights">
            <div class="highlight">
            <i class="fas fa-graduation-cap"></i>
            <h3>+1500 formations vérifiées</h3>
            <p style="text-align: center">Des cursus actualisés et évalués pour te donner une vision claire du supérieur.</p>
            </div>

            <div class="highlight">
            <i class="fas fa-user-check"></i>
            <h3>Des témoignages authentiques</h3>
            <p style="text-align: center">Des retours réels d’étudiants pour t’aider à te projeter dans la bonne voie.</p>
            </div>

            <div class="highlight">
            <i class="fas fa-lightbulb"></i>
            <h3>Des conseils neutres</h3>
            <p style="text-align: center">Nos recommandations sont 100 % indépendantes : ici, pas de pub déguisée.</p>
            </div>
        </div>

        <div class="trust-quote">
            <blockquote>
            “On ne choisit pas un avenir au hasard. On le construit, pas à pas.”
            </blockquote>
            <cite>— L’équipe Etudaviz</cite>
        </div>

        <div class="trust-footer">
            <a href="apropos.php" class="btn-primary">Découvrir notre démarche</a>
            <a href="contact.php" class="btn-secondary">Nous poser une question</a>
        </div>
        <div class="trust-extra">
            <h4>Notre impact en chiffres</h4>
            <div class="stats">
                <div class="stat-item"><?= $satisfaction ?> % d’utilisateurs satisfaits</div>
                <div class="stat-item">+<?= $avis ?> avis étudiants</div>
                <div class="stat-item"><?= $partenaires ?> partenaires institutionnels</div>
            </div>
        </div>
    </section>


    <section class="map-section">
        <h2 class="map-title">Explorer les formations sur la carte 🗺️</h2>
            <p class="map-intro">
                Visualise prochainement les grandes formations disponibles autour de chez toi.
                La carte sera bientôt interactive avec les localisations des établissements.
            </p>
            <div id="map"></div>
    </section>


    <section class="services">
        <h2 class="services-title">Explore les rubriques clés 🧭</h2>
        <div class="service-block">
                <div class="service-text">
                <h3>Formations</h3>
                    <p>Découvre les parcours post-bac : BUT, BTS, licences, écoles spécialisées, alternance…</p>
                    <a href="formations.php" class="btn-link">Voir les formations →</a>
                </div>
                <div class="service-image">
                    <img src="./images/formations.jpg" alt="Salle de cours avec étudiants">
                </div>
        </div>

        <div class="service-block">
            <div class="service-image">
                <img src="./images/orientation.jpg" alt="Conseil orientation">
            </div>
            <div class="service-text">
                <h3>Orientation</h3>
                    <p>Mieux te connaître, comprendre les débouchés, poser les bonnes questions à temps.</p>
                    <a href="orientation.php" class="btn-link">En savoir plus →</a>
            </div>
        </div>

        <div class="service-block">
            <div class="service-text">
                <h3>Avis d’étudiants</h3>
                    <p>Lis des témoignages honnêtes d’autres jeunes et partage ton retour d’expérience.</p>
                    <a href="avis.php" class="btn-link">Découvrir les avis →</a>
            </div>
            <div class="service-image">
                <img src="./images/community.jpg" alt="Communauté étudiante">
            </div>
        </div>
    </section>

    <section class="avis">
        <h2>Ce qu’en disent les étudiants 🎓</h2>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <span class="quote-mark">“</span>
                <p class="quote">
                Grâce à Etudaviz, j’ai découvert une école d’ingénieur qui correspondait parfaitement à mon profil !
                </p>
                <p class="author">— Léo, ancien lycéen</p>
            </div>

            <div class="mySlides fade">
                <span class="quote-mark">“</span>
                <p class="quote">
                Les avis des autres étudiants m’ont vraiment aidée à choisir ma licence pro en communication.
                </p>
                <p class="author">— Inès, étudiante à CY</p>
            </div>

            <div class="mySlides fade">
                <span class="quote-mark">“</span>
                <p class="quote">
                J’ai pu comparer les parcours et trouver une formation en alternance près de chez moi.
                </p>
                <p class="author">— Thomas, étudiant en BTS</p>
            </div>

            <div class="slider-controls">
            <span class="prev" onclick="plusSlides(-1)">&#10094;</span>
            <span class="next" onclick="plusSlides(1)">&#10095;</span>
            </div>
        </div>
    </section>


<script type="module" src="/js/slides.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="./js/map.js"></script>
<script>
  const etablissementsAleatoires = <?= json_encode($etablissementsAleatoires, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>;
</script>
<script src="./js/counter.js"></script>

<?php
  require "./include/footer.inc.php";
?>
