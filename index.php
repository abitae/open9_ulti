<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from up2client.com/envato/nairobi//Preview/main-file/light-mode/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Apr 2025 23:30:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Font awsome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Jost & Fascinate Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&amp;family=Jost:wght@400;500&amp;display=swap"
        rel="stylesheet">
    <!-- Css Files -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/media/home.media.css">
</head>

<body class="hero">
    <div class="site_content">
        <?php include 'partial/preloader.php'; ?>
        <!-- ====================================== Menu Section ===================================== -->
        <div class="main_container">
            <?php include 'partial/menu.php'; ?>
            <!-- ====================================== Menu Section End ===================================== -->

            <!-- ====================================== Dark Light Mode ===================================== -->
            <div class="dark-light-main">
                <input id="toggle" class="toggle" type="checkbox">
            </div>
            <!-- ====================================== Dark Light Mode End ===================================== -->

            <?php include 'partial/main.php'; ?>

            <?php include 'partial/about.php'; ?>

            <?php include 'partial/video.php'; ?>
            <?php include 'partial/services.php'; ?>
            <?php include 'partial/resume.php'; ?>
            <?php include 'partial/porfolio.php'; ?>
            <?php include 'partial/testimonial.php'; ?>
            <?php include 'partial/new.php'; ?>
            <?php include 'partial/pricing.php'; ?>
            <?php include 'partial/email.php'; ?>
            <?php include 'partial/contact.php'; ?>
            <?php include 'partial/footer.php'; ?>
           
        </div>

        <!-- ====================================== Bottom To Top Button ===================================== -->
        <button class="bottom-top-button"><i class="fa-sharp fa-solid fa-arrow-up fa-xl"></i></button>
        <!-- ====================================== Bottom To Top Button End ===================================== -->

        <!-- ====================================== Cusrsor ===================================== -->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- ====================================== Cusrsor End ===================================== -->
    </div>

    <script>
        //  menu active button 
        const li = document.querySelectorAll(".menu-btn");
        const sec = document.querySelectorAll(".active_menus");

        function activeMenu() {
            let len = sec.length;
            while (--len && window.scrollY + 97 < sec[len].offsetTop) {}
            li.forEach(ltx => ltx.classList.remove("active"));
            li[len].classList.add("active");
        }
        activeMenu();
        window.addEventListener("scroll", activeMenu);
    </script>
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/jquery/slick.min.js"></script>
    <script src="assets/jquery/aos.js"></script>
    <script src="assets/jquery/plugins.js"></script>
    <script src="assets/jquery/strict.js"></script>
    <script src="assets/jquery/jqueryboost.js"></script>
    <script src="assets/jquery/index.js"></script>
    <script>
        AOS.init({
            duration: 1600,
            container: '.scroll-container',
        })
        $(window).on("scroll", function() {
            AOS.init();
        });
    </script>
</body>
</html>