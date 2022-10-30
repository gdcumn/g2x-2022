<?php
    $alt = "../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../src/g2x_logo.png">
    <title>G2X 2022 - Webinar</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../webinarstyle3.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- link font -->
    <!-- varela -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <!-- dosis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <style>
        .font_content{
            font-family: 'Varela', sans-serif;
            color: #0A194F;
        }
        
        .font_title{
            font-family: 'Dosis', sans-serif !important;
            color: #0A194F !important;
        }
    </style>
</head>
<body id="webinar">
    <header>  
        <?php $alt = "../"; require_once('../header.php'); ?>
    </header>

    <div id="kosong"></div>
    <div class="container-fluid justify-content-center mx-auto px-auto col col-lg-10">
        <div id="title" data-aos="fade-down">
            <p class="d-flex justify-content-center font_title" id="judul" style="font-size:64px;">WEBINAR</p>
            <p class="d-flex justify-content-center font_content text-center" id="subjudul">
            Penasaran mengenai dunia pengembangan game?<br>
            Ikuti webinar yang dibawakan oleh pakar profesional <br/>
            yang akan membahas mengenai game design dan game marketing.
            </p>
        </div>
        <div id="webinars">
            <div class="d-flex justify-content-lg-start justify-content-center mx-5" id="webinar1" data-aos="fade-down">
                <div class="d-flex row row-md-2 justify-content-center">
                    <div id="upLeft" class="d-flex mx-4 my-lg-0 my-4 col justify-content-center">
                        <div class="col-auto">
                            <img src="../src/webi_compe/yohannes_yokomichi.jpg" class="bg-secondary rounded-circle webinar_profile"/>
                        </div>
                    </div>
                    <div id="upRight" class="mx-4 col col-auto">
                        <div class="d-flex justify-content-md-start justify-content-center justify-content-center">
                            <p class="mx-2 font_title webinar_title">Break Through Your Limits</p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-md-start justify-content-center">
                                <div>
                                    <p id="speaker" class="mx-2 d-flex justify-content-md-start justify-content-center font_content text-center">Yohannes Yokomichi - Former Game Designer MNC Games</p>
                                    <p id="category" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Game Design</p>
                                    <p id="day" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Jumat, 11 November 2022</p>
                                    <p id="time" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Pukul 18.30 WIB</p>
                                    <div class="d-flex justify-content-center" data-aos="fade-down">
                                        <a href="https://bit.ly/webinarg2xlimitbreak">
                                            <img src="../src/buttons/register_here.png" class="register_here">
                                        </a>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-lg-end justify-content-center mx-5" id="webinar2" data-aos="fade-down">
                <div class="d-flex row row-md-2 justify-content-center">
                    <div id="upLeft" class="d-flex mx-4 my-lg-0 my-4 col justify-content-center">
                        <div class="col-auto">
                            <img src="../src/webi_compe/sarah_johana.jpg" class="bg-secondary rounded-circle webinar_profile"/>
                        </div>
                    </div>
                    <div id="upRight" class="mx-4 col col-auto">
                        <div class="d-flex justify-content-md-start justify-content-sm-center justify-content-center">
                            <p class="mx-2 font_title webinar_title">Sales Went to the Sky</p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-md-start justify-content-center">
                                <div>
                                    <p id="speaker" class="mx-2 d-flex justify-content-md-start justify-content-center font_content text-center">Sarah Johana - Lead Marketing Toge Productions</p>
                                    <p id="category" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Game Marketing</p>
                                    <p id="day" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Sabtu, 12 November 2022</p>
                                    <p id="time" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Pukul 13.00 WIB</p>
                                    <div class="d-flex justify-content-center" data-aos="fade-down">
                                        <a href="https://bit.ly/webinarg2xskysales">
                                            <img src="../src/buttons/register_here.png" class="register_here">
                                        </a>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-lg-start justify-content-center mx-5" id="webinar3" data-aos="fade-down">
                <div class="d-flex row row-md-2 justify-content-center">
                    <div id="upLeft" class="d-flex mx-4 my-lg-0 my-4 col justify-content-center">
                        <div class="col-auto">
                            <img src="../src/game_placeholder.png" class="bg-secondary rounded-circle webinar_profile"/>
                        </div>
                    </div>
                    <div id="upRight" class="mx-4 col col-auto">
                        <div class="d-flex justify-content-md-start justify-content-sm-center justify-content-center">
                            <p class="mx-2 font_title webinar_title">Webinar title title<br> Webinar title title</p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-md-start justify-content-center">
                                <div>
                                    <p id="category" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Category</p>
                                    <p id="day" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Day, DD MM YY</p>
                                    <p id="time" class="mx-2 d-flex justify-content-md-start justify-content-center font_content">Pukul 00.00 WIB</p>
                                </div> 
                            </div>                    
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <footer>
        <?php include("../footer.php"); ?>
    </footer>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>