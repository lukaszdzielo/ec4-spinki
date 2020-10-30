// Map - Global footer
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
    var mapElement = document.getElementById('footer__map');
    var map = new google.maps.Map(mapElement, mapOptions);
    
    // add marker
    var marker1 = new google.maps.Marker({
        position: map.getCenter(),
        icon: {
            url: "assets/img/dist/map--marker.png",
            size: new google.maps.Size(50, 50),
            anchor: new google.maps.Point(25, 25)
        },
        map: map,
    });
}
// Map end

// AOS - animation on scroll
AOS.init({
    offset: 200, // offset (in px) from the original trigger point
    duration: 600, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
});
// AOS end