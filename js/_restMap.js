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
                map.setCenter(map.markers[index].getPosition());
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
        var city = $marker.parents('.group').attr('data-city');
        var name = $marker.attr('data-name');
        var street = $marker.attr('data-street');
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
            name: name,
            icon: iconBase + 'mapMarker.svg',
        });

        // Append to reference for later use.
        map.markers.push( marker );

        var contentString =
            '<div class="mapPopup">' +
            '<h3 class="mapPopup__heading">' + name + '</h3>' +
            "<p>" + street + "</p>" +
            "</div>";
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            map.setCenter(marker.getPosition());

            infowindow.close();
            infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
            });
            map.setZoom(16);

            var listGroup = $('.mapList__content').find('.group');
            var restaurants = listGroup.find('.group__list').find('p');

            setTimeout(function(){
                $(restaurants).each(function(){
                    var name = $(this).attr('data-name');

                    if(name == marker.name){
                        $(this).addClass('init');
                    }
                });
            }, 100);
        });
    }

    function showVisibleMarkers(map, $markers) {
        var array = [];
        var count = 0;
        var bounds = map.getBounds();
        for (var i = 0; i < $markers.length; i++) {
            var marker = $markers[i];
            var markerName = $markers[i].name;

            var allrests = $('.group__list').find('p');
            $(allrests).each(function(){
                var restname = $(this).attr('data-name');

                if(restname == markerName){
                    $(this).removeClass('init');
                }
            });

            if(bounds.contains(marker.getPosition()) === true){
                count++;
                var group = marker.getTitle();
                var name = marker.name;
                if(array[group] === undefined){
                    array[group] = [];
                }
                array[group].push({name: name});
            }
        }

        var listGroup = $('.mapList__content').find('.group');
        $(listGroup).each(function(){
            var city = $(this).attr('data-city');
            var restaurants = $(this).find('.group__list').find('p');

            if(array[city] !== undefined){
                $(this).addClass('group--active');
            }else{
                $(this).removeClass('group--active');
            }

            var visibleRests = [];
            $.each(array[city], function (index, value) {
                visibleRests.push(value.name);
            });

            $(restaurants).each(function(){
                var rest = $(this);
                var name = rest.attr('data-name');

                if($.inArray(name, visibleRests) !== -1){
                    rest.addClass('active');
                    if(count == 1){
                        rest.addClass('init');
                    }
                }else{
                    rest.removeClass('active');
                }
            });
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
            var map = initMap($(this));
        });
        $('body').on('rest_map_ready', function(){
            var restaurants = $('.group').find('p');
            var count = 0;
            $(restaurants).each(function(){
                $(this).attr('data-index', count);
                if($(this).is(':last-child')){
                    $(this).parents('.group').find('.group__name').attr('data-index', count);
                }
                count++;
            });
        });
    });
})(jQuery);