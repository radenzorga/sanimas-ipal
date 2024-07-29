<!DOCTYPE html>
<html>

<head>
    <title>ANALISIS KINERJA SANIMAS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/GI-1.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="peta01/css/leaflet.css">
    <link rel="stylesheet" href="peta01/css/L.Control.Locate.min.css">
    <link rel="stylesheet" href="peta01/css/qgis2web.css">
    <link rel="stylesheet" href="peta01/css2022/fontawesome-all.min.css">
    <link rel="stylesheet" href="peta01/css/leaflet-control-geocoder.Geocoder.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="peta01/css/leaflet.css">
    <link rel="stylesheet" href="peta01/css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="peta01/css/leaflet.css">
    <link rel="stylesheet" href="peta01/css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/front/css/fontawesome.css">
    <link rel="stylesheet" href="assets/front/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/front/css/owl.css">


    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <title></title>

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/stbm2.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h3>Peta</h3>
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Peta</li>
            </ol>
        </div>
    </div>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.phpl" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img class="image" border="0" src="'assets/img/GI-1.png"></li> -->
                <img src="assets/img/logo GI.png" alt="">
                <h1>GEOSPATIAL INFORMATION TECHNOLOGY<span></span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="projects.php">Analytics</a></li>
                    <li><a href="about.php" class="active">Maps</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about1.php">About</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <div id="map">
    </div>
    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="data/ADMINISTRASIDESA_AR_25K_1.js"></script>
    <script src="data/KSM_Kota_Bogor_revisi2_2.js"></script>
    <script>
        var highlightLayer;

        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
                highlightLayer.setStyle({
                    color: '#ffff00',
                });
            } else {
                highlightLayer.setStyle({
                    fillColor: '#ffff00',
                    fillOpacity: 1
                });
            }
        }
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-6.6697441137984175, 106.65095210490824],
            [-6.504568232578921, 106.99462540724508]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix(
            '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
        );
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);

        function pop_ADMINISTRASIDESA_AR_25K_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker.link(feature.properties[
                'KDPPUM'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties[
                'NAMOBJ'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties[
                'REMARK'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker.link(feature.properties[
                'KDPBPS'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker.link(feature.properties[
                'FCODE'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker.link(feature.properties[
                'LUASWH'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(feature.properties[
                'UUPP'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker.link(feature.properties[
                'SRS_ID'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties[
                'LCODE'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker.link(feature.properties[
                'METADATA'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker.link(feature.properties[
                'KDEBPS'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker.link(feature.properties[
                'KDEPUM'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker.link(feature.properties[
                'KDCBPS'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker.link(feature.properties[
                'KDCPUM'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker.link(feature.properties[
                'KDBBPS'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KDBPUM'] !== null ? autolinker.link(feature.properties[
                'KDBPUM'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker.link(feature.properties[
                'WADMKD'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker.link(feature.properties[
                'WIADKD'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties[
                'WADMKC'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker.link(feature.properties[
                'WIADKC'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties[
                'WADMKK'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker.link(feature.properties[
                'WIADKK'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties[
                'WADMPR'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker.link(feature.properties[
                'WIADPR'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker.link(feature.properties[
                'TIPADM'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature
                .properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature
                .properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_ADMINISTRASIDESA_AR_25K_1_0() {
            return {
                pane: 'pane_ADMINISTRASIDESA_AR_25K_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,0.34901960784313724)',
                interactive: true,
            }
        }
        map.createPane('pane_ADMINISTRASIDESA_AR_25K_1');
        map.getPane('pane_ADMINISTRASIDESA_AR_25K_1').style.zIndex = 401;
        map.getPane('pane_ADMINISTRASIDESA_AR_25K_1').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASIDESA_AR_25K_1 = new L.geoJson(json_ADMINISTRASIDESA_AR_25K_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASIDESA_AR_25K_1',
            layerName: 'layer_ADMINISTRASIDESA_AR_25K_1',
            pane: 'pane_ADMINISTRASIDESA_AR_25K_1',
            onEachFeature: pop_ADMINISTRASIDESA_AR_25K_1,
            style: style_ADMINISTRASIDESA_AR_25K_1_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASIDESA_AR_25K_1);
        map.addLayer(layer_ADMINISTRASIDESA_AR_25K_1);

        function pop_KSM_Kota_Bogor_revisi2_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['No_'] !== null ? autolinker.link(feature.properties['No_']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Nama KSM/KPP: </th>\
                    <td>' + (feature.properties['Nama KSM/K'] !== null ? autolinker.link(feature.properties[
                'Nama KSM/K'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Kecamatan: </th>\
                    <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Garis lintang: </th>\
                    <td>' + (feature.properties['Latitude'] !== null ? autolinker.link(feature.properties['Latitude']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Garis bujur: </th>\
                    <td>' + (feature.properties['Longitude'] !== null ? autolinker.link(feature.properties['Longitude']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Tahun dibangun: </th>\
                    <td>' + (feature.properties['Tahun diba'] !== null ? autolinker.link(feature.properties[
                'Tahun diba'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks: </th>\
                    <td>' + (feature.properties['Indeks'] !== null ? autolinker.link(feature.properties['Indeks']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks Tahun: </th>\
                    <td>' + (feature.properties['Indeks Tah'] !== null ? autolinker.link(feature.properties[
                'Indeks Tah'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Luas lahan: </th>\
                    <td>' + (feature.properties['Luas lahan'] !== null ? autolinker.link(feature.properties[
                'Luas lahan'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks luas lahan: </th>\
                    <td>' + (feature.properties['Indeks lua'] !== null ? autolinker.link(feature.properties[
                'Indeks lua'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Luas bangunan: </th>\
                    <td>' + (feature.properties['Luas bangu'] !== null ? autolinker.link(feature.properties[
                'Luas bangu'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks luas bangunan: </th>\
                    <td>' + (feature.properties['Indeks lua_1'] !== null ? autolinker.link(feature.properties[
                'Indeks lua_1'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Status lahan: </th>\
                    <td>' + (feature.properties['Status lah'] !== null ? autolinker.link(feature.properties[
                'Status lah'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Nilai: </th>\
                    <td>' + (feature.properties['Nilai'] !== null ? autolinker.link(feature.properties['Nilai']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks status: </th>\
                    <td>' + (feature.properties['Indeks sta'] !== null ? autolinker.link(feature.properties[
                'Indeks sta'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Jenis pendanaan: </th>\
                    <td>' + (feature.properties['Jenis pend'] !== null ? autolinker.link(feature.properties[
                'Jenis pend'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Nilai: </th>\
                    <td>' + (feature.properties['Nilai_1'] !== null ? autolinker.link(feature.properties['Nilai_1']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks pendanaan: </th>\
                    <td>' + (feature.properties['Indeks jen'] !== null ? autolinker.link(feature.properties[
                'Indeks jen'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Jenis Sistem IPAL: </th>\
                    <td>' + (feature.properties['Jenis Sist'] !== null ? autolinker.link(feature.properties[
                'Jenis Sist'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Nilai: </th>\
                    <td>' + (feature.properties['Nilai_12'] !== null ? autolinker.link(feature.properties['Nilai_12']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks jenis IPAL: </th>\
                    <td>' + (feature.properties['Indeks jen_1'] !== null ? autolinker.link(feature.properties[
                'Indeks jen_1'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Dimensi IPAL: </th>\
                    <td>' + (feature.properties['Dimensi IP'] !== null ? autolinker.link(feature.properties[
                'Dimensi IP'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Total dimensi: </th>\
                    <td>' + (feature.properties['Total dime'] !== null ? autolinker.link(feature.properties[
                'Total dime'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks dimensi: </th>\
                    <td>' + (feature.properties['Indeks dim'] !== null ? autolinker.link(feature.properties[
                'Indeks dim'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">SR Eksisting: </th>\
                    <td>' + (feature.properties['SR Eksisti'] !== null ? autolinker.link(feature.properties[
                'SR Eksisti'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks SR: </th>\
                    <td>' + (feature.properties['Indeks Sam'] !== null ? autolinker.link(feature.properties[
                'Indeks Sam'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Sumber Air: </th>\
                    <td>' + (feature.properties['Sumber Air'] !== null ? autolinker.link(feature.properties[
                'Sumber Air'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Nilai: </th>\
                    <td>' + (feature.properties['Nilai_1_13'] !== null ? autolinker.link(feature.properties[
                'Nilai_1_13'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks sumber air: </th>\
                    <td>' + (feature.properties['Indeks sum'] !== null ? autolinker.link(feature.properties[
                'Indeks sum'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Kedalaman sumur: </th>\
                    <td>' + (feature.properties['Kedalaman'] !== null ? autolinker.link(feature.properties['Kedalaman']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Pemeliharaan Sistem Jaringan: </th>\
                    <td>' + (feature.properties['Pemelihara'] !== null ? autolinker.link(feature.properties[
                'Pemelihara'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Nilai: </th>\
                    <td>' + (feature.properties['Nilai_1_14'] !== null ? autolinker.link(feature.properties[
                'Nilai_1_14'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks pemeliharaan: </th>\
                    <td>' + (feature.properties['Indeks pem'] !== null ? autolinker.link(feature.properties[
                'Indeks pem'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Tempat akhir buang efluent: </th>\
                    <td>' + (feature.properties['Tempat akh'] !== null ? autolinker.link(feature.properties[
                'Tempat akh'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Indeks Kinerja Gabungan: </th>\
                    <td>' + (feature.properties['Indeks Kin'] !== null ? autolinker.link(feature.properties[
                'Indeks Kin'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Peringkat: </th>\
                    <td>' + (feature.properties['Peringkat'] !== null ? autolinker.link(feature.properties['Peringkat']
                .toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">Kriteria: </th>\
                    <td>' + (feature.properties['Kriteria'] !== null ? autolinker.link(feature.properties['Kriteria']
                .toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_KSM_Kota_Bogor_revisi2_2_0(feature) {
            switch (String(feature.properties['Kriteria'])) {
                case 'Cukup':
                    return {
                        pane: 'pane_KSM_Kota_Bogor_revisi2_2',
                            radius: 4.0,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,247,1,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rendah':
                    return {
                        pane: 'pane_KSM_Kota_Bogor_revisi2_2',
                            radius: 4.0,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,5,1,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sangat Tinggi':
                    return {
                        pane: 'pane_KSM_Kota_Bogor_revisi2_2',
                            radius: 4.0,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(56,255,1,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Tinggi':
                    return {
                        pane: 'pane_KSM_Kota_Bogor_revisi2_2',
                            radius: 4.0,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(36,136,0,1.0)',
                            interactive: true,
                    }
                    break;
                default:
                    return {
                        pane: 'pane_KSM_Kota_Bogor_revisi2_2',
                            radius: 8.0,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(17,212,30,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_KSM_Kota_Bogor_revisi2_2');
        map.getPane('pane_KSM_Kota_Bogor_revisi2_2').style.zIndex = 402;
        map.getPane('pane_KSM_Kota_Bogor_revisi2_2').style['mix-blend-mode'] = 'normal';
        var layer_KSM_Kota_Bogor_revisi2_2 = new L.geoJson(json_KSM_Kota_Bogor_revisi2_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KSM_Kota_Bogor_revisi2_2',
            layerName: 'layer_KSM_Kota_Bogor_revisi2_2',
            pane: 'pane_KSM_Kota_Bogor_revisi2_2',
            onEachFeature: pop_KSM_Kota_Bogor_revisi2_2,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_KSM_Kota_Bogor_revisi2_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_KSM_Kota_Bogor_revisi2_2);
        map.addLayer(layer_KSM_Kota_Bogor_revisi2_2);
        var baseMaps = {};
        L.control.layers(baseMaps, {
            'KSM_Kota_Bogor_(revisi2)<br /><table><tr><td style="text-align: center;"><img src="legend/KSM_Kota_Bogor_revisi2_2_Cukup0.png" /></td><td>Cukup</td></tr><tr><td style="text-align: center;"><img src="legend/KSM_Kota_Bogor_revisi2_2_Rendah1.png" /></td><td>Rendah</td></tr><tr><td style="text-align: center;"><img src="legend/KSM_Kota_Bogor_revisi2_2_SangatTinggi2.png" /></td><td>Sangat Tinggi</td></tr><tr><td style="text-align: center;"><img src="legend/KSM_Kota_Bogor_revisi2_2_Tinggi3.png" /></td><td>Tinggi</td></tr><tr><td style="text-align: center;"><img src="legend/KSM_Kota_Bogor_revisi2_2_4.png" /></td><td></td></tr></table>': layer_KSM_Kota_Bogor_revisi2_2,
            '<img src="legend/ADMINISTRASIDESA_AR_25K_1.png" /> ADMINISTRASIDESA_AR_25K': layer_ADMINISTRASIDESA_AR_25K_1,
            "OpenStreetMap": layer_OpenStreetMap_0,
        }, {
            collapsed: false
        }).addTo(map);
        setBounds();
    </script>

    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
                &copy; Copyright 2024 <strong><span>Analisis Kinerja Sanimas Kota Bogor</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                Designed by <a>GEOSPATIAL INFORMATION TECHNOLOGY</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/front/js/custom.js"></script>
    <script src="assets/front/js/owl.js"></script>
    <script src="assets/front/js/slick.js"></script>
    <script src="assets/front/js/accordions.js"></script>
</body>

</html>