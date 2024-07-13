<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" width="60" title="" /></a><span class="h5">株式会社 HORIZON GROUP</h5>  
           
          </div>
          <ul class="nav-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="menu-has-children">
                <a href="#">Services</a>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">SEO</a></li>
                    <li class="menu-has-children">
                        <a href="#">More Services</a>
                        <ul>
                            <li><a href="#">Content Writing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>
    </div>
</header>