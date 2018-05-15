<div id="map" style="height: 500px;"></div>
<div class="legend_table_container" style="position: absolute; bottom: 0; left: 0; background-color: #003652; padding: 10px;">
  <table class="legend_table" style="margin-bottom: 0;width: 150px; color: white;">
    <tr>
      <td>A</td>
      <td>Main Branch</td>
    </tr>
    <tr>
      <td>B</td>
      <td>Belmont</td>
    </tr>
    <tr>
      <td>C</td>
      <td>Broad Rock</td>
    </tr>
    <tr>
      <td>D</td>
      <td>East End</td>
    </tr>
    <tr>
      <td>E</td>
      <td>Ginter Park</td>
    </tr>
    <tr>
      <td>F</td>
      <td>Hull Street</td>
    </tr>
    <tr>
      <td>G</td>
      <td>North Avenue</td>
    </tr>
    <tr>
      <td>H</td>
      <td>West End</td>
    </tr>
    <tr>
      <td>I</td>
      <td>Westover Hills</td>
    </tr>
  </table>
</div>
<script>
  var markers = [];
  var map;

  function initMap() {
    var mainbranch = [{lat: 37.5428458, lng: -77.442493}, 'Main Branch', 'A'];
    var belmont = [{lat: 37.5543459, lng: -77.4818177}, 'Belmont', 'B'];
    var broadrock = [{lat: 37.4828499, lng: -77.4813976}, 'Broad Rock', 'C'];
    var eastend = [{lat: 37.5396983, lng: -77.413489}, 'East End', 'D'];
    var ginterpark = [{lat: 37.5970737, lng: -77.4563122}, 'Ginter Park', 'E'];
    var hullstreet = [{lat: 37.5196079, lng: -77.4479009}, 'Hull Street', 'F'];
    var northavenue = [{lat: 37.570172, lng: -77.4346805}, 'North Avenue', 'G'];
    var westend = [{lat: 37.5776385, lng: -77.5133911}, 'West End', 'H'];
    var westoverhills = [{lat: 37.5219987, lng: -77.4907205}, 'Westover Hills', 'I'];

    var branches = [mainbranch, belmont, broadrock, eastend, ginterpark, hullstreet, northavenue, westend, westoverhills]

    var mapOptions = {
      center: mainbranch[0],
      zoom: 11
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    function drop() {
      for (var i = 0; i < branches.length; i++) {
        addMarkerWithTimeout(branches[i][0], i * 200, branches[i][1], branches[i][2]);
      }
    }
    drop();

    function addMarkerWithTimeout(position, timeout, title, label) {
      window.setTimeout(function() {
        markers.push(new google.maps.Marker({
          position: position,
          map: map,
          title: title,
          label: label,
          animation: google.maps.Animation.DROP
        }));
      }, timeout);
    }

    function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    }

  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxalrJGVsevc8qZEPSs1nLIDsu0a9wvrg&callback=initMap"
async defer></script>
