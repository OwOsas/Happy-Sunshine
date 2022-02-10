// Initialize and add the map
// Credit: Google
function initMap() {
    // The location of Truck
    const truck = { lat: 39.957644, lng: -75.189332 };
    // The map, centered at truck
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 17,
      center: truck,
    });
    // The marker, positioned at truck
    const marker = new google.maps.Marker({
      position: truck,
      map: map,
    });
  }