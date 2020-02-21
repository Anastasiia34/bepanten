<?php
$spoPrefix = "bep-2";
$title = "Bepanten";
$spoPath = "spo/2019/bepanten-2";
$htmlClass = "";
$bodyClass = "bb-adaptive";
$css = array(
	"/$spoPath/css/style.css",
//	"/$spoPath/css/assets/owl.carousel.css",
);
$script = array(
	"/$spoPath/js/respond.min.js",
    "/$spoPath/js/modernizr.min.js",
//	"/$spoPath/js/current-device.min.js",
    "/$spoPath/js/maskedinput.js",
    "/$spoPath/js/perfect-scrollbar.jquery.js",
//	"/$spoPath/js/owl.carousel.min.js",
    "/$spoPath/js/wow.min.js",
);
include($_SERVER['DOCUMENT_ROOT']."/core/includes/headers.php") ?>

    <!-- -->
<?php include($_SERVER['DOCUMENT_ROOT']."/core/includes/header/2019.php") ?>
    <!-- -->

<section class="<?php echo $spoPrefix ?>-main">

        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/stories.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/about.php") ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/elements/modals.php") ?>

</section>

</body>
</html>
