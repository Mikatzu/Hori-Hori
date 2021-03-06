@extends('layout')
@section('title')Hori-Hori Магазин цифровых видеоигр. Покупай, Играй, Наслаждайся!@endsection
@section('main_content')
    <div class="div1">
        <img src="/image/Hori_bigtext.png" class="bigtext" alt="">
        <div class="bestsellers_text">Бестселлеры</div>
        <div class="bestsellers">
            <div class="bestseller_product_rectangle">
                <a href="/product" class="bestseller_pic1"><img src="" alt="">
                    <a href="/product" class="catalog_text_main">Lorem ipsum dolor sit1.</a>
                </a>
            </div>
            <div class="bestseller_product_rectangle">
                <a href="/product" class="bestseller_pic2"><img src="" alt="">
                    <a href="/product" class="catalog_text_main">Lorem ipsum dolor sit1.</a> </a>
            </div>
            <div class="bestseller_product_rectangle">
                <a href="/product" class="bestseller_pic3"><img src="" alt="">
                    <a href="/product" class="catalog_text_main">Lorem ipsum dolor sit1.</a> </a>
            </div>
        </div>
    </div>

    <div class="div2">
        <div class="bestcosts"><img src="/image/bestcosts.svg" alt="" class="review_in_div2"></div>
        <div class="krugsupport"><img src="/image/krugsupport.svg" alt="" class="review_in_div2"></div>
        <div class="bestachievements"><img src="/image/bestachievements.svg" alt="" class="review_in_div2"></div>
        <div class="bestreviews"><img src="/image/bestreviews.svg" alt="" class="review_in_div2"></div>
    </div>

    <div class="sell_case">
        <div class="buttons_up">
            <a href="" class="newprod"><div class="newprod_button">НОВИНКИ</div></a>
            <a href="" class="leadsells"><div class="leadsells_button">ЛИДЕРЫ ПРОДАЖ</div></a>
            <a href="" class="preorders"><div class="preorders_button">ПРЕДЗАКАЗЫ</div></a>
        </div>
        <div class="dynamic_products">
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic1"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit1.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic2"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit2.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic3"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit3.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic4"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit4.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic5"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit5.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic6"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit6.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic7"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit7.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic8"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit8.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic9"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit9.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="/product" class="product_pic10"><img src="" alt=""><a href="/product" class="catalog_text_main">Lorem ipsum dolor sit10.</a> </a></div>
        </div>
        <a href="/catalog" class="watch_all"><div class="watch_all_button">СМОТРЕТЬ ВСЕ</div></a>
    </div>
    <div class="div3">
        <div class="our_blogs_text"><h1>НАШИ БЛОГИ</h1></div>
        <div class="blog1"><a href="" class="blogtext1">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></div>
        <div class="blog2"><a href="" class="blogtext2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
        <div class="blog3"><a href="" class="blogtext3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
        <div class="blog4"><a href="" class="blogtext4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></div>
    </div>
@endsection
