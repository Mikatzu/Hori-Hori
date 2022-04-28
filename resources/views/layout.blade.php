<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/catalogs.css">
    <link rel="stylesheet" href="css/app.css">

    <title>@yield('title')</title>
</head>
<body>
    <div class="navbargroup">
    <div class="navbar">
        <a href="/" class="hori-sign"><img src="/image/Hori_sign.svg" alt=""></a>
        <a href="/catalog" class="catalog-button"><div class="rectangle3">КАТАЛОГ</div></a>
        <div class ='rectangle1'><input class="input-navbar" type="text" placeholder=""></div>
        <div class="search-button"><a href="" class="search-pic"><img src="/image/Search_button.svg" alt=""></a></div>
        <a href=""><div class="pfp"></div></a>
    </div>
</div>

    @yield('main_content')

    <div class="downcase">
    <div class="line">
        <img src="/image/line.svg" alt="">
    </div>
    <div class="hori_sign_down_case">
        <a href="/"> <img src="/image/Hori_sign_larger.svg" alt=""></a>
    </div>
    <div class="down_case_links">
        <a href="/about" class="about">О НАС</a>
        <a href="/" class="creators">СОЗДАТЕЛИ</a>
        <a href="/catalog" class="catalog">КАТАЛОГ</a>
        <a href="" class="creator_portfolio">САЙТ ПОРТФОЛИО СОЗДАТЕЛЯ</a>
        <p class="attention-dp">ЭТОТ ПРОЕКТ БЫЛ СОЗДАН ДЛЯ ДИПЛОМНОЙ РАБОТЫ И ДЛЯ ПОРТФОЛИО</p>
        <a href=""><img src="/image/vk.svg" alt="" class="vk"></a>
        <a href=""><img src="/image/telegram.svg" alt="" class="telegram"></a>
        <a href=""><img src="/image/youtube.svg" alt="" class="youtube"></a>
        <a href=""><img src="/image/discord.svg" alt="" class="discord"></a>
    </div>
</div>
</body>
</html>

