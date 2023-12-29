<?php header('Pragma: no-cache'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/galleryPage.css">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600&display=swap" rel="stylesheet">

    <!-- Social Media Logos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- JS File here -->
    <script src="js/carousel.js"></script>
    <script src="js/main.js"></script>
    <script src="js/navbarToggler.js"></script>

    <script>
        function reloadImg(img) {
            img.onerror = null;
            img.src = img.src;
        }
    </script>


    <!-- PHP Code for Dynamic Title -->
    <?php
    $title = 'Gallery';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['folderName'])) {
        $folderName = $_POST['folderName'];
        $title = $folderName . ' Gallery';
    }
    ?>

    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="custom-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </span>
                </button>

                <a class="navbar-brand text-white mx-3" href="index.html" style="font-weight:600;">
                    <img src="#" alt="">ttgt.photo
                </a>

                <div class="navbar-collapse collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.html#aboutsection">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery.html">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="header-container">
        <div class="header">
            <div class="hero-container">
                <img class="hero-img" src="./gallery-content/_MG_0394.jpg" alt="panorama" oncontextmenu="return false;">
                <div class="header-text">
                    <h2 class="gallerypagetitle"><?php echo $title; ?></h2>
                    <!-- <p class="text-center"></p> -->
                </div>
                <div class="svg-container">
                    <a href="#images">
                        <svg fill="#eeeeee" height="60px" width="60px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-33 -33 396.00 396.00" xml:space="preserve" transform="rotate(180)"
                            stroke="#ffffff" stroke-width="0.0033">
                            <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                stroke="#CCCCCC" stroke-width="0.66"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="XMLID_109_">
                                    <path id="XMLID_110_"
                                        d="M25.607,190.607L164.997,51.214l139.396,139.393C307.323,193.536,311.161,195,315,195 c3.839,0,7.678-1.464,10.606-4.394c5.858-5.858,5.858-15.355,0-21.213l-150.003-150C172.79,16.58,168.976,15,164.997,15 s-7.794,1.581-10.607,4.394l-149.997,150c-5.858,5.858-5.858,15.355,0,21.213C10.251,196.465,19.749,196.465,25.607,190.607z">
                                    </path>
                                    <path id="XMLID_138_"
                                        d="M175.603,139.393c-2.813-2.813-6.628-4.393-10.606-4.393c-3.979,0-7.794,1.581-10.607,4.394l-149.996,150 c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213-0.001l139.39-139.393l139.397,139.394 C307.323,313.536,311.161,315,315,315c3.839,0,7.678-1.464,10.606-4.394c5.858-5.858,5.858-15.355,0-21.213L175.603,139.393z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Spacer -->
    <div class="spacer"></div>

    <!-- Gallery Display -->
    <a name="images"></a>
    <div class="container-fluid m-0">
        <div class="row row-gallery justify-content-center">
            <?php
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['folderName'])) {
                    $folderName = $_POST['folderName'];
                    $folderPath = './gallery-content/' . $folderName;

                    if (is_dir($folderPath)) {
                        $files = scandir($folderPath);

                        $portraitCount = 0;
                        $landscapeCount = 0;

                        foreach ($files as $file) {
                            if ($file !== '.' && $file !== '..') {
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'jpg' || pathinfo($file, PATHINFO_EXTENSION) === 'png') {
                                    list($width, $height) = getimagesize($folderPath . '/' . $file);
                                    $imageClass = ($width > $height) ? 'l' : 'p';

                                    if ($imageClass === 'p') {
                                        echo '<div class="col-md-3 mb-2 mt-2">';
                                        echo '<img class="img-fluid rounded" src="' . $folderPath . '/' . $file . '" loading="lazy" decoding="async" onerror="reloadImg(this)" oncontextmenu="return false;">';
                                        echo '</div>';
                                        $portraitCount++;
                                    } 
                                    else if ($imageClass === 'l') {
                                        echo '<div class="col-md-6 mb-2 mt-2">';
                                        echo '<img class="img-fluid rounded" src="' . $folderPath . '/' . $file . '" loading="lazy" decoding="async" onerror="reloadImg(this)" oncontextmenu="return false;">';
                                        echo '</div>';
                                        $landscapeCount++;
                                    }
                                }
                            }
                        }
                        // echo $portraitCount . ' ' . $landscapeCount;
                    } else {
                        echo '<h3><center>Folder not found</center></h3>';
                    }
                } else {
                    echo '<h3><center>Request Not Found</center></h3>';
                }
            } else {
                echo '<h3><center>Invalid request</center></h3>';
            }
            ?>
        </div>
    </div>

    <!-- Spacer -->
    <div class="spacer"></div>


    <!-- Footer -->
    <a name="contact"></a>
    <footer>
        <div class="footer-section row justify-content-center p-lg-5">
            <div class="m-2 p-2 col-7">

                <div class="row">
                    <div class="footer-about col-md-8 col-sm-6 col-xs-12">
                        <p class="fs-2 text-lg-start" style="font-weight: 700;">Contact</p>
                        <!-- <br> -->
                        <p>📌 Based in Kolkata, India.</p>
                        <p>📧 E-mail Me @ <a href="mailto:manualmodeofficial@gmail.com">manualmodeofficial</a></p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="fs-2 text-lg-start" style="font-weight: 700;">Sitemap</p>
                        <ul class="footer-sitemap">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="comingsoon.html">Get Prints</a></li>
                        </ul>
                    </div>
                </div>

                <hr>

                <div class="row align-items-center">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="text-lg-start">Made with 💖 by Tathagata Guha Ray</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="text-lg-end">
                        <ul class="social-icons d-flex justify-content-lg-end justify-content-start">
                            <li><a href="https://www.instagram.com/ttgt.photo" target="_blank" class="instagram"
                                    title="Instagram"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/tathagata-guha-ray/" target="_blank"
                                    class="linkedin" title="LinkedIn"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="https://github.com/AlexJMercer" target="_blank" class="github"
                                    title="GitHub"><i class="bi bi-github"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- PopperJS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>

</html>