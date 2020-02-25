<section class="map-wrap" id="Contacts">
        <div id="map"></div>
        <div class="map-info">
            <div class="map-info_adress">
                <div class="map-info_adress-img"><img src="img/map/map_marker.png" alt=""></div>
                <!-- /.map-info_adress-img -->
                <div class="map-info_adress-dscr">
                    <div class="map-info_adress-txt"><span class="title">Адрес офиса</span> <!-- /.title --><span>г. Уфа, Проспект октября, 46</span></div>
                    <!-- /.map-info_adress-txt -->
                    <div class="map-info_adress-txt"><span class="title">Адрес склада</span> <!-- /.title --><span>г. Уфа, ул. Майкопская, 65/2</span></div>
                    <!-- /.map-info_adress-txt -->
                </div> 
            </div>
            <!-- /.map-info_adress -->
            <div class="map-info_tel">
                <div class="map-info_tel-img"><img src="img/map/map_tel.png" alt=""></div>
                <!-- /.map-info_tel-img -->
                <div class="map-info_tel-descr">
                    <div class="map-info_tel-title title">Тел. отдела продаж:</div>
                    <!-- /.map-info_tel-title -->
                    <div class="map-info_tel-numbers"><span>8 (937) 363-30-00</span><span>8 (347) 271-54-28</span></div>
                    <!-- /.map-info_tel-numbers -->
                </div>
                <!-- /.map-info_tel-descr --> 
            </div>
            <!-- /.map-info_tel -->
            <div class="map-info_button"><button class="button button_order">Заказать звонок</button> <!-- /.button --></div>
            <!-- /.map-info_button -->
            <div class="map-info_mail">
                <div class="mao-info_mail-img"><img src="img/map/map_mess.png" alt=""></div>
                <!-- /.mao-info_mail-img -->
                <div class="some-text">
                    <div class="map-info_mail-title title">Е-mail</div>
                    <!-- /.map-info_mail-title -->
                    <div class="map-info_mail-txt">urals.karton@gmail.com</div>
                    <!-- /.map-info_mail-txt -->
                </div>
            </div>
            <!-- /.map-info_mail -->
        </div>
        <!-- /.map-info -->
    </section>
    <!-- /.map-wrap -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <!-- Google maps scripts -->
    <script> 
        function initMap() {
            var coordinates = {lat: 54.7526409, lng: 55.9999166},
            markerImage = 'img/map/marker.png',
        
            map = new google.maps.Map(document.getElementById('map'), {
                center: coordinates,
                zoom: 16
            }),

            marker = new google.maps.Marker({
                position: coordinates,
                map: map,
                icon: markerImage
        });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7wWsFJrVWctIZ4BHMyVu8-lcROeInmGo&callback=initMap" async defer></script>
    <script src="js/libs/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script type="text/javascript" src="js/libs/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>