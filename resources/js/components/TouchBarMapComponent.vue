<template>
    <div class="map-wrapper-bar">
        <div id="touchBarMap" class="map"></div>
    </div>
</template>

<script>
    export default {
        name: "YandexMapComponent",
        props: ['coordinates'],
        methods: {
            createMap: function(coords) {

                    if (typeof ymaps === 'undefined') {
                        var fired = false;

                        window.addEventListener('scroll', () => {
                            if (fired === false) {
                                fired = true;
                                setTimeout(() => {
                                    var tag_body = document.getElementsByTagName("body")[0];

                                    // Yandex Maps
                                    var ya_maps = document.createElement('script');
                                    ya_maps.src = "https://api-maps.yandex.ru/2.1/?apikey=e65fea9d-e8a0-479d-b21a-35637fdc6c6c&lang=ru_RU&init=onload";
                                    ya_maps.type = "text/javascript";
                                    // / Yandex Maps

                                    tag_body.appendChild(ya_maps);
                                    setTimeout(() => {
                                        ymaps.ready(init);
                                    }, 500);
                                }, 1000);
                            }
                        });
                    } else {
                        ymaps.ready(init);
                    }

                    let _self = this;

                    function init() {
                        var geolocation = ymaps.geolocation,
                            myMap = new ymaps.Map('touchBarMap', {
                                center: coords,
                                zoom: 10,
                                controls: ['zoomControl']
                            }, {
                                searchControlProvider: 'yandex#search'
                            });


                        function success(position){
                            const latitude = position.coords.latitude;
                            const longitude = position.coords.longitude;
                            localStorage.setItem("latitude", latitude);
                            localStorage.setItem("longitude", longitude)
                            localStorage.setItem("coords_expire", Date.now() + (60 * 60 * 1000).toString())
                            addUserLocation([latitude, longitude])
                        }

                        async function error(e) {

                            const res = await fetch('https://location.services.mozilla.com/v1/geolocate?key=test').then(el=>el.json());
                            const point = [res.location.lat, res.location.lng];

                            addUserLocation(point);
                        }

                        if (navigator.geolocation) {
                            let lat = localStorage.getItem("latitude");
                            let lon = localStorage.getItem("longitude");
                            let coords_expire = localStorage.getItem("coords_expire")

                            if (lat !== null && lat !== ""
                                && lon !== "" && lon !== null
                                && parseInt(coords_expire) > (Date.now() + (60 * 60 * 1000))) {
                                success({coords: {latitude: lat, longitude: lon}})
                            } else {
                                navigator.geolocation.getCurrentPosition(success, error);
                            }
                        }

                        function addUserLocation(coords) {
                            let userLocation = new ymaps.GeoObject({
                                // Описание геометрии.
                                geometry: {
                                    type: "Point",
                                    coordinates: coords
                                },
                            }, {
                                draggable: true
                            });

                            let Route = new ymaps.multiRouter.MultiRoute({
                                    referencePoints: [userLocation,
                                        _self.coordinates
                                    ],
                                    params: {
                                        routingMode: 'driving',
                                        reverseGeocoding: true
                                    }
                                },
                                {
                                    boundsAutoApply: true
                                }
                            );

                            myMap.geoObjects.add(Route);
                        }
                    }
            },

            createRoute () {

                let _self = this;

                function success(position){
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    localStorage.setItem("latitude", latitude);
                    localStorage.setItem("longitude", longitude)
                    localStorage.setItem("coords_expire", Date.now() + (60 * 60 * 1000).toString())
                    addUserLocation([latitude, longitude])
                }

                async function error(e) {

                    const res = await fetch('https://location.services.mozilla.com/v1/geolocate?key=test').then(el=>el.json());
                    const point = [res.location.lat, res.location.lng];

                    addUserLocation(point);

                   // console.log('Unable to retrieve your location');
                   // console.log(e)
                }

                if (navigator.geolocation) {
                    let lat = localStorage.getItem("latitude");
                    let lon = localStorage.getItem("longitude");
                    let coords_expire = localStorage.getItem("coords_expire")

                    if (lat !== null && lat !== ""
                        && lon !== "" && lon !== null
                        && parseInt(coords_expire) > (Date.now() + (60 * 60 * 1000))) {
                        success({coords: {latitude: lat, longitude: lon}})
                    } else {
                        navigator.geolocation.getCurrentPosition(success, error);
                    }
                }

                function addUserLocation(coords) {
                    let userLocation = new ymaps.GeoObject({
                        // Описание геометрии.
                        geometry: {
                            type: "Point",
                            coordinates: coords
                        },
                    }, {
                        draggable: true
                    });

                    let Route = new ymaps.multiRouter.MultiRoute({
                            referencePoints: [userLocation,
                                coords
                            ],
                            params: {
                                routingMode: 'driving',
                                reverseGeocoding: true
                            }
                        },
                        {
                            boundsAutoApply: true
                        }
                    );

                    _self.map.geoObjects.add(Route);
                    _self.map.geoObjects.remove(_self.brightParkLocation);
                    _self.routeExist = true;
                }
            }
        },
        mounted () {
            this.createMap(this.coordinates);
        },
    }
</script>

<style lang="scss">

</style>
