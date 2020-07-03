const myStyle = require("./mapStyle.json");
var mapOptions = {
  // How zoomed in you want the map to start at (always required)
  zoom: 14,
  disableDefaultUI: true,

  // The latitude and longitude to center the map (always required)
  center: {
    lat: 49.214221000000016,
    lng: -123.13931100000002,
  }, // Nova Geo site

  // How you would like to style the map.
  // This is where you would paste any style found on Snazzy Maps.
  styles: myStyle,
};

function initMap() {
  exports.map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

console.log(data);

window.addEventListener("load", initMap);
