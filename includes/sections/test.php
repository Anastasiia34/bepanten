<div class="<?php echo $spoPrefix ?>-test">
    <div class="<?php echo $spoPrefix ?>-container">
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/common/nav.php") ?>
        <img src="/<?= $spoPath ?>/src/images/hearts.png">
        <h3>Проверь свои знания <br>
            «мамского» языка</h3>
        <p class="under">В мире мам есть свой язык, сложенный из сокращений, милых прозвищ, названий аксессуаров и
            многих других словечек. Если вы – мама-новичок, некоторые из этих терминов могут вызывать у вас недоумение.
            Оцените свой уровень владения «мамским» языком с помощью теста и восполните имеющиеся пробелы! Загляните в
            виртуальный справочник «Маматека», чтобы быстрее освоиться в новой для вас роли мамы и узнать значение пока
            еще незнакомых слов.</p>
        <img src="/<?= $spoPath ?>/src/images/balloon2.png" class="balloon2 wow fadeInDown">
        <div class="test-block">
            <div class="question" id="question-1">
                <p class="num">1 / 7</p>
                <p class="question-text">Что такое пестушки?</p>
                <div class="answers">
                    <input type="radio" name="q1" id="q1-1">
                    <label for="q1-1">Петушки на палочке</label>
                    <input type="radio" name="q1" id="q1-2" class="true">
                    <label for="q1-2">Стишки и песенки</label>
                    <input type="radio" name="q1" id="q1-3">
                    <label for="q1-3">Макароны</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-2">
                <p class="num">2 / 7</p>
                <p class="question-text">Бэбиситтер это:</p>
                <div class="answers">
                    <input type="radio" name="q2" id="q2-1" class="true">
                    <label for="q2-1">Няня</label>
                    <input type="radio" name="q2" id="q2-2">
                    <label for="q2-2">Кресло для ребенка</label>
                    <input type="radio" name="q2" id="q2-3">
                    <label for="q2-3">Рюкзак</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-3">
                <p class="num">3 / 7</p>
                <p class="question-text">Что такое «Белый шум»?</p>
                <div class="answers">
                    <input type="radio" name="q3" id="q3-1" class="true">
                    <label for="q3-1">Монотонный звук</label>
                    <input type="radio" name="q3" id="q3-2">
                    <label for="q3-2">Плач младенца</label>
                    <input type="radio" name="q3" id="q3-3">
                    <label for="q3-3">Методика развития</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-4">
                <p class="num">4 / 7</p>
                <p class="question-text">Что такое опрелости?</p>
                <div class="answers">
                    <input type="radio" name="q4" id="q4-1">
                    <label for="q4-1">Испорченные продукты</label>
                    <input type="radio" name="q4" id="q4-2">
                    <label for="q4-2">Погремушки</label>
                    <input type="radio" name="q4" id="q4-3" class="true">
                    <label for="q4-3">Раздражение кожи</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-5">
                <p class="num">5 / 7</p>
                <p class="question-text">Провитамин В5 также называют:</p>
                <div class="answers">
                    <input type="radio" name="q5" id="q5-1" class="true">
                    <label for="q5-1">Витамин для кожи</label>
                    <input type="radio" name="q5" id="q5-2">
                    <label for="q5-2">Витамин для глаз</label>
                    <input type="radio" name="q5" id="q5-3">
                    <label for="q5-3">Витамин для интеллекта</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-6">
                <p class="num">6 / 7</p>
                <p class="question-text">Что такое тайм-аут?</p>
                <div class="answers">
                    <input type="radio" name="q6" id="q6-1">
                    <label for="q6-1">Дневной сон</label>
                    <input type="radio" name="q6" id="q6-2">
                    <label for="q6-2">Опоздание в развитии</label>
                    <input type="radio" name="q6" id="q6-3" class="true">
                    <label for="q6-3">Метод дисциплинирования детей</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-7">
                <p class="num">7 / 7</p>
                <p class="question-text">Что записывают в метрике?</p>
                <div class="answers">
                    <input type="radio" name="q7" id="q7-1">
                    <label for="q7-1">Достижения ребенка</label>
                    <input type="radio" name="q7" id="q7-2" class="true">
                    <label for="q7-2">Рост, вес, дату рождения </label>
                    <input type="radio" name="q7" id="q7-3">
                    <label for="q7-3">Количество шагов</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="result">
                <h3></h3>
                <p class="text"></p>
            </div>
        </div>
    </div>
    <img src="/<?= $spoPath ?>/src/images/balloon1.png" class="balloon1 wow fadeInDown">
</div>
<script>
    new WOW().init();
    $( document ).ready(function() {
        if($(window).width() <= 750) {
            $('.wow').removeClass("wow fadeInDown fadeInLeft")
        }
    });
    $('.<?php echo $spoPrefix ?>-test label').click(function(){
        $(this).parent().siblings('.pink-btn').removeClass('disabled')
    })
    $('.<?php echo $spoPrefix ?>-test .pink-btn').click(function(e){
        e.preventDefault();
        if ($(this).parent('#question-7').length){
            $('.<?php echo $spoPrefix ?>-test .question').hide();
            $('.<?php echo $spoPrefix ?>-test .result').show();
            if($('.<?php echo $spoPrefix ?>-test input.true:checked').length >= 5){
                $('.<?php echo $spoPrefix ?>-test .result h3').text('Опытная мама');
                $('.<?php echo $spoPrefix ?>-test .result .text').text('Вы уверенно разговариваете на языке мам и чувствуете себя в сообществе единомышленниц как рыба в воде. Делитесь своим словарным запасом – оставляйте новые словечки, которых нет в нашем словаре, в комментариях. Составим полный список слов вместе!');
            } else if($('.<?php echo $spoPrefix ?>-test input.true:checked').length <= 2){
                $('.<?php echo $spoPrefix ?>-test .result h3').text('Мама-новичок');
                $('.<?php echo $spoPrefix ?>-test .result .text').text('Вы только изучаете язык мам и многие выражения вам пока не знакомы. Читайте наш справочник мамских терминов и узнаете много новых выражений, которые вам обязательно пригодятся!');
            } else{
                $('.<?php echo $spoPrefix ?>-test .result h3').text('Продвинутая мама');
                $('.<?php echo $spoPrefix ?>-test .result .text').text('Вы достаточно хорошо владеете языком мам, но некоторые выражения вам еще не знакомы. Изучите подробнее наш словарь «Маматека», чтобы узнать значение новых для вас слов. А может, вы знаете термины, которых нет в нашем списке? Делитесь опытом в комментариях!');
            }
        }else{
            let nextQuestion = parseInt($(this).parent().attr('id').slice(9)) + 1;
            $('.<?php echo $spoPrefix ?>-test .question').hide();
            $('.<?php echo $spoPrefix ?>-test #question-' + nextQuestion).show()
        }
    })
</script>