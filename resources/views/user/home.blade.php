<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nexiconia Bookstore — thoughtful books for curious readers.">
    <title>Nexiconia Bookstore | Find your next favorite read</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        
        
        section .navigation{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            box-shadow: 0 0 10px #f7a623;
            background: #fff;
            position: fixed;
            left: 0;
            z-index: 100;
        }
        
        section nav .logo img{
            width: 100px;
            cursor: pointer;
            margin: 8px 0;
        }
        
        section nav ul {
    list-style: none;
    padding-top: 20px;
        }

        section nav li {
            display: inline-block;
            position: relative; /* Add this for the dropdown positioning */
            padding: 0 20px 0 20px;
            font-size: large;
        }

        section nav li a {
            text-decoration: none;
            color: #000;
        }

        section nav li a:hover {
            color: #f7a623;
        }

        .dropdown-content {
            display: none; /* Hide the dropdown by default */
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 0; /* Reset padding */
        }

        .dropdown-content li {
            display: block; /* Make sure dropdown items are block elements */
        }

        .dropdown-content li a {
            color: black; /* Set dropdown link color */
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: medium; /* Adjust font size if needed */
        }

        .dropdown-content li a:hover {
            background-color: #f1f1f1; /* Add a background color on hover */
        }

        .dropdown:hover .dropdown-content {
            display: block; /* Show the dropdown on hover */
        }

        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        section nav .box{
          max-width: 400px;
          width: 100%;
        }
        section nav .box .search-box{
          position: relative;
          height: 50px;
          margin: auto;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
          border-radius: 25px;
        }
        
        section nav .search-box input{
         position: absolute;
         height: 100%;
         width: 100%;
         border-radius: 25px;
         background: #fff;
         outline: none;
         border: none;
         padding-left: 20px;
         font-size: 18px;
        }
        section nav .search-box .icon{
          position: absolute;
          right: -2px;
          top: 0;
          width: 50px;
          background: #f7a623;
          height: 100%;
          text-align: center;
          line-height: 50px;
          color: #fff;
          font-size: 20px;
          border-radius: 0 25px 25px 0;
        }
        section nav #check:checked ~ .search-box .icon{
            background: #f7a623;
            color: #FFF;
            width: 60px;
            border-radius: 0 25px 25px 0;
          }
        section nav #check{
            display: none;
          }
        
        
        section nav .social_icon i{
            margin: 0 20px;
            font-size: 30px;
            color: #f7a623;
        }
        
        section nav .social_icon i:hover{
            color: black;
            cursor: pointer;
        }
        
        
        /*Carousel*/
        .carousel {
            width: 100%;
            height: 70vh;
            background-size: cover;
            background-position: center;
            margin-bottom: 30px;
          }
          
          .carousel-inner {
            position: relative;
          }
          
          .carousel-item {
            display: none;
            text-align: center;
          }
          
          .carousel-item:first-child {
            display: block;
          }
          
          .carousel-item img {
            width: 100%;
            height: auto;
          }
          
          .carousel-control-prev,
          .carousel-control-next {
            width: auto;
            height: auto;
            background: none;
            border: none;
            outline: none;
          }
          
          .carousel-control-prev-icon,
          .carousel-control-next-icon {
            color: #000;
            font-size: 40px;
          }
          
          .carousel-control-prev-icon:hover,
          .carousel-control-next-icon:hover {
            color: #f7a623; /* Change to desired color on hover */
          }
        
        
        
        
        /*Books*/
        
        .featured_boks{
            width: 95%;
            padding: 0 0 0 0;
            margin-left: 40px;
            margin-bottom: 50px;
        }
        
        .featured_boks h1{
            display: flex;
            align-items: left;
            justify-content: left;
            font-size: 45px;
            padding: 0 0 40px 0;
        }
        
        .featured_boks .featured_book_box{
            width: 100%;
            height: auto; 
            margin: 0 auto 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;   
            overflow-x: auto;
            white-space: nowrap; 
        }
        
        .featured_boks .featured_book_box .featured_book_card{
            width: 400px;
            height: 510px;
            text-align: center;
            padding: 5px;
            border: 1px solid rgb(145, 145, 145);
            margin: 5px 10px 20px;
            background-color: #fdfafa;
            overflow: hidden; 
        
        }
        
        .featured_boks .featured_book_box .featured_book_card:hover{
            box-shadow: 0 0 5px #f7a623;
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_img img{
            width: 270px;
        }        
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag{
            text-align: left;
            padding-left: 5px;
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag h5{
            margin: 10px;
            margin: 10px;
            width: auto; 
            max-width: 100%; 
            white-space: normal; 
            word-wrap: break-word; 
            word-break: break-word; 
            overflow: hidden; 
             
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag .writer{
            color: #919191;
            text-align: left;
            margin-left: 10px;
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag .categories{
            color: #5e5952;
            margin-top: 8px;
            text-align: left;
            margin-left: 10px;
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price{
            margin-top: 8px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: left;
            margin-left: 10px;
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag .book_price sub{
            font-weight: 100;
            padding: 0 5px;
        }
        
        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag .f_btn{
            padding: 8px 30px;
            border: 2px solid #f7a623;
            text-decoration: none;
            color: #000;
            margin-left: 120px;
        }
        
        ::-webkit-scrollbar{
            width: 10px;
            height: 5px;
        }
        
        ::-webkit-scrollbar-track{
            box-shadow: inset 0 0 8px rgba(0,0,0,0.2);
        }
        
        ::-webkit-scrollbar-thumb{
            background: #f7a623;
            border-radius: 10px;
        }
        
        
        /*Banner*/
        
        .banner_two{
            width: 100%;
            height: 70vh;
            background-image: url('{{ asset('Images/author.png') }}');
            background-size: cover;
            background-position: center;
            margin-bottom: 50px;
        }
        
        
        /*arrivals*/
        
        .arrivals {
        width: 70%;
        max-width: 1200px;
        margin: 0 auto;
        margin-bottom: 50px;
        display: flex;
        flex-direction: column; 
        align-items: center;
    }

        
        .arrivals h1{
            display: flex;
            align-items: left;
            justify-content: left;
            font-size: 45px;
            padding: 0 0 40px 10px;
        }
        
        .arrivals .arrivals_box {
            width: 100%;
            max-width: 1200px; 
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr; 
            grid-gap: 25px;
        }
        
        .arrivals .arrivals_box .arrivals_card{
            width: 250px;
            height: 400px;
            text-align: center;
            padding: 5px;
            border: 1px solid #919191;
            margin: auto 20px 50px 20px;
            background-color: #fdfafa;
        }
        
        .arrivals .arrivals_box .arrivals_card:hover{
            box-shadow: 0 0 5px #f7a623;
        }
        
        .arrivals .arrivals_box .arrivals_card .arrivals_image{
            width: 150px;
            height: 220px;
            margin: 10px auto;
            cursor: pointer;
            box-shadow: 0 0 8px rgba(0,0,0,0.5);
            overflow: hidden;
        }
        
        .arrivals .arrivals_box .arrivals_card .arrivals_image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: 0.3s;
        }
        
        .arrivals .arrivals_box .arrivals_card:hover .arrivals_image img{
            transform: scale(1.1);
        }
        
        .arrivals .arrivals_box .arrivals_card .arrivals_tag p{
            font-family: queen of camelot;
            font-size: 20px;
            margin: 8px 0;
        }
        
        .arrivals .arrivals_box .arrivals_card .arrivals_tag .arrivals_icon{
            color: #f7a623;
            margin-bottom: 18px;
        }
        
        .arrivals .arrivals_box .arrivals_card .arrivals_tag .arrivals_btn{
            padding: 8px 20px;
            border: 2px solid #f7a623;
            text-decoration: none;
            color: #000;
        }
        
        
        
        /*Footer*/
        
        footer{
            width: 100%;
            background: #eaeaea;
        }
        
        footer .footer_main{
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        
        footer .footer_main .tag{
            margin: 10px 0;
        }
        
        footer .footer_main .tag img{
            width: 200px;
            height: 10vh;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        
        footer .footer_main .tag p{
            width: 250px;
            line-height: 22px;
            text-align: justify;
        }
        
        footer .footer_main .tag h1{
            font-size: 25px;
            font-weight: bold;
            margin: 25px 0;
            color: #000;
        }
        
        footer .footer_main .tag a{
            display: block;
            color: black;
            text-decoration: none;
            margin: 10px;
            font-size: 20px;
        }
        
        footer .footer_main .tag i{
            margin-right: 10px;
        }
        
        footer .footer_main .tag .social_link i{
            margin: 0 5px;
        }
        
        footer .end{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            color: #000;
        }
        
        footer .end span{
            color: #f7a623;
            margin-left: 10px;
        }



        .user-icon-container {
            position: relative;
            display: inline-block;
        }

        
        .user-icon {
            cursor: pointer;
        }

        
        .user-dropdown {
            height: 200px;
            position: absolute;
            top: 30px; 
            left: 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 5px;
            display: none;
        }

        
        .user-dropdown a {
            display: block;
            color: #333;
            text-decoration: none;
            padding: 8px 0;
        }

        .user-icon-container:hover .user-dropdown {
            display: inline-block;
        }

    

        /* Nexiconia editorial identity */
        :root {
            --nexiconia-ink: #172a3a;
            --nexiconia-cream: #f8f4ec;
            --nexiconia-paper: #fffdf8;
            --nexiconia-amber: #d9853b;
            --nexiconia-muted: #66717a;
        }

        body {
            background: var(--nexiconia-cream);
            color: var(--nexiconia-ink);
        }

        .navigation {
            min-height: 78px;
            padding: 0 4vw;
            box-shadow: 0 8px 24px rgba(23, 42, 58, .08) !important;
            border-bottom: 1px solid rgba(23, 42, 58, .08);
        }

        .navigation .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 190px;
        }

        .navigation .logo img {
            width: 52px;
            height: 52px;
            object-fit: contain;
            margin: 8px 0;
        }

        .navigation .logo::after {
            content: "NEXICONIA\\A BOOKSTORE";
            white-space: pre;
            color: var(--nexiconia-ink);
            font: 700 13px/1.05 Georgia, serif;
            letter-spacing: .14em;
        }

        .navigation nav,
        .navigation ul {
            padding-top: 0;
        }

        .navigation li {
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .04em;
            text-transform: uppercase;
        }

        .navigation li a {
            color: var(--nexiconia-ink);
        }

        .navigation li a:hover {
            color: var(--nexiconia-amber);
        }

        .navigation .form-inline {
            padding: 10px 0 !important;
        }

        .navigation .form-control {
            min-width: 170px;
            border: 1px solid #d8d0c4;
            border-radius: 999px;
            background: var(--nexiconia-paper);
        }

        .navigation .btn-success,
        .navigation .social_icon i,
        .navigation .social_icon a {
            color: var(--nexiconia-amber) !important;
        }

        .brand-intro {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            padding: 122px 8vw 36px;
            background: var(--nexiconia-cream);
        }

        .brand-intro-copy {
            max-width: 700px;
        }

        .brand-eyebrow {
            margin: 0 0 12px;
            color: var(--nexiconia-amber);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .brand-intro h1 {
            margin: 0;
            color: var(--nexiconia-ink);
            font: 700 clamp(38px, 5vw, 72px)/.98 Georgia, serif;
            letter-spacing: -.035em;
        }

        .brand-intro p {
            max-width: 560px;
            margin: 22px 0 0;
            color: var(--nexiconia-muted);
            font-size: 18px;
            line-height: 1.65;
        }

        .brand-intro-mark {
            display: grid;
            width: 118px;
            height: 118px;
            flex: 0 0 118px;
            place-items: center;
            border: 1px solid var(--nexiconia-amber);
            border-radius: 50%;
            color: var(--nexiconia-amber);
            font: 700 44px Georgia, serif;
            transform: rotate(8deg);
        }

        .nexiconia-toast {
            position: fixed;
            top: 96px;
            right: 24px;
            z-index: 1100;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            width: min(360px, calc(100vw - 32px));
            padding: 16px 18px;
            border: 1px solid rgba(217, 133, 59, .35);
            border-radius: 12px;
            background: var(--nexiconia-paper);
            box-shadow: 0 16px 40px rgba(23, 42, 58, .2);
            color: var(--nexiconia-ink);
            animation: nexiconia-toast-in .25s ease-out;
        }

        .nexiconia-toast-icon {
            display: grid;
            width: 28px;
            height: 28px;
            flex: 0 0 28px;
            place-items: center;
            border-radius: 50%;
            background: #e9f4e8;
            color: #2f7d45;
        }

        .nexiconia-toast strong {
            display: block;
            margin-bottom: 3px;
            font: 700 16px Georgia, serif;
        }

        .nexiconia-toast p {
            margin: 0;
            color: var(--nexiconia-muted);
            font-size: 14px;
        }

        .nexiconia-toast-close {
            margin-left: auto;
            border: 0;
            background: transparent;
            color: var(--nexiconia-muted);
            cursor: pointer;
            font-size: 20px;
            line-height: 1;
        }

        .nexiconia-toast.is-leaving {
            animation: nexiconia-toast-out .2s ease-in forwards;
        }

        @keyframes nexiconia-toast-in {
            from { opacity: 0; transform: translateY(-12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes nexiconia-toast-out {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(-12px); }
        }

        .carousel {
            height: auto;
            margin-bottom: 64px;
            background: var(--nexiconia-ink);
        }

        .carousel-item img {
            display: block;
            max-height: 560px;
            object-fit: cover;
        }

        .featured_boks,
        .arrivals {
            padding-top: 24px;
        }

        .featured_boks h1,
        .arrivals h1 {
            color: var(--nexiconia-ink);
            font: 700 clamp(32px, 4vw, 48px)/1.1 Georgia, serif;
            letter-spacing: -.02em;
        }

        .featured_boks .featured_book_box .featured_book_card,
        .arrivals .arrivals_box .arrivals_card {
            border: 1px solid #e4dbce;
            border-radius: 10px;
            background: var(--nexiconia-paper);
            box-shadow: 0 8px 22px rgba(23, 42, 58, .05);
        }

        .featured_boks .featured_book_box .featured_book_card:hover,
        .arrivals .arrivals_box .arrivals_card:hover {
            box-shadow: 0 14px 28px rgba(23, 42, 58, .12);
            transform: translateY(-3px);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .featured_boks .featured_book_box .featured_book_card .featurde_book_tag h5,
        .arrivals .arrivals_box .arrivals_card .arrivals_tag p {
            color: var(--nexiconia-ink);
            font-family: Georgia, serif;
        }

        footer {
            margin-top: 72px;
            background: var(--nexiconia-ink);
            color: #f7f1e7;
        }

        footer .footer_main .tag h1,
        footer .footer_main .tag a,
        footer .footer_main .tag p,
        footer .end {
            color: #f7f1e7;
        }

        footer .end span {
            color: #f2b56d;
        }

        @media (max-width: 1050px) {
            .navigation {
                flex-wrap: wrap;
                justify-content: center;
                gap: 4px 18px;
                padding: 8px 3vw;
            }

            .navigation .logo {
                min-width: auto;
            }

            .navigation ul {
                order: 3;
                width: 100%;
                text-align: center;
            }

            .brand-intro {
                padding-top: 170px;
            }
        }

        @media (max-width: 600px) {
            .brand-intro {
                padding: 150px 7vw 28px;
            }

            .brand-intro-mark {
                display: none;
            }

            .navigation li {
                padding: 0 8px;
                font-size: 11px;
            }

            .navigation .form-control {
                min-width: 125px;
            }
        }
    </style>
           

</head>
<body>
    @if (session('message'))
        <div class="nexiconia-toast" role="status" aria-live="polite">
            <span class="nexiconia-toast-icon" aria-hidden="true">
                <i class="fa-solid fa-check"></i>
            </span>
            <div>
                <strong>Added to your cart</strong>
                <p>{{ session('message') }}</p>
            </div>
            <button class="nexiconia-toast-close" type="button" aria-label="Close notification">&times;</button>
        </div>
    @endif
    
    <section>
        <nav class="navigation">
            <div class="logo">
                <img src="{{ asset('Images/logo.png') }}" alt="Nexiconia Bookstore logo">
            </div>

            <ul>
                <li><a href="{{url('redirect')}}">Home</a></li>
                <li class="dropdown">
                    <a>Books</a>
                    <ul class="dropdown-content">
                        <li><a href="">Fiction</a></li>
                        <li><a href="">History</a></li>
                        <li><a href="">Poetry</a></li>
                        <li><a href="">Poltical Science</a>
                        <li><a href="">History</a>
                        <li><a href="">Religion</a>
                        <li><a href="">Social Science</a></li>
                    </ul>
                </li>
                
                <li><a href="{{url('about')}}">About</a></li>
                
            </ul>

            <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">
            @csrf
        
            <input class="form-control" type="search" name="search" placeholder="Type here..." style="display: inline-block; width: auto;">
        
            <input type="submit" value="Search" class="btn btn-success" style="display: inline-block; width: auto; background-color: #f7a623; border-color: #f7a623;" > 
        
        </form>
            
           
            

           
                    
                
                <div class="user-icon-container">


                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth

                                <div class="social_icon">
                                    <a href="{{url('showcart')}}" style="font-weight: bold; color: black;">
                                        <i class="fa-solid fa-shopping-cart" style="margin-right: 0;"></i>Cart[{{$count}}]
                                    </a>
                                    

                                <a href="{{ route('profile.show') }}">
                                    <i class="fas fa-user user-icon"></i>
                                </a>
                                
                                
                                @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </div>
                


        </nav>
    </section>
     
    <header class="brand-intro">
        <div class="brand-intro-copy">
            <p class="brand-eyebrow">A quieter place for good stories</p>
            <h1>Find your next<br>favorite read.</h1>
            <p>Explore a thoughtfully selected collection of books for curious minds, generous imaginations, and every kind of reader.</p>
        </div>
        <div class="brand-intro-mark" aria-hidden="true">N</div>
    </header>

    <!--Banner-->

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('Images/main_banner.png') }}" class="d-block w-100" alt="Featured books at Nexiconia Bookstore">
              </div>
          <div class="carousel-item">
            <img src="{{ asset('Images/banner1.png') }}" class="d-block w-100" alt="Explore new books at Nexiconia Bookstore">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('Images/banner2.png') }}" class="d-block w-100" alt="Discover your next read">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



      @include('user.product')



     <!--Banner-->

     <div class="banner_two">
                    
     </div>




    <!--Summer Reads-->

    <div class="featured_boks">

        <h1>Summer Reads</h1>

        <div class="featured_book_box">

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer1.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>The Berenstain Bears' Big Track Meet</h5>
                    <p class="writer">Mike Berenstain</p>
                    <div class="categories">Children's Books</div>
                    <p class="book_price">₱ 250.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="The Berenstain Bears' Big Track Meet">
                        <input type="hidden" name="price" value="250">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer2.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>The Girl with Stars in Her Eyes</h5>
                    <p class="writer"> Xio Axelrod</p>
                    <div class="categories">Teens & Young Adult</div>
                    <p class="book_price">₱ 720.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="The Girl with Stars in Her Eyes">
                        <input type="hidden" name="price" value="720">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer3.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>Psyche and Eros</h5>
                    <p class="writer"> Luna McNamara</p>
                    <div class="categories">Fantasy, Romance</div>
                    <p class="book_price">₱ 999.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="Psyche and Eros">
                        <input type="hidden" name="price" value="999">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer4.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>The School of Good and Evil </h5>
                    <p class="writer">Soman Chainani</p>
                    <div class="categories">Juvenile Fiction</div>
                    <p class="book_price">₱ 450.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="The School of Good and Evil">
                        <input type="hidden" name="price" value="450">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer5.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>How to Kill Your Family</h5>
                    <p class="writer">Bella Mackie</p>
                    <div class="categories">Fiction</div>
                    <p class="book_price">₱ 599.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="How to Kill Your Family">
                        <input type="hidden" name="price" value="599">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>
            
            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer6.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>The 117-Story Treehouse</h5>
                    <p class="writer">Andy Griffiths</p>
                    <div class="categories">Children's Books</div>
                    <p class="book_price">₱ 839.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="The 117-Story Treehouse">
                        <input type="hidden" name="price" value="839">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer7.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>Seconf First Impressions</h5>
                    <p class="writer">Sally Thorne</p>
                    <div class="categories">Contemporary Fiction</div>
                    <p class="book_price">₱ 899.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="Second First Impressions">
                        <input type="hidden" name="price" value="899">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer8.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>All the Light We Cannot See</h5>
                    <p class="writer">Anthony Doerr</p>
                    <div class="categories">Literature & Fiction</div>
                    <p class="book_price">₱ 999.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="All the Light We Cannot See">
                        <input type="hidden" name="price" value="999">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer9.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>What if It's Us</h5>
                    <p class="writer">Becky Albertalli</p>
                    <div class="categories">Teens & Young Adult</div>
                    <p class="book_price">₱ 650.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="What if It's Us">
                        <input type="hidden" name="price" value="650">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="{{ asset('Images\SummerReads\summer10.webp') }}">
                </div>

                <div class="featurde_book_tag">
                    <h5>The House in the Cerulean Sea</h5>
                    <p class="writer">TJ Klune</p>
                    <div class="categories">Science Fiction and Fantasy</div>
                    <p class="book_price">₱ 999.00</p>
                    <form action="{{ route('catalog.add') }}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                        <input type="hidden" name="title" value="The House in the Cerulean Sea">
                        <input type="hidden" name="price" value="999">
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                </div>               

            </div>
            

        </div>

    </div>



    
    <!--Arrivals-->

    <div class="arrivals">
        <h1>New Arrivals</h1>

        <div class="arrivals_box">

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival1.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Memory Piece</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="{{url('p1')}}" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival8.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Pope Francis Life</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="{{url('p2')}}" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival3.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Moriarty Vo. 15</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="{{url('p3')}}" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival4.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Neighborhood Story</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="{{url('p4')}}" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival5.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Nagahama To Be,<br>or Not To Be</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="{{url('p5')}}" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival6.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>The Reappearance<br> of Rachel Price </p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival7.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>My Mama is a<br> Work of Art</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival2.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>How Big Things<br> Get Done</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>


            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival9.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Stitches</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival10.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>ASAP</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival11.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Bride</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival12.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Happy Place</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival13.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Some People<br>Need Killing</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival14.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Pride and Prejudice,<br> Puffin in Bloom</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival15.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Bad Therapy: Why the<br> Kids Aren't Growing Up</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="{{ asset('Images\NewArrivals\arrival16.webp') }}">
                </div>
                <div class="arrivals_tag">
                    <p>Supercommunicators:<br> How to Unlock the Secret</p>
                    <div class="arrivals_icon">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>


        </div>

    </div>


     <!--Footer-->
     
     <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="{{ asset('Images\logo2.png') }}">
                
                   
            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#">Home</a>
                <a href="#">Books</a>
                <a href="#">About</a>
                
            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+63 9123456789</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>nexiconiabookstore@gmail.com</a>
                
            </div>

            <div class="tag">
            <h1>Follow Us</h1>
                    <div class="social_link">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
            </div>
            
                
            

           
        </div>

        <p class="end">NEXICONIA BOOKSTORE COPYRIGHT © 2024. ALL RIGHTS RESERVED.</p>

    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toast = document.querySelector('.nexiconia-toast');
                const closeButton = document.querySelector('.nexiconia-toast-close');

                const dismissToast = function () {
                    if (!toast) {
                        return;
                    }

                    toast.classList.add('is-leaving');
                    setTimeout(function () {
                        toast.remove();
                    }, 200);
                };

                closeButton.addEventListener('click', dismissToast);
                setTimeout(dismissToast, 4000);
            });
        </script>
    @endif

</body>
</html>