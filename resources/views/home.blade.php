@extends('layout')
@section('title')Hori-Hori Магазин цифровых видеоигр. Покупай, Играй, Наслаждайся!@endsection
@section('main_content')
    <div class="div1">
        <div class="bigtext"><img src="/image/Hori_bigtext.svg" alt=""></div>
        <div class="bestsellers"><p>Бестселлеры</p></div>
        <a href="/product"><div class="bestseller1"><div class="regtangle_bestseller1"><p class="bestseller1-t">ELDEN RING Deluxe edition 50$</p></div></div><img src="/image/elden_ringdeluxe.jpg" alt="" class="bestsellerpic1"></a>
        <a href=""><div class="bestseller2"><div class="regtangle_bestseller2"><p class="bestseller2-t">NieR:Automata 20$</p></div></div><img src="/image/nierautomata.jpg" alt="" class="bestsellerpic2"></a>
        <a href=""> <div class="bestseller3"><div class="regtangle_bestseller3"><p class="bestseller3-t">Battlefield 49.99$</p></div></div><img src="/image/Battlefield2042.jpg" alt="" class="bestsellerpic3"></a>
    </div>

    <div class="div2">
        <div class="bestcosts"><img src="/image/bestcosts.svg" alt=""></div>
        <div class="krugsupport"><img src="/image/krugsupport.svg" alt=""></div>
        <div class="bestachievements"><img src="/image/bestachievements.svg" alt=""></div>
        <div class="bestreviews"><img src="/image/bestreviews.svg" alt=""></div>
    </div>

    <div class="sell_case">
        <div class="buttons_up">
            <a href="" class="newprod"><div class="newprod_button">НОВИНКИ</div></a>
            <a href="" class="leadsells"><div class="leadsells_button">ЛИДЕРЫ ПРОДАЖ</div></a>
            <a href="" class="preorders"><div class="preorders_button">ПРЕДЗАКАЗЫ</div></a>
        </div>
        <div class="dynamic_products">
            <div class="dynamic_product_rectangle"><a href="" class="product_pic1"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit1.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic2"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit2.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic3"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit3.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic4"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit4.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic5"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit5.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic6"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit6.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic7"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit7.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic8"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit8.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic9"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit9.</a>  </a></div>
            <div class="dynamic_product_rectangle"><a href="" class="product_pic10"><img src="" alt=""><a href="" class="catalog_text_main">Lorem ipsum dolor sit10.</a> </a></div>
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
