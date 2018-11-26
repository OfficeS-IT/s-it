<?php
$link = "index";
include 'header.php' ?>

    <div class="slider-bg">

        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/3.jpg" alt="smth1">
                        <div>
                            <p id="message">carpe diem</p>
                        </div>
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="assets/img/6.jpg" alt="smth1">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <hr> <!-- End slider-bg and make horizontal line -->

    <!-- Main component for a primary marketing message or call to action -->
<!--    <div class="container">-->
<!--        <!-- Example row of columns -->
<!--        <div class="row">-->
<!--            <div class="col-md-5 col-lg-offset-1">-->
<!--                <a href="products.php">-->
<!--                    <img src="assets/img/Moto_coach_01.png" width="200px" height="80px" alt="..." class="img-rounded">-->
<!--                </a>-->
<!--                <h2>Moto Coach</h2>-->
<!--                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>-->
<!--            </div>-->
<!--            <div class="col-md-5">-->
<!--                <a href="products.php">-->
<!--                    <img src="assets/img/alter_ego.png" width="200px" height="80px" alt="..." class="img-rounded">-->
<!--                </a>-->
<!--                <h2>AlterEgo </h2>-->
<!--                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<?php include 'footer.php' ?>