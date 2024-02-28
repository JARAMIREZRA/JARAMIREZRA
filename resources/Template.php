<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jeison Ramirez</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?= ASSETS ?>/img/favicon.png" rel="icon">
    <link href="<?= ASSETS ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="<?= ASSETS ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= ASSETS ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= ASSETS ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= ASSETS ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= ASSETS ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="<?= ASSETS ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        $route =  isset($_GET["route"]) ? $_GET["route"] : NULL;
        $archive = "views/" . $route . ".php";
        $url = __DIR__ . ROUTE . $route . ".php";
        if ( empty($route) ) {
             $url = LOCALHOST . "/inicio";
             header("Location: $url");
        }
        if ( file_exists($url) ) {
            if ( isset($route) ) {
                include $archive;
            }
            return;
       }
    ?>
</body>

</html>