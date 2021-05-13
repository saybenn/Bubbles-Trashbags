function initMap() {
  const location = { lat: 36.8529, lng: -76.015778 };

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: location,
  });

  const marker = new google.maps.Marker({
    position: location,
    map: map,
  });
}
