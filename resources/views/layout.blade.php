<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/media.css') }}">
</head>
<body>
<header class="header">
    "<div class="container">
        <div class="header__inner">
            <div class="logo">
                <a href="/">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <nav class="menu">
                <div class="btn__menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <ul class="menu__list">
                    <li><a href="/">Домашня</a></li>
                    <li><a href="/about-us">Про нас</a></li>
                    <li><a href="/hosting">Хостинг</a></li>
                    <li><a href="/contacts">Контакти</a></li>
                </ul>
            </nav>
        </div>
    </div>"
</header>

<section class="top">
    <div class="container">
        @yield('top')
    </div>
</section>


    @yield('main_content')

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer-col__logo">
                <a href="#" class="footer__logo">
                    <img src="images/logo-white.png" alt="">
                </a>
                <div class="footer__text">
                    Hosting Website Builder - це велика бібліотека заздалегідь розроблених веб-елементів, які допоможуть вам створити веб-сайт за кілька
                    хвилин.
                </div>
            </div>
            <div class="footer-menu">
                <div class="footer__title">База знань</div>
                <ul class="footer__list">
                    <li><a href="#">Туторіали</a></li>
                    <li><a href="#">Оплата за рекламу</a></li>
                    <li><a href="#">Питання</a></li>
                    <li><a href="#">Зустрічі</a></li>
                    <li><a href="#">Реферальні програми</a></li>
                    <li><a href="#">Магазин</a></li>
                    <li><a href="#">Шаблони для демок</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <div class="footer__title">Компанія</div>
                <ul class="footer__list">
                    <li><a href="#">Hosting.com Блог</a></li>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Контакти</a></li>
                    <li><a href="#">Політика конфіденційності</a></li>
                </ul>
            </div>
            <div class="footer-form">
                <div class="footer__title">Швидкий зв'язок</div>
                <form>
                    <input type="text" placeholder="Ім'я">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Тема">
                    <textarea placeholder="Повідомлення..."></textarea>
                    <button type="submit">Відправити</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
