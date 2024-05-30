<?php include('template/header.php');?>

<div class="container text-white mt-4">
    <div class="row w-100 m-0 align-items-center">
        <div class="col-12">
            <div id="map"></div>
        </div>
    </div>
    <div class="row w-100 m-0 align-items-center mt-4">
        <div class="col-md-12 col-lg-12">
            <div class="bg-dark p-3 h-100 d-flex flex-column justify-content-between">
                <div>
                    <p>
                        <strong>Meio de Transporte:</strong>
                        <?php if ($transit_mode == 'bus'): ?>
                            Ônibus
                        <?php else: ?>
                            Metrô
                        <?php endif; ?>
                    </p>
                    <p><strong>Duração da viagem:</strong> <?= $duration ?></p>
                    <p><strong>Distância:</strong> <?= $distance ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php for ($i = 0; $i < count($departureStops); $i++) { ?>
        <div class="row w-100 m-0 align-items-center">
            <div class="col-md-12 col-lg-12">
                <div class="bg-dark p-3 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <hr>
                        <p><strong>Parada de Partida:</strong> <?= $departureStops[$i] ?></p>
                        <p><strong>Parada de Chegada:</strong> <?= $arrivalStops[$i] ?></p>
                        <p><strong>Horário de Partida:</strong> <?= $departureTimes[$i] ?></p>
                        <p><strong>Horário de Chegada:</strong> <?= $arrivalTimes[$i] ?></p>
                        <p><strong>Linha:</strong> <?= $lines[$i] ?></p>
                        <p><strong>Número de Paradas:</strong> <?= $numStops[$i] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script>
function initMap() {
    var directions = <?= !empty($directions) ? json_encode($directions) : 'null'; ?>;
    var transitMode = <?= !empty($transit_mode) ? json_encode($transit_mode) : 'null'; ?>;
    
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13
    });

    if (directions && transitMode) {
        map.setCenter(directions.routes[0].legs[0].start_location);

        var directionsRenderer = new google.maps.DirectionsRenderer({
            map: map,
            directions: directions
        });

        var directionsService = new google.maps.DirectionsService();
        directionsService.route({
            origin: directions.routes[0].legs[0].start_location,
            destination: directions.routes[0].legs[0].end_location,
            travelMode: google.maps.TravelMode.TRANSIT,
            transitOptions: {
                modes: [
                    <?php if ($transit_mode == 'bus'): ?>
                        google.maps.TransitMode.BUS
                    <?php elseif ($transit_mode == 'subway'): ?>
                        google.maps.TransitMode.SUBWAY
                    <?php else: ?>
                        google.maps.TransitMode.BUS,
                        google.maps.TransitMode.SUBWAY
                    <?php endif; ?>
                ]
            }
        }, function(response, status) {
            if (status === 'OK') {
                directionsRenderer.setDirections(response);
            } else {
                console.error('Directions request failed due to', status);
            }
        });
    } else {
        console.error('Directions or Transit Mode is not available.');
    }
}
</script>

<script src="<?= $googleMapsInitScriptUrl ?>" async defer></script>

<?php include('template/footer.php');?>
