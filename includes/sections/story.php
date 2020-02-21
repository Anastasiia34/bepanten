<?php
    $t = isset($_GET['page']) ? $_GET['page'] : '1';
    include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/story/$t.php")
?>
<script>
    new WOW().init();
    $(window).click(function() {
        $('.bubble').css('opacity', '0');
    });
    $('.tip').click(function(){
        event.stopPropagation();
        $(this).children('.bubble').css('opacity', '1');
    })
    $( document ).ready(function() {
        if($(window).width() <= 750) {
            $('.wow').removeClass("wow fadeInDown fadeInLeft")
        }
    });
</script>