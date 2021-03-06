<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style-index.css">
    <link rel="shortcut icon" href="./images/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <script src="js/script.js" defer></script>

</head>
<body>
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <img src="images/logo1.png"></a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="browse.php">Browse</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#">maps</a>
    </nav>
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="home.php" class="btn">Login</a>

</header>

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">WELCOME TO</span>
        <h3 data-aos="fade-up" data-aos-delay="300">HOSTEL MANAGEMENT SYSTEM</h3>
        <a data-aos="fade-up" data-aos-delay="600" href="browse.php" class="btn1">Browse Hostels</a>
    </div>

</section>

<div class="credit">created by <span>hostel management system team </span> | all rights reserved!</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>