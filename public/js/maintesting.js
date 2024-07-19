document.addEventListener('DOMContentLoaded', function() {
    // Image aspect ratio is width:height = 16:9
    var map = L.map('map', {
        crs: L.CRS.Simple,
        minZoom: -3
    });

    // Set the bounds according to the aspect ratio of the image
    var width = 2000;  // Change this to the actual width of your image
    var height = 1329; // Change this to the actual height of your image
    var aspectRatio = width / height;

    // Define the bounds based on the aspect ratio
    var bounds = [[0, 0], [height, width]];

    var image = L.imageOverlay('/myself/testing.png', bounds).addTo(map);

    map.fitBounds(bounds);
});
