// ./js/distance.js
async function calculateDistance() {
  const city = document.getElementById("userAddress").value.trim();
  const resultContainer = document.getElementById("distanceResult");

  if (!city) {
    resultContainer.textContent = "Veuillez entrer une ville ou une adresse.";
    return;
  }

  const destLat = window.mapLat;
  const destLon = window.mapLon;
  const apiKey = "2bb409fc044b442194d547bfa30e7862";
  resultContainer.textContent = "Calcul en cours...";

  try {
    // --- 1️⃣ Géocoder la ville/adresse saisie ---
    const geoUrl = `https://api.geoapify.com/v1/geocode/search?text=${encodeURIComponent(city + ', France')}&lang=fr&apiKey=${apiKey}`;
    const geoRes = await fetch(geoUrl);
    const geoData = await geoRes.json();

    if (!geoData.features || geoData.features.length === 0) {
      resultContainer.textContent = "Ville introuvable.";
      return;
    }

    const userLat = geoData.features[0].geometry.coordinates[1];
    const userLon = geoData.features[0].geometry.coordinates[0];

    // --- 2️⃣ Calculer la distance et la durée via Routing API ---
    const routeUrl = `https://api.geoapify.com/v1/routing?waypoints=${userLat},${userLon}|${destLat},${destLon}&mode=drive&lang=fr&details=instruction_details&apiKey=${apiKey}`;
    const routeRes = await fetch(routeUrl);
    const routeData = await routeRes.json();

    if (!routeData.features || routeData.features.length === 0) {
      resultContainer.textContent = "Itinéraire introuvable.";
      return;
    }

    const props = routeData.features[0].properties;
    const distanceKm = (props.distance / 1000).toFixed(1);
    const durationMin = Math.round(props.time / 60);

    const hours = Math.floor(durationMin / 60);
    const minutes = durationMin % 60;

    const durationTxt = `${hours > 0 ? hours + "h " : ""}${minutes}min`;

    resultContainer.textContent = `🚗 Distance : ${distanceKm} km – Durée estimée : ${durationTxt}`;
  } catch (err) {
    console.error(err);
    resultContainer.textContent = "Erreur lors du calcul.";
  }
}
