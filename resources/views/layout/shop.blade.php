<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/bootstrap/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('reset.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/carousel/owl.theme.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('responsive.css')}}" rel="stylesheet" type="text/css"/>
         <!-- <link href="{{asset('css/import/home.css')}}" rel="stylesheet" type="text/css"/> -->
          <link href="{{asset('css/import/header.css')}}" rel="stylesheet" type="text/css"/>
        

        <script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/elevatezoom-master/jquery.elevatezoom.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/carousel/owl.carousel.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/main.js')}}" type="text/javascript"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">H??nh th???c thanh to??n</a>
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    <li>
                                        <a href="{{ url('/') }}" title="">Trang ch???</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('san-pham') }}" title="">S???n ph???m</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('bai-viet') }}" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('1-gioi-thieu') }}" title="">Gi???i thi???u</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('2-lien-he') }}" title="">Li??n h???</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?page=home" title="" id="logo" class="fl-left"><img src="{{asset('images/logo.png')}}"/></a>
                            <div id="search-wp" class="fl-left">
                                <!-- <form method="POST" action="">
                                    <input type="text" name="s" id="s" placeholder="Nh???p t??? kh??a t??m ki???m t???i ????y!" class="search_header">
                                    <button type="submit" id="sm-s" name="btn_search">T??m ki???m</button>
                                    
                                </form> -->
                                <form method="" action="#">
                                    <input type="text" name="keyword" id="s" value="{{old('keyword')}}" placeholder="Nh???p t??? kh??a t??m ki???m t???i ????y!" class="search_header">
                                    <button type="submit" id="sm-s" name="btn_search">T??m ki???m</button>
                                    <div id="search_product">

                                    </div>
                                    
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">T?? v???n</span>
                                    <span class="phone">0987.654.321</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="?page=cart" title="gi??? h??ng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="num">2</span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="num">{{Cart::count()}}</span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">C?? <span>{{Cart::count()}} s???n ph???m</span> trong gi??? h??ng</p>
                                        <ul class="list-cart">
                                            @foreach(Cart::content() as $item)
                                            <li class="clearfix">
                                                <a href="{{url('san-pham/'.$item->id.'-'.Str::slug($item->name))}}" title=""
                                                    class="thumb fl-left">
                                                    <img src="{{ asset($item->options->thumbnail) }}" alt="">
                                                </a>
                                                <div class="info fl-right">
                                                    <a href="{{url('san-pham/'.$item->id.'-'.Str::slug($item->name))}}" title=""
                                                        class="product-name">{{ $item->name }}</a>
                                                    <p class="price" id="sub-total1-{{$item->rowId}}">{{ number_format($item->price, 0, '', '.') }}??
                                                    </p>
                                                    <p class="qty" >S??? l?????ng: <span>{{ $item->qty }}</span></p>
                                                </div>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">T???ng:</p>
                                            <p class="price fl-right" id="total-price1">{{ Cart::subtotal(0, '', '.') }}??</p>
                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?page=cart" title="Gi??? h??ng" class="view-cart fl-left">Gi??? h??ng</a>
                                            <a href="?page=checkout" title="Thanh to??n" class="checkout fl-right">Thanh to??n</a>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        @yield('content')
</div><div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                <h3 class="title">ISMART</h3>
                <p class="desc">ISMART lu??n cung c???p lu??n l?? s???n ph???m ch??nh h??ng c?? th??ng tin r?? r??ng, ch??nh s??ch ??u ????i c???c l???n cho kh??ch h??ng c?? th??? th??nh vi??n.</p>
                <div id="payment">
                    <div class="thumb">
                        <img src="{{asset('images/img-foot.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h3 class="title">Th??ng tin c???a h??ng</h3>
                <ul class="list-item">
                    <li>
                        <p>???????ng c4-T??y Th???nh-T??n Ph??-Tp Hcm </p>
                    </li>
                    <li>
                        <p>0911.083.385</p>
                    </li>
                    <li>
                        <p>long542.nt@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h3 class="title">Ch??nh s??ch mua h??ng</h3>
                <ul class="list-item">
                    <li>
                        <a href="" title="">Quy ?????nh - ch??nh s??ch</a>
                    </li>
                    <li>
                        <a href="" title="">Ch??nh s??ch b???o h??nh - ?????i tr???</a>
                    </li>
                    <li>
                        <a href="" title="">Ch??nh s??ch h???i vi???n</a>
                    </li>
                    <li>
                        <a href="" title="">Giao h??ng - l???p ?????t</a>
                    </li>
                </ul>
            </div>
            <div class="block" id="newfeed">
                <h3 class="title">B???ng tin</h3>
                <p class="desc">????ng k?? v???i chung t??i ????? nh???n ???????c th??ng tin ??u ????i s???m nh???t</p>
                <div id="form-reg">
                    <form method="POST" action="">
                        <input type="email" name="email" id="email" placeholder="Nh???p email t???i ????y">
                        <button type="submit" id="sm-reg">????ng k??</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="foot-bot">
        <div class="wp-inner">
            <!-- <p id="copyright">?? B???n quy???n thu???c v??? unitop.vn | Php Master</p> -->
        </div>
    </div>
</div>
</div>
<div id="menu-respon">
    <a href="?page=home" title="" class="logo">VSHOP</a>
    <div id="menu-respon-wp">
        <ul class="" id="main-menu-respon">
            <li>
                <a href="?page=home" title>Trang ch???</a>
            </li>
            <li>
                <a href="?page=category_product" title>??i???n tho???i</a>
                <ul class="sub-menu">
                    <li>
                        <a href="?page=category_product" title="">Iphone</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Samsung</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="?page=category_product" title="">Iphone X</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title="">Iphone 8</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Nokia</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="?page=category_product" title>M??y t??nh b???ng</a>
            </li>
            <li>
                <a href="?page=category_product" title>Laptop</a>
            </li>
            <li>
                <a href="?page=category_product" title>????? d??ng sinh ho???t</a>
            </li>
            <li>
                <a href="?page=blog" title>Blog</a>
            </li>
            <li>
                <a href="#" title>Li??n h???</a>
            </li>
        </ul>
    </div>
</div>
<div id="btn-top"><img src="{{asset('images/icon-to-top.png')}}" alt=""/></div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=849340975164592";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
            $(document).ready(function() {
                $(".search_header").keyup(function() {
                    var txt = $(this).val();
                    var data = {
                        search: txt
                    };

                    $.ajax({
                        type: "get",
                        url: "{{ url('home/search_header') }}",
                        data: data,
                        dataType: "html",
                        success: function(data) {
                            $(".main-content").html(data);
                        }
                    });
                });
            });
</script>

<script>
    $(document).ready(function(){
        $('#s').keyup(function(e) {
                
            var keyword = $(this).val();
            if(keyword  == '')
            {
                $('.list-cart-search').html();
                $('.list-cart-search').hide();
            }
            else
            {

            
                var data = {keyword:keyword};
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "search",
                    method: 'GET',
                    data: {
                        keyword: '{{csrf_token()}}',
                        keyword,
                    },
                    dataType: 'text',
                    success: function (data) {
                        $("#search_product").html(data);
                        console.log(data);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            }

        });
        $(document).on('click', 'li', function(){
            $('#s').val($(this).text());
            $('.detailli').fadeOut();


        });

    });
</script>

</body>
</html>