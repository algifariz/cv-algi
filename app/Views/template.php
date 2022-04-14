<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    </noscript>
    <link href="<?= base_url() ?>/assets/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
            <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#"><?= $title; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#edukasi">Edukasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?= $this->renderSection('content') ?>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="<?= base_url() ?>/assets/scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="<?= base_url() ?>/assets/scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="<?= base_url() ?>/assets/scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="<?= base_url() ?>/assets/scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="<?= base_url() ?>/assets/scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="<?= base_url() ?>/assets/scripts/aos.min.js?ver=1.2.0"></script>
    <script src="<?= base_url() ?>/assets/scripts/main.js?ver=1.2.0"></script>
</body>

</html>