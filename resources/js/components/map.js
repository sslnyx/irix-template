const myStyle = require("./mapStyle.json");
const mapData = require("./mapData.json");
let markers = [];
let map;

const mapOptions = {
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
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  var siteMarker = new google.maps.Marker({
    position: mapOptions.center,
    map: map
  });

  // To add the marker to the map, call setMap();
  // siteMarker.setMap(map);

  Object.keys(mapData).forEach((key) => {
    Object.values(mapData[key]).forEach((element, i) => {
      addMarkerWithTimeout(element, i * 200);
    });
  });
}

function drop() {
  clearMarkers();

  myData.forEach((element) => {});

  // for (let i = 0; i < neighborhoods.length; i++) {
  //   addMarkerWithTimeout(neighborhoods[i], i * 200);
  // }
}

function addMarkerWithTimeout(position, timeout) {
  window.setTimeout(() => {
    console.log(position);
    markers.push(
      new google.maps.Marker({
        position: position,
        map,
        animation: google.maps.Animation.DROP,
      })
    );
  }, timeout);
}

function clearMarkers() {
  console.log(markers.length);
  for (let i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}

exports.initMap = initMap;
