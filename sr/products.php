<?php
$link = "technologies";
include 'header.php' ?>

    <div class="slider-bg">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="container container-overlay2">
            <!-- Example row of columns -->
            <div class="row">
                <br/><br/>
                <div class="col-xs-12 col-s-12 col-md-12 col-lg-12">
                    <div class="technologies-item_icons">
                        <h1>Tehnologije koje koristimo</h1>
                            <div class="technologies-item_icon"><i class="fab fa-html5"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-php"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-css3"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-angular"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-java"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-js-square"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-node"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-python"></i></div>
                            <div class="technologies-item_icon"><i class="fab fa-android"></i></div>
                    </div>
                    <br />
                    <div class="technologies-item_icons">
                            <div class="icon-info">
                                    <p>Native Adroid</p>
                                    <p>Native iOS</p>
                                    <p>Machine learning (Tensorflow)</p>
                                    <p>Arduino mikrokontroler</p>
                            </div>
                    </div>
                    <div class="technologies-item_icons">
                        <h1>Vektorska grafika</h1>
                            <div class="icon-info">
                                    <p>Adobe Illustrator</p>
                                    <p>Adobe XD</p>
                                    <p>Sketch</p>
                                    <p>Corel Draw</p>
                                    <p>FontLab</p>
                            </div>
                    </div>
                    <div class="technologies-item_icons">
                        <h1>Rasterska grafika</h1>
                            <div class="icon-info">
                                    <p>Adobe Photoshop</p>
                                    <p>Adobe Indesign</p>
                                    <p>Adobe Lightroom</p>
                                    <p>Adobe After Effects</p>
                                    <p>Corel Painter</p>
                            </div>
                    </div>
                    <div class="technologies-item_icons">
                        <h1>3D Kompjuterska grafika</h1>
                            <div class="icon-info">
                                    <p>Autodesk 3ds Max</p>
                                    <p>Blender</p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="beautify"></div>
        </div>
    </div>
<!-- <script>
$(document).ready(function(){    
    $("#btn_motorCoachPopover").popover({
        placement   : 'bottom',
        html        : 'true'
    });
    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
});
</script> -->
<?php include 'footer.php' ?>
