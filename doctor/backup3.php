<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Map Of Asthma</title>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:80%;
        width:100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;

      }
   }
    </style>
   <a style="text-decoration:none;color:black" class="btn btn-warning btn-md" href="view_map.php" 
          onclick="return confirm('Sure to Move?');"><b><center>
            <font style="font-size:20px;text-decoration:NULL;border-style:solid;">&nbsp;Asthma Frequency : Back To Dashboard&nbsp;</style></font>
          </center></b></a>
          <hr/>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // This example creates circles on the map, representing populations in North
      // America.

      // First, create an object containing LatLng and population for each city.
      var citymap = {
        Ahmedabad: {
          center: {lat: 23.1221, lng: 72.602},
          population: 557794,name:'50'
        },
        Sarangpur: {
          center: {lat: 22, lng: 71.75},
          population: 840583,name:'54'
        },
        MEHSANA: {
          center: {lat: 23, lng: 72},
          population: 385779,name:'54'
        },
      BARODA: {
          center: {lat: 22, lng: 73},
          population: 603502,name:'55'
        },
        BHUJ: {
            center: {lat:23, lng: 70},
            population: 603502,name:'10'
          },
          DWARKA: {
              center: {lat:22.2442, lng: 68.9685},
              population: 603502,name:'40'
            }

      };
                        
      function initMap() {
        // Create the map.
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 22.2587, lng: 71.1924},
          mapTypeId: 'terrain'
        });
        for (var city in citymap) {
                  var marker = new google.maps.Marker({
                    map: map,
                       draggable: true,
                    center: citymap[city].center,
                    //label :citymap[city].name,
                    animation: google.maps.Animation.DROP,
                    radius: Math.sqrt(citymap[city].population) * 100,
                    position: citymap[city].center,
                    //icon: {
      //url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
  //  }           
          label: {
          color: 'magneta', // <= HERE
          fontSize: '15px',
          fontWeight: '850',
          text: citymap[city].name
        }

            });

        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC96m1QCMXwfjaBie9X-iJB8zBnfqffahg&callback=initMap">
    </script>
  </body>
</html>
