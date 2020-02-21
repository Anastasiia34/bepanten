<div class="<?php echo $spoPrefix ?>-stories">
    <div class="<?php echo $spoPrefix ?>-container">
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/common/nav.php") ?>
        <img src="/<?= $spoPath ?>/src/images/hearts.png" class="hearts">
        <p class="fz22">Все мы разные, но нас объединяет одно — <br> любовь к своему малышу.</p>
        <div class="show-full-btn">
            <p>Развернуть</p>
            <img src="/<?= $spoPath ?>/src/images/show-full.png">
        </div>
        <div class="show-full">
            <p>У нас может быть разный вкус, увлечения, цели, но все мы мамы и мы заодно — за лучшее для своего ребенка. Мы
                по-своему поддерживаем трепетную и нежную связь, наполненную материнской любовью и заботой. И все одинаково
                хотим сохранить ее.</p>
            <p>Как средство, которому доверяют миллионы мам<sup>2</sup>, Бепантен предлагает вам самим узнать, каким разным может быть
                материнство. Пройдите вместе с разными мамами через их настоящие истории, в которых они поделились своими трудностями и радостями. Узнайте, к какому типу мам вы относитесь. А если вы совсем недавно стали или еще
                готовитесь стать мамой, Бепантен поможет быстро освоиться в сообществе мам.</p>
        </div>
        <h3>True Story Блогеров</h3>
        <p class="tag fz22">#МамыЗаОдно</p>
        <p> Мы собрали для вас трогательные истории мам-блогеров с самими разными взглядами на жизнь и материнство. <span class="hide-mob">Узнайте
            всю правду о том, как им удается быть хорошими мамами и счастливыми женщинами!</span></p>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/common/moms-stories.php") ?>
        <div class="show-mob">
            <img src="/<?= $spoPath ?>/src/images/balloon2.png" class="balloon2-mob">
            <p class="tag fz22">#МамыЗаОдно</p>
            <p>Узнайте всю правду о том, как им удается быть хорошими мамами и счастливыми женщинами!</p>
        </div>
    </div>
    <img src="/<?= $spoPath ?>/src/images/balloon1.png" class="balloon1 wow fadeInDown">
    <img src="/<?= $spoPath ?>/src/images/balloon2.png" class="balloon2 wow fadeInDown">
</div>
<script>
    new WOW().init();
    $( document ).ready(function() {
        if($(window).width() <= 750) {
            $('.wow').removeClass("wow fadeInDown fadeInLeft")
        }
    });
    $('.show-full-btn').click(function(){
        $(this).hide();
        $('.show-full').slideDown();
    })
</script>