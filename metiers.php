<?php
$title = "Métiers";
$description = "Découvre les métiers grâce aux données France Travail.";
$h1 = "Découvrir des métiers";

require "./include/header.inc.php";
require "./include/functions.inc.php";   // ⚠️ toutes les fonctions FT sont ici

/* ==================================================
   1️⃣  Récupération du token France Travail
   ================================================== */
$tokenData = getFranceTravailAccessToken();
$token     = $tokenData["access_token"] ?? null;

if (!$token) {
    echo "<p class='metiers-error'>❌ Impossible de récupérer le token France Travail.</p>";
    require "./include/footer.inc.php";
    exit;
}

/* ==================================================
   2️⃣  Lecture des paramètres GET
   ================================================== */
$query      = $_GET["q"]    ?? null;
$selected   = $_GET["job"]  ?? null;
$results    = [];
$details    = null;
$error      = null;

/* ==================================================
   3️⃣  Recherche de métiers
   ================================================== */
if ($query) {
    $api = searchMetierRome($token, $query);

    if (!empty($api["error"])) {
        $error = $api["error"];
    } else {
        // ROME renvoie un tableau "resultats"
        $results = $api["resultats"] ?? [];
    }
}

/* ==================================================
   4️⃣  Récupération des détails d’un métier
   ================================================== */
if ($selected) {
    $detailsAPI = getMetierDetails($token, $selected);
    $details    = $detailsAPI["metier"] ?? null;
}

?>

<section class="metiers-hero">
    <h2>Explore les métiers du monde professionnel 💼</h2>

    <form method="GET" class="metiers-search-bar">
        <input type="text" name="q" placeholder="Ex: développeur, infirmier..." 
               value="<?= htmlspecialchars($query ?? '') ?>">
        <button type="submit">Rechercher</button>
    </form>

    <p class="metiers-hint">💡 Astuce : commence par un mot simple (ex : "web")</p>
</section>

<section class="metiers-results-section">

<?php if ($error): ?>
    <p class="metiers-error">❌ <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if ($query && empty($results)): ?>
    <p class="metiers-error">Aucun métier trouvé pour « <?= htmlspecialchars($query) ?> ».</p>
<?php endif; ?>

<div class="metiers-list">

<?php foreach ($results as $job):
    $libelle = $job["libelle"] ?? "Métier inconnu";
    $code    = $job["code"]    ?? "";
?>
    <article class="metier-card">
        <h3><?= htmlspecialchars($libelle) ?></h3>

        <?php if ($code): ?>
            <p class="metier-code">Code ROME : <strong><?= htmlspecialchars($code) ?></strong></p>
        <?php endif; ?>

        <a href="metiers.php?q=<?= urlencode($query) ?>&job=<?= urlencode($code) ?>" 
           class="metier-more-btn">Voir les détails →</a>
    </article>
<?php endforeach; ?>

</div>
</section>

<!-- =============== FICHE MÉTIER (MODAL) ================= -->
<?php if ($details): ?>
<div class="modal active">
    <div class="modal-content metier-modal-content">
        <a href="metiers.php?q=<?= urlencode($query) ?>" class="close-button">&times;</a>

        <h2><?= htmlspecialchars($details["libelle"] ?? "Métier") ?></h2>
        <p><strong>Code ROME :</strong> <?= htmlspecialchars($selected) ?></p>

        <h3>Description du métier</h3>
        <p><?= nl2br(htmlspecialchars($details["definition"] ?? "Aucune description disponible.")) ?></p>

        <?php if (!empty($details["lienSiteOnisep"])): ?>
            <p><a href="<?= $details["lienSiteOnisep"] ?>" target="_blank">Voir la fiche Onisep ↗</a></p>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php require "./include/footer.inc.php"; ?>
