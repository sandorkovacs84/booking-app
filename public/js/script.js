
jQuery(document).ready(function(){
 
    var addressInput = jQuery('.js-address').val();
    getLatLong(addressInput);
 });


 function getLatLong(addressInput) {
    var address = encodeURI(addressInput);

    jQuery.get('https://maps.googleapis.com/maps/api/geocode/json?address=' + address + '&key=AIzaSyAAqS4XI4PoagpWQsrQOvF76VCn_3K-Bf0', function(response){
        
        var location = response.results[0].geometry.location;
       
         var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: location
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
    })

 }