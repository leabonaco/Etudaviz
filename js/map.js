// ./js/map.js
document.addEventListener("DOMContentLoaded", () => {
  // 1) Gardes-fous : Leaflet et conteneur
  if (!window.L) return;                          // Leaflet pas chargé -> on sort
  const mapEl = document.getElementById("map");
  if (!mapEl) return;                             // Pas de #map -> on sort

  // 2) Coordonnées (par défaut = centre de la France)
  const lat = Number.isFinite(window.mapLat) ? window.mapLat : 46.603354;
  const lon = Number.isFinite(window.mapLon) ? window.mapLon : 1.888334;
  const zoom = Number.isFinite(window.mapZoom) ? window.mapZoom : 6;

  // 3) Initialiser la carte
  const map = L.map("map").setView([lat, lon], zoom);

  // 4) Fond de carte
  L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
  }).addTo(map);

  // 5) Marqueur si coordonnées spécifiques passées depuis PHP
  const hasPoint = Number.isFinite(window.mapLat) && Number.isFinite(window.mapLon);
  if (hasPoint) {
    const label = window.mapMarkerLabel || "Établissement";
    L.marker([window.mapLat, window.mapLon]).addTo(map).bindPopup(label).openPopup();
  }
});
