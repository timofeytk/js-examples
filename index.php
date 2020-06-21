<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Квиз
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="full">
    <!-- test -->
    <div class="test" id="test">
        <div class="container">
            <div class="test__content">
                <div class="test__head">
                    <div class="title-wrap title-margin-larg">
                        <h2 class="test__title">
                            Ответьте на 7 вопросов<br>
                        </h2>
                    </div>
                    <div class="progress__title progress__title-top">
                        Расчет пройден на <span class="procent">14%</span>
                    </div>
                    <div class="test-item__progress">
                        <div class="test__visual">
                            <div class="test-circle test-circle-0 test-circle-active">
                            </div>
                            <div class="test-block test-block-0">
                            </div>
                            <div class="test-circle test-circle-1 ">
                            </div>
                            <div class="test-block test-block-1">
                            </div>
                            <div class="test-circle test-circle-2">
                            </div>
                            <div class="test-block test-block-2">
                            </div>
                            <div class="test-circle test-circle-3">
                            </div>
                            <div class="test-block test-block-3">
                            </div>
                            <div class="test-circle test-circle-4">
                            </div>
                            <div class="test-block test-block-4">
                            </div>
                            <div class="test-circle test-circle-5">
                            </div>
                            <div class="test-block test-block-5">
                            </div>
                            <div class="test-circle test-circle-6">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="test-slider__wrap">
                    <form action="#" id="testForm" class="test-form" method="POST">
                        <input type="hidden" name="formname" value="test">
                        <div class="test-slider">
                            <!-- 1 -->
                            <div class="test-slider__item">
                                <div class="progress__title">
                                    Вопрос 1 из 7
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        Где Вы планируете делать ремонт?
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1">
                                    <!-- 1 -->
                                    <label for="qw1-1" class="label-qw1">
<span class="label-qw1-img"
      style="background:url(img/img_01.jpg) no-repeat center;background-size:cover">
</span>
                                        <span class="checkbox-wrap test-question__checkbox">
<input type="radio" id="qw1-1" class="radio-btn checkbox-inp" value="Новостройка" name="qw1">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Новостройка
</span>
</span>
                                    </label>
                                    <!-- 2 -->
                                    <label for="qw1-2" class="label-qw1">
<span class="label-qw1-img"
      style="background:url(img/img_02.jpg) no-repeat center;background-size:cover">
</span>
                                        <span class="checkbox-wrap test-question__checkbox">
<input type="radio" id="qw1-2" class="radio-btn checkbox-inp" value="Вторичка" name="qw1">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Вторичка
</span>
</span>
                                    </label>
                                    <!-- 3 -->
                                    <label for="qw1-3" class="label-qw1">
<span class="label-qw1-img"
      style="background:url(img/img_03.jpg) no-repeat center;background-size:cover">
</span>
                                        <span class="checkbox-wrap test-question__checkbox">
<input type="radio" id="qw1-3" class="radio-btn checkbox-inp" value="Частный дом" name="qw1">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Частный дом
</span>
</span>
                                    </label>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="test-slider__item" style="display: none;">
                                <div class="progress__title">
                                    Вопрос 2 из 7
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        Укажите помещения в которых нужен ремонт?
                                        <div class="progress__title sub-desc">
                                            (можно выбрать несколько вариантов)
                                        </div>
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1">
                                    <!-- 1 -->
                                    <label for="qw2-1" class="label-qw1 label-qw2"
                                           style="background:url(img/img_04.jpg) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-1" class="radio-btn checkbox-inp" value="Вся квартира / дом" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="img/img_01.jpg" alt="">
</span>
</span>
Вся квартира / дом
</span>
</span>
                                    </label>
                                    <!-- 2 -->
                                    <label for="qw2-2" class="label-qw1 label-qw2"
                                           style="background:url(img/img_05.jpg) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-2" class="radio-btn checkbox-inp" value="Комнаты / зал" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="img/img_01.jpg" alt="">
</span>
</span>
Комнаты / зал
</span>
</span>
                                    </label>
                                    <!-- 3 -->
                                    <label for="qw2-3" class="label-qw1 label-qw2"
                                           style="background:url(img/img_06.jpg) no-repeat left 2vw bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-3" class="radio-btn checkbox-inp" value="Ванная / туалет" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="img/img_02.jpg" alt="">
</span>
</span>
Ванная / туалет
</span>
</span>
                                    </label>
                                    <!-- 4 -->
                                    <label for="qw2-4" class="label-qw1 label-qw2"
                                           style="background:url(img/img_07.jpg) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-4" class="radio-btn checkbox-inp" value="Кухня" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="img/img_03.jpg" alt="">
</span>
</span>
Кухня
</span>
</span>
                                    </label>
                                    <!-- 5 -->
                                    <label for="qw2-5" class="label-qw1 label-qw2"
                                           style="background:url(img/img_07.jpg) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-5" class="radio-btn checkbox-inp" value="Коридор" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="img/img_01.jpg" alt="">
</span>
</span>
Коридор
</span>
</span>
                                    </label>
                                    <!-- 6 -->
                                    <label for="qw2-6" class="label-qw1 label-qw2"
                                           style="background:url(img/img_08.jpg) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-6" class="radio-btn checkbox-inp" value="Другое" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="img/img_01.jpg" alt="">
</span>
</span>
Другое
</span>
</span>
                                    </label>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="test-slider__item no-focus" style="display: none;">
                                <div class="progress__title">
                                    Вопрос 3 из 7
                                </div>
                                <div class="test-slider-qw-3">
                                    <div class="qw-3-item">
                                        <div class="title-margin-sm">
                                            <h3 class="descr-test">
                                                Введите площадь помещения </h3>
                                        </div>
                                        <div class="qw-3-item-block">
                                            <div class="qw3-text qw-i-jq">
                                                <span class="qw3-text-title">Вся квартира / дом</span>
                                                <input type="number" name="qw3-1" class="input inp-qw-3"
                                                       placeholder="123">
                                                <span>м2</span>
                                            </div>
                                            <div class="qw3-text qw-i-jq">
                                                <span class="qw3-text-title">Комнаты / зал</span>
                                                <input type="number" name="qw3-2" class="input inp-qw-3"
                                                       placeholder="123">
                                                <span>м2</span>
                                            </div>
                                            <div class="qw3-text qw-i-jq">
                                                <span class="qw3-text-title">Ванная / туалет</span>
                                                <input type="number" name="qw3-3" class="input inp-qw-3"
                                                       placeholder="123">
                                                <span>м2</span>
                                            </div>
                                            <div class="qw3-text qw-i-jq">
                                                <span class="qw3-text-title">Кухня</span>
                                                <input type="number" name="qw3-4" class="input inp-qw-3"
                                                       placeholder="123">
                                                <span>м2</span>
                                            </div>
                                            <div class="qw3-text qw-i-jq">
                                                <span class="qw3-text-title">Коридор</span>
                                                <input type="number" name="qw3-5" class="input inp-qw-3"
                                                       placeholder="123">
                                                <span>м2</span>
                                            </div>
                                            <div class="qw3-text qw-i-jq">
                                                <span class="qw3-text-title">Другое</span>
                                                <input type="number" name="qw3-6" class="input inp-qw-3"
                                                       placeholder="123">
                                                <span>м2</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qw-3-circle">
                                        ИЛИ
                                    </div>
                                    <div class="qw-3-item">
                                        <div class="title-margin-sm">
                                            <h3 class="descr-test">
                                                Прикрепите планировку
                                                Вашей квартиры </h3>
                                        </div>
                                        <img src="img/img_01.jpg" alt=""
                                             class="plan">
                                        <div class="test-inp">
                                            <div class="test-file-wrap">
                                                <input type="file" id="file" class="input inp-hiden" name="userfile[]"
                                                       accept="image/*">
                                                <div class="file-link" id="file-name">
                                                    Выберите файл
                                                </div>
                                                <label for="file" class="file-btn">ВЫБРАТЬ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="test-slider__item" style="display: none;">
                                <div class="progress__title">
                                    Вопрос 4 из 7
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        Какой тип ремонта Вам нужен?
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1">
                                    <!-- 1 -->
                                    <span class="label-qw1 label-qw4">
<label for="qw4-1" class="label-qw1-img"
       style="background:url(img/img_09.jpg) no-repeat center;background-size:cover">
</label>
<span class="qw-t-wrap"><span class="qw-t">
<img src="img/img_01.jpg" alt="">
<span class="tooltip-test">
<span class="t-title">
</span>
<span class="t-title">
<span>
Что включает в себя <br>
косметический ремонт:	</span>
</span>
<ul class="list-t">
<li> Частичная либо полная замена или обновление финишных материалов стен, пола, потолков без их предварительной подготовки, не затрагивая инженерных коммуникаций и (не меняя конструктивных решений помещения).</li>

</ul>
</span>
</span>
</span>
<label for="qw4-1" class="checkbox-wrap test-question__checkbox">
<input type="radio" id="qw4-1" class="radio-btn checkbox-inp" value="Косметический" name="qw4">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Косметический
</span>
</label>
</span>
                                    <!-- 2 -->
                                    <span class="label-qw1 label-qw4">
<label for="qw4-2" class="label-qw1-img"
       style="background:url(img/img_10.jpg) no-repeat center;background-size:cover">
</label>
<span class="qw-t-wrap"><span class="qw-t">
<img src="img/img_01.jpg" alt="">
<span class="tooltip-test">
<span class="t-title">
</span>
<span class="t-title">
<span>
Что включает в себя<br>	капитальный ремонт:
</span>
</span>
<ul class="list-t">
<li> Полный цикл ремонтно-отделочных работ (от демонтажа до чистовой навески приборов), включая замену либо ремонт инженерных коммуникаций, с возможной перепланировкой помещений.</li>
</ul>
</span>
</span>
</span>
<label for="qw4-2" class="checkbox-wrap test-question__checkbox">
<input type="radio" id="qw4-2" class="radio-btn checkbox-inp" value="Капитальный" name="qw4">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Капитальный
</span>
</label>
</span>
                                    <!-- 3 -->
                                    <span class="label-qw1 label-qw4">
<label for="qw4-3" class="label-qw1-img"
       style="background:url(img/img_11.jpg) no-repeat center;background-size:cover">
</label>
<span class="qw-t-wrap"><span class="qw-t">
<img src="img/img_01.jpg" alt="">
<span class="tooltip-test">
<span class="t-title">
</span>
<span class="t-title">
<span>
Что включает в себя <br>	дизайнерский ремонт:
</span>
</span>
<ul class="list-t">

<li> Полный цикл ремонтно-отделочных работ (от демонтажа до чистовой навески приборов), включая полную замену инженерных коммуникаций, с перепланировкой помещений и набором сложных конструктивных элементов, с использованием эксклюзивных отделочных материалов.</li>

</ul>
</span>
</span>
</span>
<label for="qw4-3" class="checkbox-wrap test-question__checkbox">
<input type="radio" id="qw4-3" class="radio-btn checkbox-inp" value="Дизайнерский" name="qw4">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Дизайнерский
</span>
</label>
</span>
                                </div>
                            </div>
                            <!-- 5 -->
                            <div class="test-slider__item" style="display: none;">
                                <div class="progress__title">
                                    Вопрос 5 из 7
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        У вас уже есть дизайн-проект?
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1 test-slider-qw-5">
                                    <div class="test-slider-qw-5-img">
                                        <img src="img/img_01.jpg" alt="">
                                    </div>
                                    <div class="test-slider-qw-5-list">
                                        <label for="qw5-1" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw5-1" class="radio-btn checkbox-inp"
                                                   value="Да, есть" name="qw5">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Да, есть
</span>
                                        </label>
                                        <label for="qw5-2" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw5-2" class="radio-btn checkbox-inp"
                                                   value="Нет, и не будет" name="qw5">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Нет, и не будет
</span>
                                        </label>
                                        <label for="qw5-3" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw5-3" class="radio-btn checkbox-inp"
                                                   value="Планирую заказать" name="qw5">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Планирую заказать
</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- 6 -->
                            <div class="test-slider__item" style="display: none;">
                                <div class="progress__title">
                                    Вопрос 6 из 7
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        Как скоро Вам необходимо приступить к ремонту?
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1 test-slider-qw-5">
                                    <div class="test-slider-qw-6-img">
                                        <img src="img/img_01.jpg" alt="">
                                    </div>
                                    <div class="test-slider-qw-6-list">
                                        <label for="qw6-1" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw6-1" class="radio-btn checkbox-inp"
                                                   value="Посчитать отдельно материалы и работу" name="qw6">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
В течение недели
</span>
                                        </label>
                                        <label for="qw6-2" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw6-2" class="radio-btn checkbox-inp"
                                                   value="Без материалов, купите их самостоятельно" name="qw6">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
В течение месяца
</span>
                                        </label>
                                        <label for="qw6-3" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw6-3" class="radio-btn checkbox-inp"
                                                   value="Посчитать полностью под ключ" name="qw6">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Все зависит от цены
</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- 7 -->
                            <div class="test-slider__item" style="display: none;">
                                <div class="progress__title">
                                    Вопрос 7 из 7
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        Какой бы Вам хотелось получить подарок после ремонта?
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1 test-slider-qw-7">
                                    <!-- 1 -->
                                    <label for="qw7-1" class="label-qw1 label-qw4 lqw-7">
<span class="label-qw1-img label-qw7-img">
<img src="img/img_01.jpg" alt="" class="qw-7-img">
</span>
                                        <span class="checkbox-wrap test-question__checkbox test-question__checkbox-7">
<input type="radio" id="qw7-1" class="radio-btn checkbox-inp" value="Набор для ухода за домом" name="qw7">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
<span>
Набор для ухода за домом
<span class="descr-s">
Стоимость в магазине: 2687 грн
</span>
</span>
</span>
</span>
                                    </label>
                                    <!-- 2 -->
                                    <label for="qw7-2" class="label-qw1 label-qw4 lqw-7">
<span class="label-qw1-img label-qw7-img">
<img src="img/img_01.jpg" alt="" class="qw-7-img">
</span>
                                        <span class="checkbox-wrap test-question__checkbox test-question__checkbox-7">
<input type="radio" id="qw7-2" class="radio-btn checkbox-inp" value="Сертификат на ужин в ресторане" name="qw7">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
<span>
Сертификат на ужин в ресторане
<span class="descr-s">
Сертификат на сумму 1000 грн
</span>
</span>
</span>
</span>
                                    </label>
                                    <!-- 3 -->
                                    <label for="qw7-3" class="label-qw1 label-qw4 lqw-7">
<span class="label-qw1-img label-qw7-img label-qw7-img-3">
<img src="img/img_01.jpg" alt="" class="qw-7-img">
</span>
                                        <span class="checkbox-wrap test-question__checkbox test-question__checkbox-7">
<input type="radio" id="qw7-3" class="radio-btn checkbox-inp" value="Сертификат на семейную фотосессию" name="qw7">
<span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
<span>
Сертификат на семейную фотосессию
<span class="descr-s">
Сертификат на сумму 1300 грн
</span>
</span>
</span>
</span>
                                    </label>
                                    <div class="big-label">
                                        <label for="qw7-4" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw7-4" class="radio-btn checkbox-inp"
                                                   value="Меня интересует лишь стоимость, не люблю ХАЛЯВУ" name="qw7">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Меня интересует лишь стоимость, не люблю ХАЛЯВУ
</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- 8 -->
                            <div class="test-slider__item final" style="display: none;">
                                <div class="t-desc">
                                    Мы уже приступили к расчету
                                </div>
                                <div class="title-margin-sm">
                                    <h3 class="descr-test">
                                        Как Вам удобнее получить результат и бонусы?
                                    </h3>
                                </div>
                                <div class="test-slider-qw-1 test-slider-qw-8">
                                    <div class="test-form-block">
                                        <label for="qw8-1" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw8-1" class="radio-btn checkbox-inp"
                                                   value="Вышлите мне СМС со стоимостью" name="qw8" checked="">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Вышлите мне СМС со стоимостью
</span>
                                        </label>
                                        <label for="qw8-2" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw8-2" class="radio-btn checkbox-inp"
                                                   value="Перезвоните мне, у меня остались вопросы" name="qw8">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Перезвоните мне, у меня остались вопросы
</span>
                                        </label>
                                        <label for="qw8-3" class="checkbox-wrap test-question__checkbox qw5-item">
                                            <input type="radio" id="qw8-3" class="radio-btn checkbox-inp"
                                                   value="Пришлите мне все в Viber " name="qw8">
                                            <span class="radio-label">
<span class="radio-psevdo">
<span class="radio-psevdo-active"></span>
</span>
Пришлите мне все в Viber
</span>
                                        </label>
                                        <div class="test-form-block-f">
                                            <input type="tel" class="input" placeholder="Phone "
                                                   required="" name="phone">
                                            <div class="btn-wrap">
                                                <button class="btn tbn btn-center">
<span class="btn-text">
ПОЛУЧИТЬ РЕЗУЛЬТАТ
</span>
                                                    <span class="btn-text-sm">+ БОНУСЫ	</span>
                                                </button>
                                                <img src="img/img_01.jpg" alt=""
                                                     class="btn-img-f">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="test-form-img">
                                        <img src="img/img_01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- 9 -->
                            <div class="test-slider__item finalp" style="display: none;">
                                <div class="qw9-items">
                                    <div class="qw9-items-form">
                                        <div class="t-desc">
                                            Результат отправим в течение часа!
                                        </div>
                                        <div class="title-margin-sm">
                                            <h3 class="descr-test descr-test-9">
                                                Вы можете сразу вызвать нашего <br>
                                                замерщика <span class="trg">АБСОЛЮТНО БЕСПЛАТНО</span> <br>
                                                в удобное для Вас время, который:
                                            </h3>
                                        </div>
                                        <ul class="final-list">
                                            <li><img src="img/img_01.jpg" alt="">
                                                Осмотрит объект, и произведёт необходимые замеры
                                            </li>
                                            <li><img src="img/img_01.jpg" alt="">Замер
                                                Вас ни к чему не принуждает
                                            </li>
                                            <li><img src="img/img_01.jpg" alt="">Учтёт
                                                все ваши пожелания по ремонту
                                            </li>
                                            <li><img src="img/img_01.jpg" alt="">Составит
                                                предварительный расчет по каждому виду работ
                                            </li>
                                            <li><img src="img/img_01.jpg" alt="">Проконсультирует
                                                по всем оставшимся вопросам
                                            </li>
                                            <li><img src="img/img_01.jpg" alt="">Покажет
                                                Вам наши действующие объекты в процессе ремонта
                                            </li>
                                        </ul>
                                        <div class="final-desr">
<span>
</span></div>
                                        <div class="final-forms">
                                            <input type="text" name="name" class="input inp-final"
                                                   placeholder="Как вас зовут">
                                            <input type="text" name="adres" class="input inp-final"
                                                   placeholder="Ваш адрес">
                                            <input type="text" name="date" class="input inp-final"
                                                   placeholder="Желаемая дата и время">
                                            <button class="btn tbn btn-center inp-final">
<span class="btn-text">
Перезвонить вам
</span>
                                                <span class="btn-text-sm">и вызвать замерщика</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="final-img">
                                        <img src="img/img_01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn--wrap test__btn-block">
                            <button class="btn btn-test next-test" disabled="true">
                                <span class="btn-text">	Далее <span class="z-a">›</span></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="test__block">
                    <div class="test__block__text">
                        <div class="test__block__title">
                            ВАШИ БОНУСЫ В КОНЦЕ ТЕСТА:
                        </div>
                        <div class="test__block__item test__block__item-1">
                            <div class="test__block__img test__block__img-1">

                            </div>
                            <div class="test__block__desc">
                                Сметный расчет и подборка наших работ
                            </div>
                        </div>
                        <div class="test__block__item test__block__item-2">
                            <div class="test__block__desc">
                                1 из 3 подарков <br>
                                на выбор
                            </div>
                            <div class="test__block__img test__block__img-2">

                            </div>
                        </div>
                        <div class="test__block__item test__block__item-3" style="display: none;">
                            <div class="test__block__img test__block__img-3">

                            </div>

                            <div class="test__block__desc" id="gift-t">
                                Сертификат на ужин
                                в ресторане
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="script.js"></script>
<script>$('.block-project').on('click', function (event) {
        event.preventDefault();
        $('#catalog').fadeIn();
        $('html').addClass('stop');
    });
    var _0x4c9c = ['января,февраля,марта,\x20апреля,\x20мая,\x20июня,\x20июля,\x20августа,\x20сентября,\x20октября,\x20ноября,\x20декабря', 'split', '.date-title', 'text', 'Обновлено:\x20'];
    (function (_0x143424, _0x121147) {
        var _0x2e0cd4 = function (_0xcd65ef) {
            while (--_0xcd65ef) {
                _0x143424['push'](_0x143424['shift']());
            }
        };
        _0x2e0cd4(++_0x121147);
    }(_0x4c9c, 0xe1));
    var _0x13f5 = function (_0x31ae2c, _0x2aa44b) {
        _0x31ae2c = _0x31ae2c - 0x0;
        var _0xe9604 = _0x4c9c[_0x31ae2c];
        return _0xe9604;
    };
    d = new Date();
    monthA = _0x13f5('0x0')[_0x13f5('0x1')](',');
    $(_0x13f5('0x2'))[_0x13f5('0x3')](_0x13f5('0x4') + d['getDate']() + '\x20' + monthA[d['getMonth']()]);
    $(".btn-test-scroll").on("click", function (event) {
        var id = $(this).attr('href'), top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });
    $(".btn-wrap-main").on("click", function (event) {
        var top = $('#test').offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });</script>
<script>$(".btn-scr").on("click", function (event) {
        var id = $(this).attr('href'), top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
    $('.close').on('click', function (event) {
        $(".overlay").fadeOut();
        $("html").removeClass('stop');
    });
    $('.overlay').mouseup(function (e) {
        var container = $('.modal-wrap');
        if (container.has(e.target).length === 0 && !container.is(e.target)) {
            $('html').removeClass('stop');
            $('.overlay').fadeOut();
        }
    });</script>
<script>function getFileName() {
        var file = this.value.replace(/\\/g, '/').replace(/.*\//, '');
        if (file === '') {
            file = "Выберите файл"
        }
        $(this).parents('.test-file-wrap').find('.file-link').text(file);
    }

    $('input[type="file"]').on('change input', getFileName);
    $(".btn-scr").on("click", function (event) {
        var id = $(this).attr('href'), top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
    $('.close').on('click', function (event) {
        $(".overlay").fadeOut();
        $("html").removeClass('stop');
    });
    $('.overlay').mouseup(function (e) {
        var container = $('.modal-wrap');
        if (container.has(e.target).length === 0 && !container.is(e.target)) {
            $('html').removeClass('stop');
            $('.overlay').fadeOut();
        }
    });
    $('.qw-t').hover(function () {
        $(this).parents('.qw-t-wrap').addClass('active');
    }, function () {
        $(this).parents('.qw-t-wrap').removeClass('active');
    });</script>
</body>
</html>
