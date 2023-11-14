@extends('layouts.app')
@section('content')
<style>
    h5 {
        color: #2a87ca;
        font-size: 15px;
    }

    .image-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .image-container .col-md-4 {
        transition: transform 0.3s, opacity 0.3s;
        margin-bottom: 12px;
    }

    .image-container .col-md-4:hover {
        transform: scale(1.05);
        opacity: 0.8;
        cursor: pointer;
    }

    .nav-buttons {
        display: flex;
        justify-content: space-between;
    }

    .buttons {
        display: flex;
        justify-content: center;
    }

    .clickable-image {
        max-height: 130px;
        height: 130px;
        width: 100%;
        object-fit: cover;
        object-position: center center;
        border-radius: 15px;
        background: #a9a9a9;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 4px;
    }

    .main-image {
        max-height: 415px;
        height: 415px;
        width: 100%;
        object-fit: cover;
        object-position: center center;
        border-radius: 15px;
        background: #a9a9a9;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 4px;
    }

    button.control_prev,
    button.control_next {
        position: unset;
        top: 50%;
        z-index: 10;
        border: none;
        width: 3em;
        height: 3em;
        background: #afaeae;
        color: #fff;
        text-align: center;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.4rem;
        opacity: 0.8;
        cursor: pointer;
        border-radius: 50%;
        padding: 10px !important;
        transform: unset;
    }

    button.control_prev:hover,
    button.control_next:hover {
        opacity: 1;
        -webkit-transition: all 0.2s ease;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding: 0px; margin: 0px;">
            <img src="img/slide bidawa.png?<?php echo date('YmdHis'); ?>" width="100%" />
        </div>
    </div>

    <div class="row bg-white" style="margin-top: 25px;">
        <div class="col-md-12">
            <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> Fair un don </h2>
            <?php /*
            <h5>• Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
            <h5 style="margin-bottom: 30px">• Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>

            <!-- First main column: Image display -->
            <div class="col-md-4" id="mainImageContainer" >
                <img id="mainImage" src="img/a1.png" alt="Main Image" class="img-responsive main-image">
            </div>

            <!-- Second main column: Three sub-columns with images -->
            <div class="col-md-8">
                <div class="image-container">
                    <!-- First sub-column -->
                    <div class="col-md-4">
                        <img src="img/a1.png" alt="Image 1" class="img-responsive clickable-image"
                            data-src="img/a1.png">
                    </div>
                    <!-- Second sub-column -->
                    <div class="col-md-4">
                        <img src="img/a2.png" alt="Image 2" class="img-responsive clickable-image"
                            data-src="img/a2.png">
                    </div>
                    <!-- Third sub-column -->
                    <div class="col-md-4">
                        <img src="img/a3.png" alt="Image 3" class="img-responsive clickable-image"
                            data-src="img/a3.png">
                    </div>
                    <div class="col-md-4">
                        <img src="img/a4.png" alt="Image 1" class="img-responsive clickable-image"
                            data-src="img/a4.png">
                    </div>
                    <!-- Second sub-column -->
                    <div class="col-md-4">
                        <img src="img/a5.png" alt="Image 2" class="img-responsive clickable-image"
                            data-src="img/a5.png">
                    </div>
                    <!-- Third sub-column -->
                    <div class="col-md-4">
                        <img src="img/a6.png" alt="Image 3" class="img-responsive clickable-image"
                            data-src="img/a6.png">
                    </div>
                    <div class="col-md-4">
                        <img src="img/a7.png" alt="Image 1" class="img-responsive clickable-image"
                            data-src="img/a7.png">
                    </div>
                    <!-- Second sub-column -->
                    <div class="col-md-4">
                        <img src="img/a8.png" alt="Image 2" class="img-responsive clickable-image"
                            data-src="img/a8.png">
                    </div>
                    <!-- Third sub-column -->
                    <div class="col-md-4">
                        <img src="img/a9.png" alt="Image 3" class="img-responsive clickable-image"
                            data-src="img/a9.png">
                    </div>
                    <div class="col-md-12 buttons">



                        <button id="prevButton" style="margin-right: 15px;" class="control_prev"> <span
                                class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> </button>
                        <button id="nextButton" class="control_next"><span class="glyphicon glyphicon-menu-right"
                                aria-hidden="true"></span></button>
                    </div>
                </div>



*/
            ?>
        </div>

    </div>
</div>


</div>




<script>
    $(document).ready(function() {
        // Click event for images with class 'clickable-image'
        $('.clickable-image').click(function() {
            var newSrc = $(this).data('src');
            $('#mainImage').attr('src', newSrc);
        });

        // Previous and Next buttons
        var currentIndex = 0;
        var $images = $('.clickable-image');

        $('#prevButton').click(function() {
            currentIndex = (currentIndex - 1 + $images.length) % $images.length;
            $('#mainImage').attr('src', $($images[currentIndex]).data('src'));
        });

        $('#nextButton').click(function() {
            currentIndex = (currentIndex + 1) % $images.length;
            $('#mainImage').attr('src', $($images[currentIndex]).data('src'));
        });
    });
</script>

@endsection
