<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Square</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

    <?php
    
        // header section starts
        include "inc/header.php";
        // header section ends

        // search form starts
        include "inc/search.php";
        // search form ends

        // home section starts
        include "inc/home.php";
        // home section ends

        // coffee shops starts
        include "inc/coffee-shops.php";
        // coffee shops ends

        // about section starts
        include "inc/about.php";
        // about section ends

        // menu section starts
        include "inc/menu.php";
        // menu section ends

        // review section starts
        include "inc/review.php";
        // review section ends

        // order section starts
        include "inc/order.php";
        // order section ends

        // footer section starts
        include "inc/footer.php";
        // footer section ends

        // loader part starts
        include "inc/loader-page.php";
        // loader part ends
    
    ?>

    <!-- script swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- file script -->
    <script src="js/script.js"></script>
</body>
</html>