'use strict';

var map_type = 'custom_style';
var google = google;

var _initialize = function() {

	var featureOpts = [
	{
		'featureType': 'landscape',
		'elementType': 'labels',
		'stylers': [{
			'visibility': 'off'
		}]
	}, {
		'featureType': 'transit',
		'elementType': 'labels',
		'stylers': [{
			'visibility': 'off'
		}]
	}, {
		'featureType': 'poi',
		'elementType': 'labels',
		'stylers': [{
			'visibility': 'off'
		}]
	}, {
		'featureType': 'water',
		'elementType': 'labels',
		'stylers': [{
			'visibility': 'off'
		}]
	}, {
		'featureType': 'road',
		'elementType': 'labels.icon',
		'stylers': [{
			'visibility': 'off'
		}]
	}, {
		'stylers': [{
			'hue': '#00aaff'
		}, {
			'saturation': -100
		}, {
			'gamma': 2.15
		}, {
			'lightness': 12
		}]
	}, {
		'featureType': 'road',
		'elementType': 'labels.text.fill',
		'stylers': [{
			'visibility': 'on'
		}, {
			'lightness': 24
		}]
	}, {
		'featureType': 'road',
		'elementType': 'geometry',
		'stylers': [{
			'lightness': 57
		}]
	}];

	var mapOptions = {
    zoom: 17,
		disableDefaultUI: true,
    center: new google.maps.LatLng(40.7613248,-73.8280611),
		mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, map_type]
    },
    mapTypeId: map_type
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var styledMapOptions = {
    name: 'Custom Style'
  };

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

  map.mapTypes.set(map_type, customMapType);

  var image = 'img/marker-map-contact.png';
  var myLatLng = new google.maps.LatLng(40.7613248,-73.8280611);
  var marker;

			marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
}


///////////////////
//
var //customMarker = null,
    //map,
    newMarker,
    markers = [];
    //scrolls = [];

var _initialize_neighbor = function () {

      // var isDraggable = $(document).width() > 480 ? true : false;
      // var center = $(document).width() > 480 ? new google.maps.LatLng(34.052751, -118.258978) : ;
      var map_canvas = document.getElementById('map-canvas-neighbor');
      var map_options = {
        center: new google.maps.LatLng(40.7613248,-73.8280611),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.BOTTOM_LEFT
        },
        panControl: true,
        panControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        scrollwheel: false,
        draggable: true,
        styles: [
          {
            'featureType': 'landscape',
            'elementType': 'labels',
            'stylers': [{
              'visibility': 'off'
            }]
          }, {
            'featureType': 'transit',
            'elementType': 'labels',
            'stylers': [{
              'visibility': 'off'
            }]
          }, {
            'featureType': 'poi',
            'elementType': 'labels',
            'stylers': [{
              'visibility': 'off'
            }]
          }, {
            'featureType': 'water',
            'elementType': 'labels',
            'stylers': [{
              'visibility': 'off'
            }]
          }, {
            'featureType': 'road',
            'elementType': 'labels.icon',
            'stylers': [{
              'visibility': 'off'
            }]
          }, {
            'stylers': [{
              'hue': '#00aaff'
            }, {
              'saturation': -100
            }, {
              'gamma': 2.15
            }, {
              'lightness': 12
            }]
          }, {
            'featureType': 'road',
            'elementType': 'labels.text.fill',
            'stylers': [{
              'visibility': 'on'
            }, {
              'lightness': 24
            }]
          }, {
            'featureType': 'road',
            'elementType': 'geometry',
            'stylers': [{
              'lightness': 57
            }]
          }
          ]
        };
      var map = new google.maps.Map(map_canvas, map_options);
      //var infoWindow = new google.maps.InfoWindow();

  // Center on resize
  var getCen = map.getCenter();
  google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(getCen);
  });

	var image = new google.maps.MarkerImage(
    'img/icon-marker-neighborhood.png',
		new google.maps.Size(75, 75),
		// The origin for this image is 0,0.
		new google.maps.Point(0,0),
		// The anchor for this image is the base of the flagpole at 0,32.
		new google.maps.Point(53, 53)
  );

  var marker = new google.maps.Marker({
    icon: image,
    position: new google.maps.LatLng(40.7613248,-73.8280611),
    map: map
  });


	var icon = {
		path: 'M11.017,0C4.941,0,0,4.943,0,11.021c0,2.724,1.305,6.118,2.422,8.196c1.76,3.269,8.092,14.43,8.154,14.542l0.443,0.78l0.439-0.782c0.062-0.109,6.154-10.96,8.207-14.542c1.148-2.007,2.369-5.562,2.369-8.194C22.035,4.943,17.091,0,11.017,0z M11.015,15.988c-2.756,0-4.998-2.243-4.998-5.001s2.242-5.002,4.998-5.002s5,2.244,5,5.002C16.013,13.745,13.771,15.988,11.015,15.988z',
		fillColor: '#BA8F4D',
		fillOpacity: 1,
		scale: 1,
		strokeWeight: 0,
		size: new google.maps.Size(22, 35),
		// The origin for this image is 0,0.
		origin: new google.maps.Point(0,0),
		// The anchor for this image is the base of the flagpole at 0,32.
		anchor: new google.maps.Point(11, 35)
	};

	$('.mapData').each(function (i, list) {
	  //var iteration;

	  $(list).find('li a').each(function (c, item) {
	    var $item = $(item);
	    var coords = $item.attr('data-coords').split(',');
	    var iteration = $item.attr('data-iteration');
			var address = $item.attr('data-address').split(',');
	    var latLng = new google.maps.LatLng(coords[0], coords[1]);

	    newMarker = new MarkerWithLabel({
	      position: latLng,
				labelAnchor: new google.maps.Point(0, 0),
	      draggable: false,
	      icon: icon,
	      zIndex: 1,
	      map: map,
	    });
	    newMarker.iteration = iteration;
	    newMarker.setVisible(false);

	    var boxText = '<div class="info-box visible-box"><h1>'+address[0]+'</h1><h2>'+address[1]+'</h2></div>';
	    var myOptions = {
	      content: boxText,
	      boxClass: 'infoBox visible-box',
	      disableAutoPan: false,
	      maxWidth: 0,
	      pixelOffset: new google.maps.Size(-100,-45),
	      zIndex: 0,
	      boxStyle: {
	        border:0,
	      },
	      infoBoxClearance: new google.maps.Size(1, 1),
	      isHidden: false,
	      pane: 'floatPane',
	      enableEventPropagation: false
	    };

	    markers.push(newMarker);
	    var ib = new InfoBox(myOptions);
	    ib.close(map, newMarker);

	    for ( i = 0 ; i < markers.length ; i++ ) {
	        markers[i].setVisible(true);
	    }

			google.maps.event.addListener(newMarker, 'mousedown', function() {
				$('.infoBox').hide();
				ib.open(map, this);
				this.setOptions({zIndex:999});
	    });

			google.maps.event.addListener(newMarker, 'mousedown', function() {
				$('.infoBox').hide();
				ib.open(map, this);
				this.setOptions({zIndex:999});
	    });

	    google.maps.event.addListener(newMarker, 'mouseover', function() {

				$('.infoBox').hide();
	      ib.open(map, this);
	      this.setOptions({zIndex:999});

	    });
			google.maps.event.addListener(newMarker, 'mouseout', function() {
				$('.infoBox').hide();
			});
	  });
	});
}
