<?php

require "./include/functions.inc.php";

// Récupération du token
$tokenData = getFranceTravailAccessToken();

if (!isset($tokenData["access_token"])) {
    die("Erreur TOKEN: " . print_r($tokenData, true));
}

$token = $tokenData["access_token"]; // 🔥 ICI la vraie token string

$url = "https://api.francetravail.io/partenaire/rome-metiers/v1/metiers/metier/requete?" . http_build_query([
    "q" => "professeur",
    "op" => "OR",
    "champs" => "code,libelle"
]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $token",
    "Accept: application/json"
]);

$response = curl_exec($ch);
$info = curl_getinfo($ch);
$error = curl_error($ch);
curl_close($ch);

echo "<pre>";
echo "RESPONSE:\n";
var_dump($response);
echo "\nINFO:\n";
var_dump($info);
echo "\nERROR:\n";
var_dump($error);
echo "</pre>";
