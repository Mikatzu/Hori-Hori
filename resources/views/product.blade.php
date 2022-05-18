@extends('layout')
@section('title')Продукт@endsection
@section('main_content')

    <div class="">

    </div>
    <div class="standart_goty_buttons">

        <div class="standart_button">
            <a href="" class="standart_product_button">
                <a href="" class="standart_product_button_text">
                    Standart
                </a>
            </a>
        </div>

    <div class="deluxe_button">
        <a href="" class="deluxe_product_button">
            <a href="" class="deluxe_product_button_text">
                Deluxe
            </a>
        </a>
    </div>

    <div class="goty_button">
        <a href="" class="goty_product_button">
            <a href="" class="goty_product_button_text">
                Game of the Year
            </a>
        </a>
    </div>

    </div>

    <div class="big_product_pic">
        <div class="product_pic_rectangle">
        </div>
    </div>

    <img src="/image/nierautomata.jpg" alt="" class="real_product_pic">

    <div class="name_and_cost">
        <h1 class="name">NieR: Automata</h1>
        <p class="lang">Языки: Русский, Английский, Японский</p>
    </div>
    <h1 class="screenshot_text">Скриншоты</h1>
    <div class="product_screenshots">
            <div class="screenshot">1<img src="" alt="" class="screenshot_img"></div>
            <div class="screenshot">2<img src="" alt="" class="screenshot_img"></div>
            <div class="screenshot">3<img src="" alt="" class="screenshot_img"></div>
            <div class="screenshot">4<img src="" alt="" class="screenshot_img"></div>
            <div class="screenshot">5<img src="" alt="" class="screenshot_img"></div>
            <div class="screenshot">6<img src="" alt="" class="screenshot_img"></div>
    </div>

    <div class="genres">
        <div class="genre"><p>Жанр</p><p>Экшн, Приключения, Драма</p></div>
        <div class="genre"><p>Платформа</p><p>PC, XBOX, PS4</p></div>
        <div class="genre"><p>Издатель</p><p>Platinum Games</p></div>
        <div class="genre"><p>Разработчик</p><p>Platinum Games</p></div>
    </div>

    <div class="review_requirements">
        <div class="tabs">
            <div class="tab">
                <input type="radio" id="tab1" name="tab-group" checked>
                <label for="tab1" class="tab-title">Описание</label>
                <section class="tab-content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                  lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo,
                  vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque
                  fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit
                </section>
            </div>
            <div class="tab">
                <input type="radio" id="tab2" name="tab-group">
                <label for="tab2" class="tab-title">Сис. Требования</label>
                <section class="tab-content">
                    Рекомендованные: <br>
                    ОС: Windows 8.1 /10 64bit<br>
                    Процессор: Intel Core i5 4670 or AMD A10-7850K<br>
                    Оперативная память: 8 GB ОЗУ<br>
                    Видеокарта: NVIDIA GeForce GTX 980 VRAM 4GB or AMD Radeon R9 380X VRAM 4GB<br>
                    DirectX: Версии 11<br>
                    Сеть: Широкополосное подключение к интернету<br>
                    Место на диске: 50 GB<br>
                    Звуковая карта: DirectX® 11 supported<br>
                </section>
            </div>
            <div class="tab">
                <input type="radio" id="tab3" name="tab-group">
                <label for="tab3" class="tab-title">Активация</label>
                <section class="tab-content">
                    Скопируйте ключ приобретённой игры из раздела «Заказы» в личном кабинете. <br>
                    Если у вас не установлен клиент Steam, скачайте и установите его. <br>
                    Войдите в свой аккаунт Steam или зарегистрируйте новый, если у вас его нет. <br>
                    Перейдите в раздел «Игры» и выберите «Активировать через Steam...». <br>
                    Введите ключ активации. <br>
                    После этого игра будет в вашей библиотеке Steam, и вы сможете её скачать. <br>
                </section>
            </div>
        </div>

    </div>

    <div class="descr_sim" id="descr_sim">
        <label for="descr_sim" class="descr_sim_text">Похожие</label>
    </div>

    <div class="similargames">
        <div class="similar_game">
            <img src="" alt="" class="similar_game_img">
            <p class="similar_game_text">similar game 1</p>
        </div>
        <div class="similar_game">
            <img src="" alt="" class="similar_game_img">
            <p class="similar_game_text">similar game 2</p>
        </div>
    </div>

    <div class="commentary">
        <div class="comments_bar" id="comments_bar"><label for="comments_bar" class="comment_title">Комментарии и отзывы</label></div>
        <div class="comment">
            <div class="pfp_button"></div>
        </div>
    </div>

@endsection
