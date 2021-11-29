(function( $ ) {
    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @return  object The map instance.
     */
    function initMap( $el ) {
        // Find marker elements within map.
        var $markers = $el.find('.marker');

        // Create gerenic map.
        var mapArgs = {
            zoom        : $el.data('zoom') || 16,
            mapTypeId   : google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
        };
        var map = new google.maps.Map( $el[0], mapArgs );

        // Add markers.
        map.markers = [];
        $markers.each(function(){
            initMarker( $(this), map );
        });

        // Center map based on markers.
        centerMap( map );

        google.maps.event.addListener(map, 'idle', function() {
            showVisibleMarkers(map, map.markers);
        });

        // on click
        $('body').on('rest_map_ready', function(){
            var restaurants = $('.group').find('p');
            $(restaurants).on('click', function(){
                var index = $(this).attr('data-index');
                google.maps.event.trigger(map.markers[index], 'click');
                map.setZoom(16);

                $('.group__name').find('.getMarker').removeClass('init');
            });
            $('.group__name').on('click', function(){
                var index = $(this).attr('data-index');
                google.maps.event.trigger(map.markers[index], 'click');
                map.setZoom(11);

                $('.group__name').find('.getMarker').removeClass('init');
                $(this).find('.getMarker').addClass('init');
            });
        });

        // Return map instance.
        return map;
    }

    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker( $marker, map ) {

        // Get position from marker.
        var city = $marker.attr('data-city');
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
            lat: parseFloat( lat ),
            lng: parseFloat( lng )
        };

        // Create marker instance.
        var iconBase = '/wp-content/themes/psibufet/images/restaurants/';
        var marker = new google.maps.Marker({
            position : latLng,
            map: map,
            title: city,
            icon: iconBase + 'mapMarker.svg',
        });

        // Append to reference for later use.
        map.markers.push( marker );


        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            map.setCenter(marker.getPosition());
        });
    }

    function showVisibleMarkers(map, $markers) {
        var array = [];
        var bounds = map.getBounds();
        for (var i = 0; i < $markers.length; i++) {
            var marker = $markers[i];
            
            if(bounds.contains(marker.getPosition()) === true){
                var group = marker.getTitle();
                array.indexOf(group) === -1 ? array.push(group) : '';
            }
        }
        var listGroup = $('.mapList__content').find('.group');
        $(listGroup).each(function(){
            var city = $(this).attr('data-city');
            array.indexOf(city) === -1 ?
            $(this).removeClass('group--active') :
            $(this).addClass('group--active') ;
            // $('.mapList__content').trigger('changed');
        });
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap( map ) {

        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function( marker ){
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });

        // Case: Single marker.
        if( map.markers.length == 1 ){
            map.setCenter( bounds.getCenter() );

        // Case: Multiple markers.
        } else{
            map.fitBounds( bounds );
        }
    }

    // Render maps on page load.
    $(document).ready(function(){
        $('#restaurantMap').each(function(){
            var map = initMap( $(this) );
        });
        $('body').on('rest_map_ready', function(){
            var restaurants = $('.group').find('p');
            var count = 0;
            $(restaurants).each(function(){
                $(this).attr('data-index', count);
                if($(this).is(':last-child')){
                    console.log('last: ' + count);
                    $(this).parents('.group').find('.group__name').attr('data-index', count);
                }
                count++;
            });
        });
    });
})(jQuery);