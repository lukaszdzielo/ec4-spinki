google.maps.event.addDomListener(window, 'load', init);
function init() {
    var mapOptions = {
        zoom: 17,
        disableDefaultUI: true, // all options
        // zoomControl: false, // zoom control
        // mapTypeControl: false, // map type
        // scaleControl: false, // scale
        // streetViewControl: false, // street view
        // rotateControl: false, // rotate
        // fullscreenControl: false, // full screen control
        // scrollwheel: false, // scroll wheel
        // disableDoubleClickZoom: true, // zoom on double click
        // draggable: false, // drag/move
        center: new google.maps.LatLng(50.8727623,20.6203171), // coordinates centered
        styles: [],
    };
    // find map with ID
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    
    // add marker
    var marker1 = new google.maps.Marker({
        position: map.getCenter(),
        icon: "assets/img/dist/map--marker.png",
        map: map,
    });
}