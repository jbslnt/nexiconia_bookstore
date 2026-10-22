<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexiconia Bookstore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">


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
        
        
        
        
        /*product*/
        
        .product {
            width: 70%; 
            height: auto;
            margin: 0 auto;
            margin-bottom: 100px;
            position: relative; 
        }
        
        .product::before {
            content: ''; 
            display: block;
            height: 120px; 
            width: 100%; 
        }
        
        .product .product_box{
            width: 100%;
            margin: 0 auto;
        }
        
        .product .product_box .product_card2{
            width: 900px;
            height: 300px;
            text-align: center;
            padding: 5px;
            margin: auto ;
        }
        .product .product_box .product_card2 .product_details {
            margin: 10px 10px 0 10px;
            
        }
        
        .product .product_box .product_card2 .product_details h1 {
            font-size: 30px;
            margin-bottom: 15px;
            font-weight: bold;
            text-align: justify;
        }
        
        .product .product_box .product_card2 .product_details p {
            font-size: 20px;
            margin-bottom: 40px;
            color: #555; 
            text-align: justify;
        }



        /*Banner*/
        .banner_one{
            width: 80%;
            height: 70vh; /* Adjusted height */
            background-image: url('{{ asset('Images/6.png') }}');
            background-position: center;
            margin-bottom: 50px;
            margin-left: 10%;
            align-items: center;
        }

        .banner_two{
            width: 70%;
            height: 70vh; /* Adjusted height */
            background-image: url('{{ asset('Images/7.png') }}');
            background-position: center;
            margin-bottom: 50px;
            margin-left: 15%;
            align-items: center;
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
            border-bottom: 1px solid rgba(23, 42, 58, .08);
            box-shadow: 0 8px 24px rgba(23, 42, 58, .08) !important;
        }

        .navigation .logo img {
            width: 52px;
            height: 52px;
            object-fit: contain;
        }

        .banner_one,
        .banner_two {
            border-radius: 16px;
            box-shadow: 0 18px 45px rgba(23, 42, 58, .14);
        }

        .banner_one {
            margin-top: 110px;
        }

        .product {
            width: min(1100px, 90%);
            padding: 40px 0;
        }

        .product_card2 {
            width: 100% !important;
            height: auto !important;
            padding: 20px 0;
        }

        .product_details {
            padding: 30px clamp(20px, 5vw, 70px);
            border: 1px solid #e4dbce;
            border-radius: 16px;
            background: var(--nexiconia-paper);
            box-shadow: 0 16px 40px rgba(23, 42, 58, .08);
        }

        .product_details h1 {
            color: var(--nexiconia-ink);
            font: 700 clamp(30px, 4vw, 52px)/1.05 Georgia, serif;
        }

        .product_details p {
            color: var(--nexiconia-muted);
            font-size: 18px !important;
            line-height: 1.8;
        }

        footer {
            background: var(--nexiconia-ink);
        }

        footer .footer_main .tag h1,
        footer .footer_main .tag a,
        footer .footer_main .tag p,
        footer .end {
            color: #f7f1e7;
        }
    </style>


</head>
<body>
    
    <!--Navigation Bar-->
    <div class="container">
        <section>
            <nav class="navigation">
                <div class="logo">
                    <img src="{{ asset('Images\logo.png') }}" alt="logo">
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
                    
                    <li><a href="#">About</a></li>
                    
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
     
   
    </div>

     <!--Banner-->

     <div class="banner_one">
                    
     </div>

        <!--About-->
    <div class="product">
        <div class="product_box">

            <div class="product_card2">
                <div class="product_details">
                    <h1>About Us</h1>
                    <p>
                        Embarking on its digital journey in 2024, Nexiconia Bookstore emerged with a singular vision - to ignite the love for reading and learning across the Philippines. With its virtual shelves brimming with literary treasures, Nexiconia began its humble yet impactful voyage, driven by a passion for literature and a commitment to enriching minds.
                    </p>
                </div>
            </div>

        </div>
    </div>


    <!--Banner-->

    <div class="banner_two">
                    
    </div>

        <!--About-->
        <div class="product">
            <div class="product_box">
    
                <div class="product_card2">
                    <div class="product_details">
                        <h1>Empowering Minds, Enriching Lives</h1>
                        <p>
                            At Nexiconia, our mission is to provide access to a diverse range of knowledge and inspiration, fostering a culture of lifelong learning and personal growth. Through our curated selection of books and innovative online platform, we aim to create a vibrant community of readers, thinkers, and learners. We are committed to delivering exceptional service, promoting literacy, and making a positive impact on individuals and communities worldwide.                        </p>
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
                <a href="#"><i class="fa-solid fa-phone"></i>+63 9353611374</a>
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


    
</body>
</html>




                       