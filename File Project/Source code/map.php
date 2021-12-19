<?php
include('header4.php');

?>
<br><br><br><br><br>
<div class="container">
    <br>
    <div class="row mb-5">
        <div class="position-relative">
            <div class="container position-relative">

                <div class="row justify-content-center">
                    <h1 class="h2 bold-3 my-5 max-width-5x text-center">Peta Persebaran Hotel di Kabupaten Karangasem</h1>
                </div>
                <div class="container">

                    <div class="container">
                        <div class="map mt-4">
                            <object data="http://localhost/geoserver/karangasem/wms?service=WMS&version=1.1.0&request=GetMap&layers=karangasem%3Akarangasem&bbox=115.3899917602539%2C-8.5507230758667%2C115.71183013916016%2C-8.166631698608398&width=643&height=768&srs=EPSG%3A404000&styles=&format=application/openlayers" width="1920px" height="800px"></object>
                        </div>
                    </div>
                </div>
                <?php include('footer2.php'); ?>