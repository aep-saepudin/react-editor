var mapstyle =
    [
        {
            featureType: "road",
            elementType: "all",
            stylers: [
                { hue: "#00ddff" },
                { saturation: -100 },
                { invert_lightness: false },
                { lightness: -35 }
            ]
        },{
            featureType: "landscape",
            elementType: "all",
            stylers: [
                { hue: "#bababa" },
                { saturation: -99 },
                { lightness: -25 },
                { visibility: "off" }
            ]
        },{
            featureType: "poi",
            elementType: "all",
            stylers: [
                { invert_lightness: true },
                { hue: "#004cff" },
                { saturation: -100 },
                { lightness: 52 }
            ]
        },{
            featureType: "landscape.man_made",
            elementType: "geometry",
            stylers: [
              { visibility: "off" }
            ]
        }
    ]

function initialize() {


    // set the map center and your position
    var mapCenter = new google.maps.LatLng(-6.907197, 107.619041);
    var myPosition = new google.maps.LatLng(-6.907197, 107.619041);

    // set the content displayed when map marker clicked
    var infoContent = '<div><h4>Web Builder</h4><p>Company.</p></div>';

    // map marker image
    var myImage = new google.maps.MarkerImage('images/map-icon.png');


    var mapOptions = {
        zoom: 16, // map zoom level
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: mapCenter,
        scrollwheel: false, // toggle between true or false for scrollwheel
    }

    map = new google.maps.Map(document.getElementById("gmap"), mapOptions);

    var mapType = new google.maps.StyledMapType(mapstyle, { name:"Grayscale" });
        map.mapTypes.set('tehgrayz', mapType);
        map.setMapTypeId('tehgrayz');


    var companyMarker = new google.maps.Marker({
            position: myPosition,
            map: map,
            icon: myImage,
            title:"Web Builder",
            zIndex: 3
        });

    var infowindow = new google.maps.InfoWindow({
      content: infoContent
    });

    companyMarker.addListener('click', function() {
        infowindow.open(map, companyMarker);
    });

}

initialize();
