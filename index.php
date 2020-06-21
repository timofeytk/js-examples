<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт квартир под ключ
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets\favicon\favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets\favicon\favicon.png.pagespeed.ce.GIfi4VfIK1.png" type="image/png">
    <link rel="stylesheet" href="assets\css\A.style.css,qv=1.1.pagespeed.cf.c6JaSiQPGh.css">
    <script data-pagespeed-no-defer="">(function () {
            function f(a, b, d) {
                if (a.addEventListener) a.addEventListener(b, d, !1); else if (a.attachEvent) a.attachEvent("on" + b, d); else {
                    var c = a["on" + b];
                    a["on" + b] = function () {
                        d.call(this);
                        c && c.call(this)
                    }
                }
            };window.pagespeed = window.pagespeed || {};
            var g = window.pagespeed;

            function k(a) {
                this.g = [];
                this.f = 0;
                this.h = !1;
                this.j = a;
                this.i = null;
                this.l = 0;
                this.b = !1;
                this.a = 0
            }

            function l(a, b) {
                var d = b.getAttribute("data-pagespeed-lazy-position");
                if (d) return parseInt(d, 0);
                var d = b.offsetTop, c = b.offsetParent;
                c && (d += l(a, c));
                d = Math.max(d, 0);
                b.setAttribute("data-pagespeed-lazy-position", d);
                return d
            }

            function m(a, b) {
                var d, c, e;
                if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1;
                a:if (b.currentStyle) c = b.currentStyle.position; else {
                    if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView.getComputedStyle(b, null))) {
                        c = c.getPropertyValue("position");
                        break a
                    }
                    c = b.style && b.style.position ? b.style.position : ""
                }
                if ("relative" == c) return !0;
                e = 0;
                "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body.scrollTop ? e = document.body.scrollTop : document.documentElement &&
                    document.documentElement.scrollTop && (e = document.documentElement.scrollTop);
                d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                c = e;
                e += d;
                var h = b.getBoundingClientRect();
                h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c);
                return e <= a.f && 0 <= c + a.f
            }

            k.prototype.m = function (a) {
                p(a);
                var b = this;
                window.setTimeout(function () {
                    var d = a.getAttribute("data-pagespeed-lazy-src");
                    if (d) if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                        var c = a.parentNode, e = a.nextSibling;
                        c && c.removeChild(a);
                        a.c && (a.getAttribute = a.c);
                        a.removeAttribute("onload");
                        a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function () {
                            g.CriticalImages.checkImageForCriticality(this);
                            b.b && (b.a--, b.a || g.CriticalImages.checkCriticalImages())
                        });
                        a.removeAttribute("data-pagespeed-lazy-src");
                        a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                        c && c.insertBefore(a, e);
                        if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a.removeAttribute("data-pagespeed-lazy-srcset");
                        a.src = d
                    } else b.g.push(a)
                }, 0)
            };
            k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m;
            k.prototype.s = function () {
                this.h = !0;
                q(this)
            };
            k.prototype.loadAllImages = k.prototype.s;

            function q(a) {
                var b = a.g, d = b.length;
                a.g = [];
                for (var c = 0; c < d; ++c) a.m(b[c])
            }

            function t(a, b) {
                return a.a ? null != a.a(b) : null != a.getAttribute(b)
            }

            k.prototype.u = function () {
                for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++) t(d, "data-pagespeed-lazy-src") && p(d)
            };
            k.prototype.overrideAttributeFunctions = k.prototype.u;

            function p(a) {
                t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function (a) {
                    "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a = "data-pagespeed-lazy-src");
                    return this.c(a)
                }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1"))
            }

            g.o = function (a, b) {
                function d() {
                    if (!(c.b && a || c.i)) {
                        var b = 200;
                        200 < (new Date).getTime() - c.l && (b = 0);
                        c.i = window.setTimeout(function () {
                            c.l = (new Date).getTime();
                            q(c);
                            c.i = null
                        }, b)
                    }
                }

                var c = new k(b);
                g.lazyLoadImages = c;
                f(window, "load", function () {
                    c.b = !0;
                    c.h = a;
                    c.f = 200;
                    if (g.CriticalImages) {
                        for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++) -1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++;
                        c.a = b;
                        c.a || g.CriticalImages.checkCriticalImages()
                    }
                    q(c)
                });
                b.indexOf("data") && ((new Image).src = b);
                f(window,
                    "scroll", d);
                f(window, "resize", d)
            };
            g.lazyLoadInit = g.o;
        })();

        pagespeed.lazyLoadInit(true, "/pagespeed_static/1.JiBnMqyl6S.gif");
    </script>
</head>
<body>
<div class="full"
     style="background:url(assets/img/bg-full.jpg.pagespeed.ce.hwGcGdIAzb.jpg) no-repeat center;background-size:cover">
    <div class="main">
        <div class="header">
            <div class="container header__cont">
                <div class="logo">
                    <a href="#" class="logo__img">
                        <img src="assets\img\logo.png.pagespeed.ce.LNQqJUccHb.png" alt="">
                    </a>
                    <p class="logo__text">
                        Частная бригада по ремонту квартир под ключ в Харькове с опытом более 10 лет
                    </p></div>
                <div class="block-project">
                    <div class="block-project__img">
                        <img data-pagespeed-lazy-src="assets/img/mock-34.png.pagespeed.ce.dPoMQ3yqAO.png" alt=""
                             src="pagespeed_static\1.JiBnMqyl6S.gif"
                             onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                             onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                    <div class="block-project__text">
                        <a href="#" class="link-underline">Скачайте прайс-лист</a>
                        <div class="block-project__min">на ремонтно-отделочные работы</div>
                    </div>
                </div>
                <div class="phone-block">
                    <div class="phone-wrap">
                        <img src="assets\img\phone.svg" alt="">
                        <a href="tel:+380968686511" class="number">+380 99 07 33 889</a>
                    </div>
                    <div class="text phone-block-label">Прием заявок: Пн-Вс с 9:00-18:00</div>
                </div>
            </div>
        </div>
        <div class="container main__content">
            <div class="main__info">
                <div class="subtitle">Нужен ремонт квартиры в Харькове?
                </div>
                <h1 class="title">Частная бригада выполнит&nbsp;<span>качественный ремонт Вашей квартиры </span>&nbsp;с
                    оплатой по факту за результат </h1>
                <div class="subtitle">Пройдите тест из 7 вопросов и получите:
                </div>
                <div class="main__advas">
                    <div class="main__advas-item">
                        <div class="main__advas-img">
                            <img src="assets\img\advas-1.png.pagespeed.ce.lBuH8OhZ3-.png" alt="">
                        </div>
                        <div class="main__advas-text">
                            <div class="main__advas-title">
                                Сметный
                            </div>
                            <div class="min-text">
                                расчет стоимости и сроки <br>
                                ремонта
                            </div>
                        </div>
                    </div>
                    <div class="main__advas-item">
                        <div class="main__advas-img">
                            <img src="assets\img\advas-2.png.pagespeed.ce.09_z3b1egs.png" alt="">
                        </div>
                        <div class="main__advas-text">
                            <div class="main__advas-title">Подборку
                            </div>
                            <div class="min-text">
                                наших выполненных ремонтов <br>
                                квартир
                            </div>
                        </div>
                    </div>
                    <div class="main__advas-item">
                        <div class="main__advas-img">
                            <img src="assets\img\advas-3.png.pagespeed.ce.TZ3dYRa3Av.png" alt="">
                        </div>
                        <div class="main__advas-text">
                            <div class="main__advas-title">Подарок
                            </div>
                            <div class="min-text">
                                1 из 3 подарков на выбор <br>
                                за прохождение теста
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap btn-wrap-main">
                    <a href="#test" class="btn btn-test-scroll">
                        <span class="btn-text">ПРОЙТИ ТЕСТ И УЗНАТЬ СТОИМОСТЬ</span>
                        <span class="btn-text-sm">+ ГАРАНТИРОВАННЫЙ ПОДАРОК</span>
                    </a>
                    <img src="assets\img\mock-btn.png.pagespeed.ce.U-JOfgYj5T.png" alt="">
                </div>
            </div>
            <div class="main__img"
                 style="background:url(assets/img/circle-m.png.pagespeed.ce.4bvu39RSKR.png) no-repeat center;background-size:100% 100%">
                <div class="main-hov main-hov-1">
                    <div class="plus">
                        <img src="assets\img\pl.png.pagespeed.ce.nV0DFoY1Yn.png" alt="">
                    </div>
                    <div class="tooltip">
                        <p class="text">
                            C 2008 года сдали 200+ квартир с ремонтом различного типа и сложности &nbsp; &nbsp;</p>
                    </div>
                </div>
                <div class="main-hov main-hov-2">
                    <div class="plus">
                        <img src="assets\img\pl.png.pagespeed.ce.nV0DFoY1Yn.png" alt="">
                    </div>
                    <div class="tooltip">
                        <p class="text">Закупаем качественные стройматериалы ниже на 15% рынка, без наценок от
                            производителя минуя посредников
                            &nbsp;</p>
                    </div>
                </div>
                <div class="main-hov main-hov-3">
                    <div class="plus">
                        <img src="assets\img\pl.png.pagespeed.ce.nV0DFoY1Yn.png" alt="">
                    </div>
                    <div class="tooltip">
                        <p class="text">Используем немецкое оборудование общей стоимостью более 300 тыс. грн., которое
                            сократит срок ремонта в среднем на 1 месяц </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- test -->
    <div class="test" id="test">
        <div class="container">
            <div class="test__content">
                <div class="test__head">
                    <div class="title-wrap title-margin-larg">
                        <h2 class="test__title">
                            Ответьте на 7 вопросов и получите расчет<br>
                            стоимости и сроки капитального ремонта <span class="trigger">+ все 3 бонуса</span>
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
                            <!-- <div class="test-block test-block-6">
                                                        </div>

                                                        <div class="test-circle test-circle-7">
                                                        </div> -->
                            <!-- <div class="test-block test-block-7">
                                                        </div>

                                                        <div class="test-circle test-circle-8">
                                                        </div> -->
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
      style="background:url(assets/img/test/item-1-1.png.pagespeed.ce.WGc9qWlAkb.png) no-repeat center;background-size:cover">
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
      style="background:url(assets/img/test/item-1-2.png.pagespeed.ce.KHtEKRZIHD.png) no-repeat center;background-size:cover">
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
      style="background:url(assets/img/test/item-1-3.png.pagespeed.ce.qgSEcF5zSZ.png) no-repeat center;background-size:cover">
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
                                           style="background:url(assets/img/test/item-2-1.png.pagespeed.ce.A88QA-ecWw.png) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-1" class="radio-btn checkbox-inp" value="Вся квартира / дом" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="assets\img\test\tick.png.pagespeed.ce.9H2mD35Y1K.png" alt="">
</span>
</span>
Вся квартира / дом
</span>
</span>
                                    </label>
                                    <!-- 2 -->
                                    <label for="qw2-2" class="label-qw1 label-qw2"
                                           style="background:url(assets/img/test/item-2-2.png.pagespeed.ce.RTisSfGiJp.png) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-2" class="radio-btn checkbox-inp" value="Комнаты / зал" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="assets\img\test\tick.png.pagespeed.ce.9H2mD35Y1K.png" alt="">
</span>
</span>
Комнаты / зал
</span>
</span>
                                    </label>
                                    <!-- 3 -->
                                    <label for="qw2-3" class="label-qw1 label-qw2"
                                           style="background:url(assets/img/test/item-2-3.png.pagespeed.ce.hwt2NabGMa.png) no-repeat left 2vw bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-3" class="radio-btn checkbox-inp" value="Ванная / туалет" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="assets\img\test\tick.png.pagespeed.ce.9H2mD35Y1K.png" alt="">
</span>
</span>
Ванная / туалет
</span>
</span>
                                    </label>
                                    <!-- 4 -->
                                    <label for="qw2-4" class="label-qw1 label-qw2"
                                           style="background:url(assets/img/test/item-2-4.png.pagespeed.ce.hBRjCPFYVI.png) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-4" class="radio-btn checkbox-inp" value="Кухня" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="assets\img\test\tick.png.pagespeed.ce.9H2mD35Y1K.png" alt="">
</span>
</span>
Кухня
</span>
</span>
                                    </label>
                                    <!-- 5 -->
                                    <label for="qw2-5" class="label-qw1 label-qw2"
                                           style="background:url(assets/img/test/item-2-5.png.pagespeed.ce.D8udEJJTqK.png) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-5" class="radio-btn checkbox-inp" value="Коридор" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="assets\img\test\tick.png.pagespeed.ce.9H2mD35Y1K.png" alt="">
</span>
</span>
Коридор
</span>
</span>
                                    </label>
                                    <!-- 6 -->
                                    <label for="qw2-6" class="label-qw1 label-qw2"
                                           style="background:url(assets/img/test/item-2-6.png.pagespeed.ce.XjKwiWPl31.png) no-repeat center bottom;background-size:100% auto">
<span class="checkbox-wrap test-question__checkbox">
<input type="checkbox" id="qw2-6" class="radio-btn checkbox-inp" value="Другое" name="qw2">
<span class="before-bg"></span>
<span class="radio-label">
<span class="checkbox-psevdo">
<span class="checkbox-psevdo-active">
<img src="assets\img\test\tick.png.pagespeed.ce.9H2mD35Y1K.png" alt="">
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
                                        <img src="assets\img\test\item-3-1.png.pagespeed.ce.aNAUAo27fx.png" alt=""
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
       style="background:url(assets/img/test/item-4-1.jpg.pagespeed.ce.0rjWqKSq7Z.jpg) no-repeat center;background-size:cover">
</label>
<span class="qw-t-wrap"><span class="qw-t">
<img src="assets\img\test\i.png.pagespeed.ce.kqV8Uu4agj.png" alt="">
<span class="tooltip-test">
<span class="t-title">
</span>
<span class="t-title">
<span>
Что включает в себя <br>
косметический ремонт:	</span>
</span>
<ul class="list-t">
<li <="" li="">
<li></li>
<li> Частичная либо полная замена или обновление финишных материалов стен, пола, потолков без их предварительной подготовки, не затрагивая инженерных коммуникаций и (не меняя конструктивных решений помещения).</li>
<li></li>
<li <="" li="">
<li></li>
<li></li><li></li>
<li></li><li></li>
<li></li><li></li>
<li></li>
<li></li>
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
       style="background:url(assets/img/test/item-4-2.jpg.pagespeed.ce.eLzxs7x0XS.jpg) no-repeat center;background-size:cover">
</label>
<span class="qw-t-wrap"><span class="qw-t">
<img src="assets\img\test\i.png.pagespeed.ce.kqV8Uu4agj.png" alt="">
<span class="tooltip-test">
<span class="t-title">
</span>
<span class="t-title">
<span>
Что включает в себя<br>	капитальный ремонт:
</span>
</span>
<ul class="list-t">
<li <="" li="">
<li> Полный цикл ремонтно-отделочных работ (от демонтажа до чистовой навески приборов), включая замену либо ремонт инженерных коммуникаций, с возможной перепланировкой помещений.</li>
<li>
<li></li>
<li class="

					    								</li>

					    								<li></li>

					    								<li class=" <="" li="">
<li></li>
<li></li><li></li>
<li <="" li="">
<li></li>
<li></li>
<li></li>
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
       style="background:url(assets/img/test/item-4-3.jpg.pagespeed.ce.qiIHH5L9EC.jpg) no-repeat center;background-size:cover">
</label>
<span class="qw-t-wrap"><span class="qw-t">
<img src="assets\img\test\i.png.pagespeed.ce.kqV8Uu4agj.png" alt="">
<span class="tooltip-test">
<span class="t-title">
</span>
<span class="t-title">
<span>
Что включает в себя <br>	дизайнерский ремонт:
</span>
</span>
<ul class="list-t">
<li <="" li="">
<li> Полный цикл ремонтно-отделочных работ (от демонтажа до чистовой навески приборов), включая полную замену инженерных коммуникаций, с перепланировкой помещений и набором сложных конструктивных элементов, с использованием эксклюзивных отделочных материалов.</li>
<li></li>
<li></li>
<li></li><li></li>
<li></li><li></li>
<li></li><li></li>
<li></li><li></li>
<li></li>
<li></li>
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
                                        <img src="assets\img\test\item-5-1.png.pagespeed.ce.NpDToR18ah.png" alt="">
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
                                        <img src="assets\img\test\item-5-55.png.pagespeed.ce.CPiBsQf5qp.png" alt="">
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
<img src="assets\img\test\item-7-1.png.pagespeed.ce.ly45saMO_R.png" alt="" class="qw-7-img">
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
<img src="assets\img\test\item-7-2.png.pagespeed.ce.PXheaeO_v3.png" alt="" class="qw-7-img">
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
<img src="assets\img\test\item-7-3.png.pagespeed.ce.-5Z7aikbrA.png" alt="" class="qw-7-img">
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
                                            <input type="tel" class="input" placeholder="+380 (--) -- -- --- "
                                                   required="" name="phone">
                                            <div class="btn-wrap">
                                                <button class="btn tbn btn-center">
<span class="btn-text">
ПОЛУЧИТЬ РЕЗУЛЬТАТ
</span>
                                                    <span class="btn-text-sm">+ БОНУСЫ	</span>
                                                </button>
                                                <img src="assets\img\test\gifts.png.pagespeed.ce.GxQ2lvbALb.png" alt=""
                                                     class="btn-img-f">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="test-form-img">
                                        <img src="assets\img\test\item-8.png.pagespeed.ce.m9sb5ydo5G.png" alt="">
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
                                            <li><img src="assets\img\test\ok.png.pagespeed.ce.YaA06i14lG.png" alt="">
                                                Осмотрит объект, и произведёт необходимые замеры
                                            </li>
                                            <li><img src="assets\img\test\ok.png.pagespeed.ce.YaA06i14lG.png" alt="">Замер
                                                Вас ни к чему не принуждает
                                            </li>
                                            <li><img src="assets\img\test\ok.png.pagespeed.ce.YaA06i14lG.png" alt="">Учтёт
                                                все ваши пожелания по ремонту
                                            </li>
                                            <li><img src="assets\img\test\ok.png.pagespeed.ce.YaA06i14lG.png" alt="">Составит
                                                предварительный расчет по каждому виду работ
                                            </li>
                                            <li><img src="assets\img\test\ok.png.pagespeed.ce.YaA06i14lG.png" alt="">Проконсультирует
                                                по всем оставшимся вопросам
                                            </li>
                                            <li><img src="assets\img\test\ok.png.pagespeed.ce.YaA06i14lG.png" alt="">Покажет
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
                                        <img src="assets\img\test\man.png.pagespeed.ce.PbkyWZCqLK.png" alt="">
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
                                <img data-pagespeed-lazy-src="assets/img/test/r-1.png.pagespeed.ce.i1o38Z57W0.png"
                                     alt="" id="r-1" src="pagespeed_static\1.JiBnMqyl6S.gif"
                                     onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                     onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
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
                                <img data-pagespeed-lazy-src="assets/img/test/r-2.png.pagespeed.ce.Sk0_T3i8JE.png"
                                     alt="" src="pagespeed_static\1.JiBnMqyl6S.gif"
                                     onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                     onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                        </div>
                        <div class="test__block__item test__block__item-3" style="display: none;">
                            <div class="test__block__img test__block__img-3">
                                <img data-pagespeed-lazy-src="#" alt="" class="gift-img"
                                     src="pagespeed_static\1.JiBnMqyl6S.gif"
                                     onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                     onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                            <img data-pagespeed-lazy-src="assets/img/test/r-2-present.png.pagespeed.ce.pzfOqZyl8e.png"
                                 alt="" class="img-bg" src="pagespeed_static\1.JiBnMqyl6S.gif"
                                 onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                 onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
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
    <div class="footer">
        <div class="container footer__cont">
            <div class="footer__item item-data__title">
                © Все права защищены <br>Харьков 2012-2019
            </div>
            <div class="footer__item item-data__title center">
                <a href="#" class="item-data__title">
                </a>
            </div>
            <div class="footer__item right item-data__title">
                <a href="#" class="item-data__title">Сайт не является публичной офертой
                    <br>
                    Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</div>
<div class="overlay" id="thanks" style="display: none;">
    <div class="modal-wrap">
        <div class="close"></div>
        <div class="modal">
            <div class="modal-title">
                Загрузка началась... Дождитесь окончания, загрузка может длиться несколько секунд
            </div>
        </div>
    </div>
</div>
<div class="overlay" id="catalog" style="display: none;">
    <div class="modal-wrap">
        <div class="close"></div>
        <div class="modal">
            <div class="modal-title">
                <span>Скачайте прайс-лист</span>
            </div>
            <div class="progress__title date-title">
                Обновлено: 23 августа
            </div>
            <form action="#" class="form-modal">
                <input type="hidden" name="formname" value="mform">
                <input type="text" class="input inp-modal user" placeholder="ВАШЕ ИМЯ" required="" name="name">
                <input type="email" class="input inp-modal email" placeholder="ВАШ E-mail" required="" name="email">
                <input type="tel" class="input inp-modal phone" placeholder="ВАШ ТЕЛЕФОН" required="" name="phone">
                <div class="btn-modal-wrap">
                    <img data-pagespeed-lazy-src="assets/img/modals/catalog-2.png.pagespeed.ce.aSBR_yuzkL.png" alt=""
                         class="btn-img-modal" src="pagespeed_static\1.JiBnMqyl6S.gif"
                         onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                         onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    <button class="btn btn-modals"><span class="btn-text">ПОЛУЧИТЬ ПРАЙС-ЛИСТ</span></button>
                </div>
            </form>
            <div class="test__block__desc">
                PDF 1,5 Mb
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"
        data-pagespeed-no-defer="">pagespeed.lazyLoadImages.overrideAttributeFunctions();</script>
<script src="assets\js\libs\jquery-3.3.1.min.js.pagespeed.jm.r0B4QCxeCQ.js"></script>
<script src="assets\js\test.js,qv==1.3 jquery.maskedinput.js.pagespeed.jc.88y5llbGG4.js"></script>
<script>eval(mod_pagespeed_UWqeUWFJBI);</script>
<script>eval(mod_pagespeed_jbITBIX5wF);</script>
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
    $("input[name='phone']").mask("+380-(99)-99-99-999");
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
