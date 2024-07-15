@extends('layouts.welcome')

@section('welcome')
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>会社概要</em></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>会社概要</title>
        <style>
            .company-profile {
                width: 100%;
                max-width: 1200px;
                margin: 50px auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: #fff;
            }
            .company-profile h2 {
                margin-bottom: 30px;
                border-bottom: 2px solid #ed563b;;
                padding-bottom: 10px;
            }
            .company-profile img {
                max-width: 100%;
                height: auto;
                border-radius: 10px;
            }
            .profile-table {
                width: 100%;
                margin-bottom: 20px;
                border-collapse: collapse;
            }
            .profile-table th, .profile-table td {
                border: 1px solid #ddd;
                padding: 10px;
            }
            .profile-table th {
                background-color: #f2f2f2;
                width: 30%;
            }
        </style>
    </head>
    <body>
    
    <div class="company-profile">
        <h2>会社概要</h2>
        <table class="profile-table">
            <tr>
                <th>社名</th>
                <td>株式会社 HORIZON GROUP（英文名称：HORIZON GROUP CORPORATION）</td>
            </tr>
            <tr>
                <th>創業</th>
                <td>2024年（令和5年）6月1日</td>
            </tr>
            <tr>
                <th>事業内容</th>
                <td>電気通信事業</td>
            </tr>
            <tr>
                <th>本社所在地</th>
                <td>東京都新宿区百人町1-20-3 バラードハイム806</td>
            </tr>
            <tr>
                <th>本店所在地</th>
                <td>東京都新宿区百人町1-20-3 バラードハイム806</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>03-5497-8734（本社代表）（有料）</td>
            </tr>
            <tr>
                <th>代表取締役社</th>
                <td>DANGI TILAK <br>
                    SANTOSH SUBEDI
                </td>
            </tr>
            <tr>
                <th>資本金</th>
                <td>1000万円</td>
            </tr>
            <tr>
                <th>社員数</th>
                <td>5名</td>
            </tr>
        </table>
    </div>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            
        </div>
    </footer>

    <style>


        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, div
        pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q,
        s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li,
        figure, header, nav, section, article, aside, footer, figcaption {
          margin: 0;
          padding: 0;
          border: 0;
          outline: 0;
        }
        
        .clearfix:after {
          content: ".";
          display: block;
          clear: both;
          visibility: hidden;
          line-height: 0;
          height: 0;
        }
        
        .clearfix {
          display: inline-block;
        }
        
        html[xmlns] .clearfix {
          display: block;
        }
        
        * html .clearfix {
          height: 1%;
        }
        
        ul, li {
          padding: 0;
          margin: 0;
          list-style: none;
        }
        
        header, nav, section, article, aside, footer, hgroup {
          display: block;
        }
        
        * {
          box-sizing: border-box;
        }
        
        html, body {
          font-family: 'Poppins', sans-serif;
          font-weight: 400;
          background-color: #fff;
          font-size: 16px;
          -ms-text-size-adjust: 100%;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }
        
        a {
          text-decoration: none !important;
        }
        
        h1, h2, h3, h4, h5, h6 {
          margin-top: 0px;
          margin-bottom: 0px;
        }
        
        ul {
          margin-bottom: 0px;
        }
        
        p {
          font-size: 14px;
          line-height: 25px;
          color: #7a7a7a;
        }
        
        /* 
        ---------------------------------------------
        global styles
        --------------------------------------------- 
        */
        html,
        body {
          background: #fff;
          font-family: 'Poppins', sans-serif;
        }
        
        ::selection {
          background: #ed563b;
          color: #fff;
        }
        
        ::-moz-selection {
          background: #ed563b;
          color: #fff;
        }
        
        @media (max-width: 991px) {
          html, body {
            overflow-x: hidden;
          }
          .mobile-top-fix {
            margin-top: 30px;
            margin-bottom: 0px;
          }
          .mobile-bottom-fix {
            margin-bottom: 30px;
          }
          .mobile-bottom-fix-big {
            margin-bottom: 60px;
          }
        }
        
        .section-heading {
          text-align: center;
          margin-top: 140px;
          margin-bottom: 80px;
        }
        
        .section-heading h2 {
          font-size: 28px;
          font-weight: 800;
          color: #232d39;
          text-transform: uppercase;
          letter-spacing: 0.5px;
          margin-top: 0px;
          margin-bottom: 0px;
        }
        
        .section-heading h2 em {
          font-style: normal;
          color: #ed563b;
        }
        
        .section-heading img {
          margin: 20px auto;
        }
        
        .dark-bg h2 {
          color: #fff;
        }
        
        .dark-bg p {
          color: #fff;
        }
        
        .main-button a {
          display: inline-block;
          font-size: 15px;
          padding: 12px 20px;
          background-color: #ed563b;
          color: #fff;
          text-align: center;
          font-weight: 400;
          text-transform: uppercase;
          transition: all .3s;
        }
        
        .main-button a:hover {
          background-color: #f9735b;
          color: #fff;
        }
        
        /* 
        ---------------------------------------------
        banner
        --------------------------------------------- 
        */
        
        .main-banner {
          position: relative;
        }
        
        #bg-video {
            min-width: 100%;
            min-height: 100vh;
            max-width: 100%;
            max-height: 100vh;
            object-fit: cover;
            z-index: -1;
        }
        
        #bg-video::-webkit-media-controls {
            display: none !important;
        }
        
        .video-overlay {
            position: absolute;
            background-color: rgba(35,45,57,0.8);
            top: 0;
            left: 0;
            bottom: 7px;
            width: 100%;
        }
        
        .main-banner .caption {
          text-align: center;
          position: absolute;
          width: 80%;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
        }
        
        .main-banner .caption h6 {
          margin-top: 0px;
          font-size: 18px;
          text-transform: uppercase;
          font-weight: 800;
          color: #fff;
          letter-spacing: 0.5px;
        }
        
        .main-banner .caption h2 {
          margin-top: 30px;
          margin-bottom: 25px;
          font-size: 40px;
          text-transform: uppercase;
          font-weight: 800;
          color: #fff;
          letter-spacing: 1px;
        }
        
        .main-banner .caption h2 em {
          font-style: normal;
          color: #ed563b;
          font-weight: 900;
        }
        
        
        /*
        ---------------------------------------------
        features
        ---------------------------------------------
        */
        
        #features {
          margin-bottom: 80px;
        }
        
        .feature-item {
          display: inline-block;
          margin-bottom: 60px;
        }
        
        .feature-item .left-icon img {
          float: left;
          margin-right: 30px;
        }
        
        .feature-item .right-content {
          display: inline;
        }
        
        .feature-item .right-content h4 {
          margin-top: 0px;
          margin-bottom:  7px;
          letter-spacing: 0.25px;
          color: #232d39;
          font-size: 19px;
          font-weight: 600;
          text-transform: capitalize;
        }
        
        .feature-item .right-content a.text-button {
          margin-top: 7px;
          display: inline-block;
          font-size: 13px;
          text-transform: uppercase;
          color: #ed563b;
          font-weight: 500;
        }
        
        /*
        ---------------------------------------------
        subscribe
        ---------------------------------------------
        */
        
        #call-to-action {
          padding: 120px 0px;
          background-image: url(../images/cta-bg.jpg);
          background-position: center center;
          background-repeat: no-repeat;
          background-size: cover;
          text-align: center;
        }
        
        .cta-content h2 {
          font-size: 36px;
          text-transform: uppercase;
          font-weight: 800;
          color: #fff;
          letter-spacing: 1px;
        }
        
        .cta-content h2 em {
          font-style: normal;
          color: #ed563b;
        }
        
        .cta-content p {
          font-size: 16px;
          color: #fff;
          margin: 15px 0px 25px 0px;
        }
        
        
        
        /*
        --------------------------------------------
        Our Classes
        --------------------------------------------
        */
        
        #our-classes {
          margin-bottom: 140px;
        }
        
        #tabs ul {
          margin: 0;
          padding: 0;
        }
        #tabs ul li {
          margin-bottom: 30px;
          display: inline-block;
          width: 100%;
        }
        #tabs ul li:last-child {
          margin-bottom: 0px;
        }
        #tabs ul li a {
          text-transform: capitalize;
          width: 100%;
          padding: 30px 30px;
          display: inline-block;
          background-color: #fff;
          box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
          border-radius: 5px;
          font-size: 19px;
          color: #232d39;
          letter-spacing: 0.5px;
          font-weight: 600;
          transition: all 0.3s;
        }
        #tabs .main-rounded-button a {
          text-align: center;
          padding: 20px 30px;
          width: 100%;
          border-radius: 5px;
          display: inline-block;
          box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
          color: #fff;
          font-size: 19px;
          letter-spacing: 0.5px;
          font-weight: 600;
          background-color: #ed563b;
        }
        #tabs .main-rounded-button a:hover {
          background-color: #f9735b;
        }
        #tabs ul li a .fa {
          font-size: 32px;
          height: 32px;
          color: #ed563b;
          margin-right: 15px;
          display: inline-block;
        }
        #tabs ul .ui-tabs-active span {
          background: #faf5b2;
          border: #faf5b2;
          line-height: 90px;
          border-bottom: none;
        }
        #tabs ul .ui-tabs-active a {
          color: #ed563b;
        }
        #tabs ul .ui-tabs-active span {
          color: #1e1e1e;
        }
        .tabs-content {
          margin-left: 30px;
          text-align: left;
          display: inline-block;
          transition: all 0.3s;
        }
        .tabs-content img {
          max-width: 100%;
          overflow: hidden;
          border-radius: 5px;
        }
        .tabs-content h4 {
          font-size: 23px;
          font-weight: 700;
          color: #232d39;
          letter-spacing: 0.5px;
          margin-bottom: 20px;
          margin-top: 30px;
        }
        .tabs-content p {
          font-size: 14px;
          color: #7a7a7a;
          margin-bottom: 28px;
        }
        
        
        /* 
        ---------------------------------------------
        schedule
        --------------------------------------------- 
        */
        
        .section-bg {
          background-position: center center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }
        
        .section-bg:before {
          content:'';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(35,45,57,0.8);
        }
        
        .section-bg > form,
        .section-bg .container {
          position: relative;
          z-index: 2
        }
        
        #schedule {
          padding: 0px 0px 140px 0px;
        }
        
        #schedule table {
          width: 100%;
          text-align: center;
          border: 1px solid #fff;
        }
        
        #schedule table tbody {
          border-top: 1px solid #fff; 
        }
        
        #schedule table tbody tr {
          border-bottom: 1px solid #fff;
        }
        
        #schedule table tbody tr td {
          border-right: 1px solid #fff;
          height: 100px;
        }
        
        #schedule table tr td {
          color: #fff;
          font-size: 13px;
          text-transform: capitalize;
          font-weight: 500;
          letter-spacing: 0.25px;
        }
        
        .schedule-table.filtering .ts-item {
            opacity: 0;
            transition: all 0.5s;
        }
        
        .schedule-table.filtering .ts-item.show {
            opacity: 1;
            transition: all 0.5s;
        }
        
        #schedule .filters {
          margin-bottom: 40px;
        }
        #schedule .filters ul {
          padding: 0;
          text-align: center;
        }
        #schedule .filters ul li {
          list-style: none;
          display: inline;
          cursor: pointer;
          position: relative;
          margin-right: 10px;
          font-size: 15px;
          font-weight: 500;
          color: #fff;
          text-transform: capitalize;
          -webkit-transition: all 0.3s ease-in-out;
          -moz-transition: all 0.3s ease-in-out;
          -o-transition: all 0.3s ease-in-out;
          -ms-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out;
        }
        #schedule .filters ul li:after {
          content: "/";
          margin-left: 10px;
          color: #fff;
        }
        #schedule .filters ul li:last-child {
          margin-right: 0px;
        }
        #schedule .filters ul li:last-child::after {
          display: none;
        }
        #schedule .filters ul li.active,
        #schedule .filters ul li:hover {
          color: #ed563b;
        }
        #schedule .filters-content {
          margin-top: 50px;
        }
        #schedule .filters-content .show {
          opacity: 1;
          visibility: visible;
          transition: all 350ms;
        }
        #schedule .filters-content .hide {
          opacity: 0;
          visibility: hidden;
          transition: all 350ms;
        }
        
        
        /* 
        ---------------------------------------------
        trainers
        --------------------------------------------- 
        */
        
        #trainers { 
          padding-bottom: 90px; 
        }
        
        #trainers .trainer-item {
          background-color: #fff;
          border-radius: 5px;
          box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
          padding: 15px;
          margin-bottom: 30px;
        }
        
        #trainers .trainer-item img {
          width: 100%;
          border-radius: 5px;
        }
        
        #trainers .trainer-item span {
          font-size: 13px;
          font-weight: 500;
          color: #ed563b;
          display: inline-block;
          margin-top: 25px;
          margin-bottom: 10px;
        }
        
        #trainers .trainer-item h4 {
          font-size: 19px;
          font-weight: 600;
          color: #232d39;
          letter-spacing: 0.5px;
          margin-bottom: 18px;
        }
        
        #trainers .trainer-item p {
          margin-bottom: 20px;
        }
        
        ul.social-icons li {
          display: inline-block;
          margin-right: 12px;
        }
        
        ul.social-icons li:last-child {
          margin-right: 0px;
        }
        
        ul.social-icons li a {
          color: #232d39;
          transition: all .3s;
        }
        
        ul.social-icons li a:hover {
          color: #ed563b;
        }
        
        
        /* 
        ---------------------------------------------
        contact
        --------------------------------------------- 
        */
        
        #contact-us {
          margin-top: 140px;
        }
        
        #contact-us .container-fluid .col-lg-6 {
          padding: 0px;
        }
        
        #contact-us .contact-form {
          padding: 80px;
          background-image: url(../images/contact-bg.jpg);
          background-position: center center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        
        #contact-us .contact-form #contact {
          background-color: #fff;
          padding: 40px;
          border-radius: 5px;
        }
        
        .contact-form select,
        .contact-form input,
        .contact-form textarea {
          color: #7a7a7a;
          font-size: 13px;
          border: 1px solid #ddd;
          background-color: #fff;
          width: 100%;
          height: 40px;
          outline: none;
          line-height: 40px;
          padding: 0px 10px;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          margin-bottom: 30px;
        }
        
        .contact-form textarea {
          height: 150px;
          resize: none;
        }
        
        .contact-form ::-webkit-input-placeholder { /* Edge */
          color: #7a7a7a;
        }
        
        .contact-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
          color: #7a7a7a;
        }
        
        .contact-form ::placeholder {
          color: #7a7a7a;
        }
        
        .contact-form button {
          display: inline-block;
          font-size: 13px;
          padding: 11px 17px;
          background-color: #ed563b;
          color: #fff;
          text-align: center;
          font-weight: 400;
          text-transform: uppercase;
          transition: all .3s;
          border: none;
          outline: none;
          margin-top: -8px;
        }
        
        .contact-form button:hover {
          background-color: #f9735b;
        }
        
        
        
        
        /* 
        ---------------------------------------------
        footer
        --------------------------------------------- 
        */
        footer {
          text-align: center;
          padding: 30px 0px;
        }
        
        footer p {
          color: #232d39;
          font-size: 13px;
        }
        
        footer p a {
          cursor: pointer;
          color: #ed563b;
        }
        
        footer p a:hover {
          color: #ed563b;
        }
        
        
        
        /* 
        ---------------------------------------------
        preloader
        --------------------------------------------- 
        */
        
        .js-preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #232d39;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            visibility: visible;
            z-index: 9999;
            -webkit-transition: opacity 0.25s ease;
            transition: opacity 0.25s ease;
        }
        
        .js-preloader.loaded {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        
        @-webkit-keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }
        
        @keyframes dot {
            50% {
                -webkit-transform: translateX(96px);
                transform: translateX(96px);
            }
        }
        
        @-webkit-keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }
        
        @keyframes dots {
            50% {
                -webkit-transform: translateX(-31px);
                transform: translateX(-31px);
            }
        }
        
        .preloader-inner {
            position: relative;
            width: 142px;
            height: 40px;
            background: #232d39;
        }
        
        .preloader-inner .dot {
            position: absolute;
            width: 16px;
            height: 16px;
            top: 12px;
            left: 15px;
            background: #fff;
            border-radius: 50%;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-animation: dot 2.8s infinite;
            animation: dot 2.8s infinite;
        }
        
        .preloader-inner .dots {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            margin-top: 12px;
            margin-left: 31px;
            -webkit-animation: dots 2.8s infinite;
            animation: dots 2.8s infinite;
        }
        
        .preloader-inner .dots span {
            display: block;
            float: left;
            width: 16px;
            height: 16px;
            margin-left: 16px;
            background: #fff;
            border-radius: 50%;
        }
        
        
        /* 
        ---------------------------------------------
        responsive
        --------------------------------------------- 
        */
        
        
        @media (max-width: 992px) {
        
          .main-banner .caption h2 {
            font-size: 40px;
          }
          #features {
            margin-bottom: 110px;
          }
          #features .feature-item {
            margin-bottom: 30px;
          }
          #our-classes .tabs-content {
            margin-left: 0px;
            margin-top: 30px;
          }
          .trainer-item {
            margin-bottom: 30px;
          }
          #contact-us #map {
            margin-bottom: -7px;
          }
          #contact-us .contact-form {
            padding: 30px;
          }
          #contact-us .contact-form #contact {
            padding: 30px;
          }
        
        }
        
        @media (max-width: 450px) {
          .feature-item .right-content a.text-button {
            margin-left: 130px;
          }
        }
        
        .dropdown-menu {
          background: rgba(0,0,0,0.2);
          padding: 0;
          border-radius: 0;
        }
        
        .background-header .dropdown-menu {
          background: rgba(250,250,250,0.9);
        }
        
        .dropdown-menu a {
          line-height: 1.3;
          color: #fff;
        }
        
        
        .background-header .main-nav .nav li a:hover,
        .background-header .main-nav .nav li a.active,
        .dropdown-menu a.active,
        .dropdown-menu a:hover {
          background: transparent;
          color: #ed563b!important;
        }
        
        .pagination-lg .page-link {
          color: #ed563b;
        }
        
        .btn-primary {
          border-color: #ed563b;
          background-color: #ed563b;
        }
        
        .btn-primary:not(:disabled):not(.disabled).active, 
        .btn-primary:not(:disabled):not(.disabled):active, 
        .show>.btn-primary.dropdown-toggle,
        .btn-primary:active,
        .btn-primary:active:focus,
        .btn-primary:focus,
        .btn-primary:hover {
          background-color: #f9735b;
          border-color: #f9735b;
          outline: none;
        }
        
        .icon {
          width: 72px;
          height: 72px;
          border-radius: 5px;
          color: #fff;
          background-color: #ed563b;
          font-size: 30px;
          margin: 0 auto 15px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        
        a {
          color: #ed563b;
        }
        
        /* a:focus,
        a:hover {
          color: #f9735b;
        } */
        
        .social-icons a {
          margin: 0 10px;
          text-decoration: none;
          font-size: 24px;
          color: #000;
        }
        
        </style>

  </body>
</html>

@endsection