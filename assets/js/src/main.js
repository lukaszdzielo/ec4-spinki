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
        icon: {
            path: 'M0-20a7,7,0,0,0-7,7C-7-7.7,0,0,0,0S7-7.7,7-13A7,7,0,0,0,0-20Zm0,9.5A2.48,2.48,0,0,1-2.5-13,2.48,2.48,0,0,1,0-15.5,2.48,2.48,0,0,1,2.5-13,2.48,2.48,0,0,1,0-10.5Z',
            scale: 2,
            fillOpacity: 1,
            fillColor: '#f0c8bf',
            strokeWeight: 0,
        },
        map: map,
    });
}