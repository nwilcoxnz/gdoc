<div class="panel panel-default">
    <div class="text-center header">Address</div>
    <div class="panel-body text-center">
        <p>52 Chartwell Ave 
        </br>
        Glenfield
        </br>
        North Shore City
        </br>
        Auckland</p>
        <hr />
        <div id="map" class="map">
        </div>
    </div>
</div>

<script>
  function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: -36.78267, lng: 174.73014},
        zoom: 16
    });
    var myLocation = new google.maps.LatLng(-36.78267, 174.73014);
    var marker = new google.maps.Marker({
        position: myLocation,
        title: "Property Location"
    });
     marker.setMap(map);
 }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX24HwI0nLprrHKIF2x-s6aqoIrcmLtZI&callback=initMap">
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>