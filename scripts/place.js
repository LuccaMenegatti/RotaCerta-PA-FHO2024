function initializePlacesAutocomplete() {
  var origemInput = document.getElementById('origem');
  var destinoInput = document.getElementById('destino');

  var autocompleteOrigem = new google.maps.places.Autocomplete(origemInput);
  var autocompleteDestino = new google.maps.places.Autocomplete(destinoInput);
}

google.maps.event.addDomListener(window, 'load', initializePlacesAutocomplete);
