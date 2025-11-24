<?php
    $title = "Test d’orientation";
    $description = "Réponds à 6 questions rapides pour découvrir les domaines qui te correspondent.";
    $h1 = "Test d’orientation rapide";
    require "./include/header.inc.php";

        $isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');

    // Variables par défaut
    $dominants = [];
    $scores = null;
    $profilFinal = null;
    $cat = null;

    if ($isSubmitted) {

        // Récupération des réponses
        $reponses = [
            $_POST['q1'] ?? null,
            $_POST['q2'] ?? null,
            $_POST['q3'] ?? null,
            $_POST['q4'] ?? null,
            $_POST['q5'] ?? null,
            $_POST['q6'] ?? null
        ];

        // Initialisation des scores RIASEC
        $scores = [ "R"=>0, "I"=>0, "A"=>0, "S"=>0, "E"=>0, "C"=>0 ];

        foreach ($reponses as $r) {
            if ($r !== null && isset($scores[$r])) {
                $scores[$r]++;
            }
        }

        // Détection du code dominant
        $max = max($scores);
        $dominants = array_keys($scores, $max);

        // Stockage du profil final
        $profilFinal = $dominants[0];
    }

        $domaines = [
        "R" => [
            "titre" => "Technique & Environnements Concrets",
            "texte" => "Tu es quelqu’un de pratique, d’efficace et de concret. Tu comprends vite comment fonctionnent les choses et tu aimes quand il y a du réel, du tangible.",
            "pistes" => "mécanique, électricité, industrie, maintenance, sport, environnement",
            "cta" => "formations.php?domaine=technique"
        ],
        "I" => [
            "titre" => "Sciences, Analyse & Logique",
            "texte" => "Tu aimes comprendre, creuser, analyser. Tu observes avec curiosité et tu cherches ce qu'il y a derrière les phénomènes.",
            "pistes" => "informatique, ingénierie, physique, mathématiques, santé, recherche",
            "cta" => "formations.php?domaine=sciences"
        ],
        "A" => [
            "titre" => "Création, Expression & Innovation",
            "texte" => "Tu as une sensibilité unique et un vrai besoin de t’exprimer. Tu imagines, tu inventes, tu transformes.",
            "pistes" => "design, communication, audiovisuel, web, arts appliqués",
            "cta" => "formations.php?domaine=creatif"
        ],
        "S" => [
            "titre" => "Social & Accompagnement",
            "texte" => "Tu comprends naturellement les gens. Tu sais écouter, rassurer, expliquer, accompagner.",
            "pistes" => "psychologie, social, éducation, santé, médiation",
            "cta" => "formations.php?domaine=social"
        ],
        "E" => [
            "titre" => "Business, Management & Communication",
            "texte" => "Tu as de l’énergie, tu aimes agir, convaincre, entreprendre. Tu apprécies mener des projets.",
            "pistes" => "commerce, management, marketing, entrepreneuriat",
            "cta" => "formations.php?domaine=business"
        ],
        "C" => [
            "titre" => "Gestion, Organisation & Administration",
            "texte" => "Tu es structuré, fiable, organisé. Tu aimes quand les choses sont claires, rangées, bien faites.",
            "pistes" => "administration, comptabilité, gestion, logistique",
            "cta" => "formations.php?domaine=gestion"
        ]
    ];

    $cat = $profilFinal ? ($domaines[$profilFinal] ?? null) : null;
?>

    <section class="test-hero">
        <h2>Découvre en 2 minutes les domaines faits pour toi 🎯</h2>
        <p>Réponds simplement aux 6 questions ci-dessous. À la fin, tu sauras quels types d’études et métiers te correspondent le mieux.</p>
    

    <?php if (!$isSubmitted): ?>
        <section class="test-container">
            <form  method="POST" class="test-form">

                <!-- Question 1 -->
                <div class="question-block">
                    <h3>1. Parmi ces activités, laquelle te ressemble le plus ?</h3>
                    <label><input type="radio" name="q1" value="R" required> Réparer, bricoler, manipuler</label>
                    <label><input type="radio" name="q1" value="I"> Comprendre comment ça marche</label>
                    <label><input type="radio" name="q1" value="A"> Créer (dessiner, imaginer…)</label>
                    <label><input type="radio" name="q1" value="S"> Aider, expliquer</label>
                    <label><input type="radio" name="q1" value="E"> Convaincre, vendre, négocier</label>
                    <label><input type="radio" name="q1" value="C"> Organiser, gérer</label>
                </div>

                <!-- Question 2 -->
                <div class="question-block">
                    <h3>2. Quand tu apprends quelque chose…</h3>
                    <label><input type="radio" name="q2" value="R" required> Je préfère pratiquer</label>
                    <label><input type="radio" name="q2" value="I"> Je veux comprendre en profondeur</label>
                    <label><input type="radio" name="q2" value="A"> Je visualise / imagine</label>
                    <label><input type="radio" name="q2" value="S"> J’apprends grâce aux autres</label>
                    <label><input type="radio" name="q2" value="E"> J’ai besoin d’en parler</label>
                    <label><input type="radio" name="q2" value="C"> Je suis à l’aise avec les méthodes claires</label>
                </div>

                <!-- Question 3 -->
                <div class="question-block">
                    <h3>3. Où te sens-tu le plus à l’aise ?</h3>
                    <label><input type="radio" name="q3" value="R" required> Atelier / extérieur</label>
                    <label><input type="radio" name="q3" value="I"> Lieux calmes (laboratoire, bibliothèque)</label>
                    <label><input type="radio" name="q3" value="A"> Espace créatif</label>
                    <label><input type="radio" name="q3" value="S"> En interaction avec les autres</label>
                    <label><input type="radio"name="q3"value="E"> Environnement dynamique / business</label>
                    <label><input type="radio" name="q3" value="C"> Bureau structuré</label>
                </div>

                <!-- Question 4 -->
                <div class="question-block">
                    <h3>4. Pour toi, un bon métier est…</h3>
                    <label><input type="radio" name="q4" value="R" required> Concret et utile</label>
                    <label><input type="radio" name="q4" value="I"> Intellectuel et stimulant</label>
                    <label><input type="radio" name="q4" value="A"> Créatif et original</label>
                    <label><input type="radio" name="q4" value="S"> Humain et bienveillant</label>
                    <label><input type="radio" name="q4" value="E"> Ambitieux et motivant</label>
                    <label><input type="radio" name="q4" value="C"> Stable et organisé</label>
                </div>

                <!-- Question 5 -->
                <div class="question-block">
                    <h3>5. On te décrit souvent comme…</h3>
                    <label><input type="radio" name="q5" value="R" required> Débrouillard / manuel</label>
                    <label><input type="radio" name="q5" value="I"> Curieux / logique</label>
                    <label><input type="radio" name="q5" value="A"> Créatif / sensible</label>
                    <label><input type="radio" name="q5" value="S"> Empathique / sociable</label>
                    <label><input type="radio" name="q5" value="E"> Dynamique / convaincant</label>
                    <label><input type="radio" name="q5" value="C"> Sérieux / méthodique</label>
                </div>

                <!-- Question 6 -->
                <div class="question-block">
                    <h3>6. Tu préférerais passer ta journée à…</h3>
                    <label><input type="radio" name="q6" value="R" required> Installer, réparer</label>
                    <label><input type="radio" name="q6" value="I"> Résoudre un problème</label>
                    <label><input type="radio" name="q6" value="A"> Imaginer / créer</label>
                    <label><input type="radio" name="q6" value="S"> Aider quelqu’un</label>
                    <label><input type="radio" name="q6" value="E"> Gérer un projet / diriger</label>
                    <label><input type="radio" name="q6" value="C"> Organiser, classer</label>
                </div>

                <button type="submit" class="btn-primary test-btn">Voir mes résultats</button>
            </form>

           <?php else: ?>
                <section id="orientation-test-resultats" class="orientation-test-results">
                    <div class="orientation-results-card">

                        <div class="orientation-result-box">

                            <h2 class="orientation-result-title">🎉 Tes résultats</h2>
                            <h3 class="orientation-result-domain"><?= $cat["titre"] ?></h3>

                            <p class="orientation-result-text"><?= $cat["texte"] ?> As-tu déjà pensé à des domaines comme : <strong><?= $cat["pistes"] ?></strong> ? </p>
                            <a href="<?= $cat["cta"] ?>" class="orientation-btn-results">Explorer ces formations</a>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
    </section>











    

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    <script>
        function launchConfetti() {
            const duration = 2500;
            const end = Date.now() + duration;

            (function frame() {
                confetti({
                    particleCount: 3,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 }
                });
                confetti({
                    particleCount: 3,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 }
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            })();
        }
        document.addEventListener("DOMContentLoaded", () => {
            const results = document.querySelector("#orientation-test-resultats");
            if (results) {
                setTimeout(launchConfetti, 300);
            }
        });
    </script>

<?php require "./include/footer.inc.php"; ?>
