(function($) {

    function initMap( $el ) {
      var $markers = $el.find('.marker');
  
      var map = new google.maps.Map( $el[0], {
        zoom: $el.data('zoom') || 16,
        center: { lat: 0, lng: 0 }
      });
  
      map.markers = [];
  
      $markers.each(function(){
        initMarker( $(this), map );
      });
  
      centerMap( map );
    }
  
    function initMarker( $marker, map ) {
      var lat = $marker.data('lat');
      var lng = $marker.data('lng');
  
      var marker = new google.maps.Marker({
        position: { lat: lat, lng: lng },
        map: map
      });
  
      map.markers.push( marker );
    }
  
    function centerMap( map ) {
      var bounds = new google.maps.LatLngBounds();
  
      map.markers.forEach(function( marker ){
        bounds.extend( marker.position );
      });
  
      if ( map.markers.length === 1 ) {
        map.setCenter( bounds.getCenter() );
      } else {
        map.fitBounds( bounds );
      }
    }
  
    $(document).ready(function(){
      $('.acf-map').each(function(){
        initMap( $(this) );
      });
    });
  
  })(jQuery);