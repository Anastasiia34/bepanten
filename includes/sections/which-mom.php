<div class="<?php echo $spoPrefix ?>-which-mom">
    <div class="<?php echo $spoPrefix ?>-container">
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/common/nav.php") ?>
        <img src="/<?= $spoPath ?>/src/images/hearts.png">
        <h3>Какая ты мама?</h3>
        <p class="under">Все мамы – разные, но всех объединяет любовь к нашим малышам! Мы подготовили для вас
            познавательный тест, который поможет понять, к какой категории мам вы относитесь и какие подходы к
            материнству вам близки по духу. По результатам теста вы определите свой мамский статус и сможете применить
            его в профиле на Бэбиблоге – украсить своё фото тематической рамочкой. Вы также получите советы по уходу и
            способам развития ребёнка, подборку занятий для малыша, список литературы на тему материнства и воспитания
            детей.</p>
        <div class="balloon1 wow fadeInDown">
            <img src="/<?= $spoPath ?>/src/images/balloon-prize.png">
            <p>10 участников получат призы - сертификаты на 4 000 рублей в OZON!</p>
            <a href="#" class="js-rules">Правила</a>
        </div>
        <div class="test-block">
            <?php if (isset($_GET['login']) && $_GET['login'] == 'no') { ?>
            <div class="question" id="unlogged">
                <img src="/<?= $spoPath ?>/src/images/lock.png">
                <p class="question-text">Чтобы пройти тест, необходимо
                    <a href="#">войти</a> или <a href="#">зарегистрироваться</a></p>
                <p class="fz14">Тест можно проходить неограниченное количество раз, попасть в рейтинг мам можно
                    только при первом прохождении теста.</p>
            </div>
            <?php } else { ?>
            <div class="question" id="question-1">
                <p class="num">1 / 12</p>
                <p class="question-text">Как вы считаете, стоит ли совмещать работу и уход за малышом?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip21.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Комфортная температура воды для купания малыша – 36 градусов.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q1" id="q1-1" class="a">
                    <label for="q1-1">Да, ведь можно на время доверить крошку няне или кому-то из родственников</label>
                    <input type="radio" name="q1" id="q1-2" class="b">
                    <label for="q1-2">Можно начать работать неполный день, когда малыш пойдет в садик</label>
                    <input type="radio" name="q1" id="q1-3" class="c">
                    <label for="q1-3">Я думаю, это довольно затруднительно, стоит как можно дольше уделять все свободное
                        время ребенку.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <?php } ?>
            <div class="question" id="question-2">
                <p class="num">2 / 12</p>
                <p class="question-text">Как вы относитесь к грудному вскармливанию?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip22.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Оптимальное количество пеленок для новорожденного малыша – 20-25 шт.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q2" id="q2-1" class="a">
                    <label for="q2-1">Зависит от ситуации. Если молока достаточно, и маме с малышом комфортно – отлично.
                        Если есть проблемы, нужно консультироваться с педиатром.</label>
                    <input type="radio" name="q2" id="q2-2" class="b">
                    <label for="q2-2"> Я сторонница естественного вскармливания, считаю, что нужно обязательно наладить
                        лактацию.</label>
                    <input type="radio" name="q2" id="q2-3" class="c">
                    <label for="q2-3">ГВ удобнее гораздо, чем кормить из бутылочки, да и полезнее для малыша. </label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-3">
                <p class="num">3 / 12</p>
                <p class="question-text">Хотели бы вы нанять няню для малыша?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip23.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>В уходе за грудью при кормлении используй Бепантен Мазь.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q3" id="q3-1" class="a">
                    <label for="q3-1">Да, но только с отличными рекомендациями и большим опытом</label>
                    <input type="radio" name="q3" id="q3-2" class="b">
                    <label for="q3-2">Я бы хотела, чтобы за ребенком присматривал кто-то из близких людей</label>
                    <input type="radio" name="q3" id="q3-3" class="c">
                    <label for="q3-3">Нет, я хочу сама заниматься развитием малыша, ведь я понимаю его потребности и
                        способности лучше всех</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-4">
                <p class="num">4 / 12</p>
                <p class="question-text">Как вы считаете, нужно ли придерживаться строгого режима дня ребёнка?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip24.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Оптимальная влажность воздуха в комнате новорождённого – 50-70%. </p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q4" id="q4-1" class="a">
                    <label for="q4-1">Да, режим необходимо точно соблюдать.</label>
                    <input type="radio" name="q4" id="q4-2" class="b">
                    <label for="q4-2"> Я считаю, что все должно быть естественно, не обязательно следовать режиму
                        строго.</label>
                    <input type="radio" name="q4" id="q4-3" class="c">
                    <label for="q4-3">Наверное это хорошо, но не всегда возможно реализовать в жизни.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-5">
                <p class="num">5 / 12</p>
                <p class="question-text">Как вы относитесь к идее развития детей с пелёнок?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip25.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>При смене подгузника и после купания рекомендуется устраивать малышу воздушные ванны в
                            течение нескольких минут.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q5" id="q5-1" class="a">
                    <label for="q5-1">Считаю, что с младенчества рановато.</label>
                    <input type="radio" name="q5" id="q5-2">
                    <label for="q5-2">Если малышу нравится, то стоит заниматься.</label>
                    <input type="radio" name="q5" id="q5-3">
                    <label for="q5-3">Положительно. Главное, не перегружать малыша.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-6">
                <p class="num">6 / 12</p>
                <p class="question-text">Представьте, что малыш уже немного подрос и может сам играть на детской
                    площадке. Чем бы в это время занялись вы?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip26.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Во избежание опрелостей используй Бепантен Мазь при каждой смене подгузника.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q6" id="q6-1" class="a">
                    <label for="q6-1">Отдохну на скамеечке, возможно, загляну в смартфон или почитаю журнал. Безусловно,
                        буду за ним присматривать.</label>
                    <input type="radio" name="q6" id="q6-2" class="b">
                    <label for="q6-2">Буду постоянно находиться рядом. Возможно, организую игры на свежем воздухе для
                        него и его друзей.</label>
                    <input type="radio" name="q6" id="q6-3" class="c">
                    <label for="q6-3">ообщаюсь с другими мамами, чтобы обменяться опытом и узнать что-то новое.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-7">
                <p class="num">7 / 12</p>
                <p class="question-text">Вам кажется, что малыш заболел. Как вы поступите?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip27.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>В первый месяц жизни малыш лучше всего видит предметы на расстоянии 20-25 см, поэтому
                            развивающие карточки с картинками должны быть крупные, простые и яркие или черно-белые.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q7" id="q7-1" class="a">
                    <label for="q7-1">Понаблюдаю за его состоянием и, конечно, позвоню доктору. Сразу отменять все свои
                        дела не буду.</label>
                    <input type="radio" name="q7" id="q7-2" class="b">
                    <label for="q7-2">Буду внимательно следить за ним. Поищу в интернете симптомы и попробую понять, что
                        происходит.</label>
                    <input type="radio" name="q7" id="q7-3" class="c">
                    <label for="q7-3">Вызову врача при малейшем подозрении, что что-то не так, и отменю все
                        дела.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-8">
                <p class="num">8 / 12</p>
                <p class="question-text">Как вы поступите, если малыш раскапризничается в общественном месте?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip28.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Температура готовой смеси для кормления ребенка должна быть 36-37 градусов. </p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q8" id="q8-1" class="a">
                    <label for="q8-1">Подожду, пока успокоится. Окружающие должны понять, что он еще младенец и может
                        так себя вести.</label>
                    <input type="radio" name="q8" id="q8-2" class="b">
                    <label for="q8-2">Буду делать все возможное, чтобы он успокоился – разговаривать, отвлекать, качать
                        на ручках.</label>
                    <input type="radio" name="q8" id="q8-3" class="c">
                    <label for="q8-3">Покину с ребенком общественное место. Да и на воздухе, я думаю, быстрее
                        успокоится.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-9">
                <p class="num">9 / 12</p>
                <p class="question-text">Ваша подруга выбрала методику воспитания ребёнка, которую вы считаете в корне
                    неверной. Как вы поступите?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip29.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Купать ребенка с мылом необходимо 2-3 раза в неделю, а в остальное время обходиться
                            водой.</p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q9" id="q9-1" class="a">
                    <label for="q9-1">Укажу на ее ошибки и выскажу свое мнение. Кто, если не я, укажет ей правильный
                        путь?</label>
                    <input type="radio" name="q9" id="q9-2" class="b">
                    <label for="q9-2">Не буду вмешиваться, каждый родитель сам определяет, что для его ребенка
                        лучше.</label>
                    <input type="radio" name="q9" id="q9-3" class="c">
                    <label for="q9-3">Тактично посоветую пересмотреть свое мнения, приведу известные мне
                        аргументы.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-10">
                <p class="num">10 / 12</p>
                <p class="question-text">Как вы считаете, нужно ли баловать детей и избегать категоричных запретов?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip210.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Оптимальная температура для помещения, где спит ребенок – около 20 градусов. </p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q10" id="q10-1" class="a">
                    <label for="q10-1">Без запретов не обойтись, а баловать – только чем-то полезным для него.</label>
                    <input type="radio" name="q10" id="q10-2" class="b">
                    <label for="q10-2">Главное – любовь родителей, а как не баловать своего любимого малыша?</label>
                    <input type="radio" name="q10" id="q10-3" class="c">
                    <label for="q10-3">Запреты важны, но иногда можно расслабиться и немного побаловаться.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-11">
                <p class="num">11 / 12</p>
                <p class="question-text">Чем вы любите заниматься в свободное время?</p>
                <div class="tip">
                    <img src="/<?= $spoPath ?>/src/images/tip211.png" class="tip-img">
                    <p class="pink-btn">Лайфхак</p>
                    <div class="bubble">
                        <p>Обязательно проветривайте комнату перед сном. </p>
                        <img src="/<?= $spoPath ?>/src/images/bubble-arrow.png" class="arrow">
                    </div>
                </div>
                <div class="answers">
                    <input type="radio" name="q11" id="q11-1" class="a">
                    <label for="q11-1">Работа занимает все мое свободное от воспитания малыша время.</label>
                    <input type="radio" name="q11" id="q11-2" class="b">
                    <label for="q11-2">Создавать в доме уют, заниматься своим творческим хобби.</label>
                    <input type="radio" name="q11" id="q11-3" class="c">
                    <label for="q11-3">Стараюсь учиться чему-то новому: смотрю образовательные вебинары, вдохновляюсь
                        чтением книг о детях.</label>
                </div>
                <a href="#" class="pink-btn disabled">Следующий вопрос</a>
            </div>
            <div class="question" id="question-12">
                <div class="imgs">
                    <img src="/<?= $spoPath ?>/src/images/q12-bg.png" class="bg1">
                    <img src="/<?= $spoPath ?>/src/images/load-photo.png" class="load-photo">
                    <img src="/<?= $spoPath ?>/src/images/q12-bg2.png" class="bg2">
                </div>
                <p class="num">12 / 12</p>
                <p class="question-text">Загрузить фото:</p>
                <div class="row">
                    <a href="#">Профиль ББ</a>
                    <label id="inputImageLabel">Выбрать изображение
                        <input id="inputImage" type="file" accept=".jpg,.jpeg,.gif,.png" data-rel="1"
                            class="_recipefile1" />
                    </label>
                    <a href="#" id="inst">Инстаграм</a>
                </div>
                <a href="#" class="pink-btn">Смотреть результат</a>
            </div>
            <div class="question" id="question-inst">
                <p class="title">Имя пользователя в Instagram</p>
                <p class="fz14"> *профиль должен быть открыт</p>
                <div class="input-wrapper not-found">
                    <p class="not-found-text">Профиль не найден</p>
                    <input type="text" placeholder="@">
                </div>
                <a href="#" class="blue-btn">Загрузить фото</a>
                <a href="#" class="pink-btn">← К выбору фото</a>
            </div>
        </div>
        <div class="which-mom-result" id="result1">
            <div class="test-block">
                <div class="imgs">
                    <img src="/<?= $spoPath ?>/src/images/ava1.jpg" class="load-photo">
                    <img src="/<?= $spoPath ?>/src/images/item1-desk.png" class="bg2">
                </div>
                <h2>Деловая мама</h2>
                <p class="under">Вы – ответственная и сознательная мама. Вы получаете удовольствие от того, что всё
                    делаете организованно. Ваша цель – дать малышу все самое лучшее, будь то одежда, образование или
                    уход. При этом вам удается развиваться не только в плане материнства, но и в любимом деле, которое
                    приносит доход. Вы тщательно продумываете свои планы и действия, стремитесь находить компромиссы в
                    самых разных жизненных ситуациях.</p>
                <h3>Возможно, Вам будет интересно изучить такие методики развития, как:</h3>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method1.png">
                    <div class="text">
                        <p>Система Никитиных.</p>
                        <p class="light"> Согласно методике, родители принимают активное участие в занятиях и играх
                            малыша, стимулируя их на самостоятельные решения. Главное правило – не показывать, как надо,
                            а дать малышу самому разобраться в игре и проявить инициативу.</p>
                    </div>
                </div>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method2.png">
                    <div class="text">
                        <p>Логические блоки Дьенеша.</p>
                        <p class="light"> Это 48 геометрических фигур разного размера, объема и цвета. Выполняя с
                            блоками разнообразные предметные действия у детей развивается логическое и аналитическое
                            мышление, творческие способности, а также восприятие, память, внимание и воображение.</p>
                    </div>
                </div>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method3.png">
                    <div class="text">
                        <p>Глена Домана.</p>
                        <p class="light">Цель занятий — познакомить ребенка с множеством систематизированных понятий.
                            Нужно показывать ребенку карточки, на которых размещены изображения предметов, цифры или
                            слова.</p>
                    </div>
                </div>
                <h3>Советуем почитать:</h3>
                <div class="book">
                    <p class="author">Людмила Петрановская</p>
                    «Тайная опора. Привязанность в жизни ребенка», «Если с ребенком трудно», «Большая книга про вас и
                    вашего ребенка», «#Selfmama. Лайфхаки для работающей мамы»
                </div>
                <div class="book">
                    <p class="author">Медина Джон</p>
                    «Правила развития мозга вашего ребенка. Что нужно малышу от 0 до 5 лет, чтобы он вырос умным и
                    счастливым»
                </div>
                <div class="book">
                    <p class="author">Масару Ибука</p>
                    «После трёх уже поздно», «До трех – самое время! 76 советов по раннему воспитанию»
                </div>
                <h3>Чем занять ребенка, если вам нужно срочно поработать:</h3>
                <ol class="todos">
                    <li>Покачать на электрокачелях</li>
                    <li>Положить на развивающий коврик</li>
                    <li>Повесить над кроваткой разноцветные надувные шары</li>
                    <li>Дать конструктор для самых маленьких</li>
                    <li>Помять пальчиками соленое тесто</li>
                    <li>Поиграть в новые игрушки по возрасту</li>
                    <li>Слушать детские песенки</li>
                    <li>Позаниматься с бизибордом</li>
                    <li>Дать ребенку книжки с яркими иллюстрациями</li>
                </ol>
                <p class="foot-note">*Наши советы носят рекомендательный характер. Решение о соответствии игры возрасту
                    ребенка принимает родитель. Все игры рекомендуется проводить под наблюдением родителя.</p>
            </div>
            <div class="<?php echo $spoPrefix ?>-moms-stories">
                <div class="title">Прочитайте историю деловой мамы</div>
                <div class="item">
                    <img src="/<?= $spoPath ?>/src/images/ava1.jpg" class="ava">
                    <a href="https://www.instagram.com/malina_viva/" class="name">Наталья</a>
                    <h2>Деловая мама</h2>
                    <p class="text">Расскажет о том, как быть заботливой мамой и продолжать работать, находясь в декрете.</p>
                    <a href="http://spo.testbb.ru/spo/2019/bepanten-2/story.php?page=1" class="pink-btn">Читать</a>
                </div>
            </div>
        </div>
        <div class="which-mom-result" id="result2">
            <div class="test-block">
                <div class="imgs">
                    <img src="/<?= $spoPath ?>/src/images/ava1.jpg" class="load-photo">
                    <img src="/<?= $spoPath ?>/src/images/q12-bg2.png" class="bg2">
                </div>
                <h2>Творческая мама</h2>
                <p class="under">Вы – сторонница естественного родительства. Вы спокойно относитесь к капризам
                    малютки, кризисам взросления и методикам воспитания. Ваш девиз – присматривай за ребенком, но не
                    мешай ему самореализовываться. Вас не пугают краска на обоях и раскиданные игрушки, ведь
                    посредством творческих занятий малыш раскрывает свой потенциал. Вы не считаете, что уход за
                    малышом влечет ограничение вашей свободы, вам удается оставаться активной и целеустремленной
                    мамой даже в декрете!</p>
                <h3>Советуем почитать:</h3>
                <div class="book">
                    <p class="author">Мусихин Александр</p>
                    «Воспитание детей без криков, угроз, наказаний и истерик»
                </div>
                <div class="book">
                    <p class="author">Галина Чумакова, Павел Сидоров, Евгения Щукина</p>
                    «Перинатальная психология»
                </div>
                <div class="book">
                    <p class="author">Гиппенрейтер Юлия</p>
                    «Самая важная книга для родителей», «Как общаться с ребенком?»
                </div>
                <h3>Возможно, Вам будет интересно изучить такие методики развития, как:</h3>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method1.png">
                    <div class="text">
                        <p>Марии Монтессори.</p>
                        <p class="light"> Принцип методики – следуем за ребенком и помогаем ему делать всё самому.
                            Нужно грамотно организовать пространство и обеспечить ребенка разными по текстуре
                            игрушками и материалами для развития. При этом ребенку предоставляется полная свобода
                            выбора: он сам выбирает то, с чем хочет играть, поэтому фактически развивается
                            самостоятельно — родитель только немного направляет.</p>
                    </div>
                </div>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method2.png">
                    <div class="text">
                        <p>Вальдорфская методика.</p>
                        <p class="light"> Упор делается на развитие эстетических и практических навыков и знаний об
                            окружающем мире, а не на развитие интеллектуальных способностей. Занятия проводятся в
                            разновозрастных мини-группах, но малыш может в любой момент отказаться что-либо делать,
                            если не хочет.</p>
                    </div>
                </div>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method3.png">
                    <div class="text">
                        <p>Екатерины и Сергея Железновых.</p>
                        <p class="light">Методика раннего музыкального развития «Музыка с мамой». В репертуаре
                            Железновых есть диски с колыбельными, песенками-потешками, пальчиковыми играми,
                            подвижными играми, песенками-инсценировками, подражательными играми и многое другое.</p>
                    </div>
                </div>
                <h3>Варианты творческих занятий для мамы и малыша: </h3>
                <ol class="todos">
                    <li>Лепка из соленого теста</li>
                    <li>Игра с развивающим ковриком</li>
                    <li>Сборка пирамидки</li>
                    <li>Чтение книг с яркими иллюстрациями</li>
                    <li>Создание простых аппликаций </li>
                    <li>Рассказать ребенку стишки или спеть песенки</li>
                    <li>Игра на игрушечном ксилофоне</li>
                    <li>Пальчиковый театр</li>
                    <li>Игры с предметами разной формы и текстуры</li>
                </ol>
                <p class="foot-note">*Наши советы носят рекомендательный характер. Решение о соответствии игры возрасту
                    ребенка принимает родитель. Все игры рекомендуется проводить под наблюдением родителя.</p>

            </div>
            <div class="<?php echo $spoPrefix ?>-moms-stories">
                <div class="title">Прочитайте историю творческой мамы</div>
                <div class="item">
                    <img src="/<?= $spoPath ?>/src/images/ava2.jpg" class="ava">
                    <a href="https://www.babyblog.ru/user/lenta/Jill1988" class="name">Юлия</a>
                    <h2>Творческая мама</h2>
                    <p class="text">Расскажет о том, что для нее – естественное материнство, как она ухаживает за детьми и как ей удается сделать воспитание детей необременительным. </p>
                    <a href="http://spo.testbb.ru/spo/2019/bepanten-2/story.php?page=2" class="pink-btn">Читать</a>
                </div>
            </div>
        </div>
        <div class="which-mom-result" id="result3">
            <div class="test-block">
                <div class="imgs">
                    <img src="/<?= $spoPath ?>/src/images/ava1.jpg" class="load-photo">
                    <img src="/<?= $spoPath ?>/src/images/item3-desk.png" class="bg2">
                </div>
                <h2>Мама-исследователь</h2>
                <p class="under">Вам нравится учиться новому, обретать бесценный опыт материнства. Вам приносят
                    удовольствие общение с малышом, совместные прогулки, игры. Наблюдение за его развитием и новыми
                    достижениями интереснее, чем сериалы. Вы находитесь в постоянном поиске новых методик развития,
                    полезных игрушек, не боитесь экспериментов. Воспитание малыша для вас – увлекательное и важное
                    занятие, которое никогда не надоест. </p>
                <h3>Советуем почитать:</h3>
                <div class="book">
                    <p class="author">Комаровский Евгений</p>
                    «Начало жизни», «Здоровье ребенка и здравый смысл его родственников»
                </div>
                <div class="book">
                    <p class="author">Трейси Хогг, Мелинда Блау</p>
                    «Чего хочет ваш малыш»
                </div>
                <div class="book">
                    <p class="author">Евгения Белонощенко</p>
                    «Рожденные с характером»
                </div>
                <h3>Возможно, Вам будет интересно изучить такие методики развития, как:</h3>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method1.png">
                    <div class="text">
                        <p>Сесиль Лупан.</p>
                        <p class="light">Методика рекомендует быть с ребенком «на одной волне», давая ему то, в чем в
                            данный момент он больше всего нуждается: отдохнуть, погулять, поиграть или чему-то
                            научиться. Автор разработала систему игр и упражнений, направленных на естественное и
                            разностороннее развитие детей</p>
                    </div>
                </div>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method2.png">
                    <div class="text">
                        <p>Вячеслава Воскобовича.</p>
                        <p class="light">Это конструкторы и головоломки, которые сопровождаются сказочными сюжетами.
                            Ребенок не просто играет с пособиями, а помогает маленькому герою достичь его целей. Среди
                            ассортимента игр есть те, что направлены на обучение буквам, чтению, счету и т.п.</p>
                    </div>
                </div>
                <div class="method">
                    <img src="/<?= $spoPath ?>/src/images/method3.png">
                    <div class="text">
                        <p>Николая Зайцева.</p>
                        <p class="light">Методика следует принципу, что обучаться чтению с пением гораздо эффективнее.
                            Для занятий нужны кубики Зайцева, настенные таблицы, диски с попевками. На начальном этапе
                            ребенок будет составлять из кубиков близкие ему слова: мама, папа, каша, дом, а уж только
                            потом учиться их читать, вернее пропевать.</p>
                    </div>
                </div>
                <h3>Игрушки и развивашки, которые можно взять с собой в путешествие с ребенком, чтобы занять его в
                    транспорте:</h3>
                <ol class="todos">
                    <li>Погремушки</li>
                    <li>Сортер</li>
                    <li>Развивающий модуль (коврик)</li>
                    <li>Массажные мячики</li>
                    <li>Книжка с яркими иллюстрациями</li>
                    <li>Наклейки</li>
                    <li>Пальчиковый театр</li>
                    <li>Игры-шнуровки</li>
                    <li>Игрушечный планшет с песнями и сказками</li>
                </ol>
                <p class="foot-note">*Наши советы носят рекомендательный характер. Решение о соответствии игры возрасту
                    ребенка принимает родитель. Все игры рекомендуется проводить под наблюдением родителя.</p>
            </div>
            <div class="<?php echo $spoPrefix ?>-moms-stories">
                <div class="title">Прочитайте историю мамы-исследователя</div>
                <div class="item">
                    <img src="/<?= $spoPath ?>/src/images/ava3.jpg" class="ava" style="object-position: 15% 50%;">
                    <a href="https://www.babyblog.ru/user/lenta/id1290579" class="name">Ирина</a>
                    <h2>Мама-исследователь</h2>
                    <p class="text">Расскажет о том, как комфортно путешествовать с двумя детьми.</p>
                    <a href="http://spo.testbb.ru/spo/2019/bepanten-2/story.php?page=3" class="pink-btn">Читать</a>
                </div>
            </div>
        </div>
    </div>
    <img src="/<?= $spoPath ?>/src/images/balloon2.png" class="balloon2 wow fadeInDown">
</div>
<script>
    new WOW().init();
    $(document).ready(function () {
        if ($(window).width() <= 750) {
            $('.wow').removeClass("wow fadeInDown fadeInLeft")
        }
    });
    $('.<?php echo $spoPrefix ?>-which-mom label').click(function () {
        $(this).parent().siblings('.pink-btn').removeClass('disabled')
    })

    function showResult() {
        var aAnswers = $('.<?php echo $spoPrefix ?>-which-mom input.a:checked').length
        var bAnswers = $('.<?php echo $spoPrefix ?>-which-mom input.b:checked').length
        var cAnswers = $('.<?php echo $spoPrefix ?>-which-mom input.c:checked').length
        $('.<?php echo $spoPrefix ?>-which-mom .question').hide();
        if (aAnswers > bAnswers && aAnswers > cAnswers) {
            $('.<?php echo $spoPrefix ?>-which-mom #result1').show();
        } else if (bAnswers > aAnswers && bAnswers > cAnswers) {
            $('.<?php echo $spoPrefix ?>-which-mom #result2').show();
            $('.<?php echo $spoPrefix ?>-participants .menu .item').removeClass('active');
            $('.<?php echo $spoPrefix ?>-participants .menu .item:nth-child(2)').addClass('active');
            $('.<?php echo $spoPrefix ?>-participants .part').hide();
            $('.<?php echo $spoPrefix ?>-participants #part2').show();
        } else {
            $('.<?php echo $spoPrefix ?>-which-mom #result3').show();
            $('.<?php echo $spoPrefix ?>-participants .menu .item').removeClass('active');
            $('.<?php echo $spoPrefix ?>-participants .menu .item:nth-child(3)').addClass('active');
            $('.<?php echo $spoPrefix ?>-participants .part').hide();
            $('.<?php echo $spoPrefix ?>-participants #part3').show();
        }
    }
    $('.<?php echo $spoPrefix ?>-which-mom .pink-btn').click(function (e) {
        e.preventDefault();
        if ($(this).parent('#question-12').length) {
            showResult()
        } else {
            let nextQuestion = parseInt($(this).parent().attr('id').slice(9)) + 1;
            $('.<?php echo $spoPrefix ?>-which-mom .question').hide();
            $('.<?php echo $spoPrefix ?>-which-mom #question-' + nextQuestion).show()
        }
    })
    $(window).click(function () {
        $('.bubble').css('opacity', '0');
    });
    $('.tip').click(function () {
        event.stopPropagation();
        $(this).children('.bubble').css('opacity', '1');
    })
    $('#inst').click(function () {
        $('.<?php echo $spoPrefix ?>-which-mom .question').hide();
        $('.<?php echo $spoPrefix ?>-which-mom #question-inst').show();
    })
    $('.<?php echo $spoPrefix ?>-which-mom #question-inst .pink-btn').click(function () {
        showResult()
    })
</script>