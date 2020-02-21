<a href="https://www.bepanthen.ru/preparaty/deti/bepanthen-maz-ot-oprelostej/" class="logo" target="_blank">
    <img src="/<?= $spoPath ?>/src/images/logo.svg">
</a>
<a href="#" class="bayer" target="_blank">
    <img src="/<?= $spoPath ?>/src/images/bayer-white.png">
</a>
<div class="nav">
    <a href="#">True story</a>
    <a href="#" class="active">Маматека</a>
    <a href="#">Мамаметр</a>
</div>
<a href="javascript:" id="return-to-top">
    <img src="/<?= $spoPath ?>/src/images/scrolltop.png">
</a>
<script>
    // ===== Scroll to Top ==== 
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });
</script>