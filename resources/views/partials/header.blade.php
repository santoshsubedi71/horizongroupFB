<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" width="60" title="" /></a><span class="h5">株式会社 <em>HORIZON GROUP</em> </h5>  
           
          </div>
          <ul class="nav-menu">
            <li><a href="{{ route('home') }}">ホーム</a></li>
            <li><a href="{{ route('clients') }}">仕事検索</a></li>
            <li><a href="#">企業のご担当様</a></li>
            <li class="menu-has-children">
                <a href="#">その他のサービス</a>
                <ul>
                    <li><a href="#">不動産</a></li>
                    <li><a href="#">ホステルサービス</a></li>
                    <li><a href="#">居酒屋</a></li>
                    {{-- <li class="menu-has-children">
                        <a href="#">More Services</a>
                        <ul>
                            <li><a href="#">Content Writing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
            <li><a href="about">会社概要</a></li>
            <li><a href="{{ route('contact')}}">お問い合わせ</a></li>
        </ul>
        </div>
    </div>
</header>