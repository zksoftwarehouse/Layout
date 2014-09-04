var urlRaiz = '/Dropbox/projeto_padrao_php/1.0'
function initialize(id, cor, icon, desc, vlat, vlong, vlatcenter, vlongcenter) {
  var locations = new Array();

  for(var arr=0; arr<vlat.length; arr++) {
    locations[arr] = [
      desc[arr],
      vlat[arr],
      vlong[arr],
      arr,
      icon[arr]
    ];
  }

  var map = new google.maps.Map(document.getElementById(id), {
    zoom: 15,
    scrollwheel: false,
    center: new google.maps.LatLng(vlatcenter, vlongcenter),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      //icon: locations[i][4],
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
    infowindow.setContent(locations[i][0]);
    //infowindow.open(map, marker);
  }

  var styles = [
    {
      stylers: [
        { hue: cor },
        { saturation: 50 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 0 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  map.setOptions({styles: styles});

}
