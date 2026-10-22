<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Website</title>
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
            padding-top: 50px; 
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
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 25px 0;
        }
        
        .product .product_box .product_card{
            width: 400px;
            height: 600px;
            text-align: center;
            padding: 5px;
            background-color: #FFFFFF;
            margin: auto 20px 50px 20px;
        }
        
        .product .product_box .product_card .product_image {
            width: 350px;
            height: 400px;
            margin: 20px auto 10px;
            cursor: pointer;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        
        .product .product_box .product_card .product_image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; 
            transition: 0.3s;
            margin-top: 20px;
            
        }
        
        /*product details*/
        
        .product .product_box .product_card2{
            width: 800px;
            height: 600px;
            text-align: center;
            padding: 5px;
            margin: auto 20px 50px 20px;
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
        
        .product .product_box .product_card2 .product_details h2 {
            font-size: 18px;
            margin-bottom: 15px;
            text-align: justify;
            color: #778899;
        }
        
        .product .product_box .product_card2 .product_details h3 {
            font-size: 24px;
            margin-bottom: 15px;
            text-align: justify;
            font-weight: bold;
        }
        
        .product .product_box .product_card2 .product_details h4 {
            font-size: 18px;
            margin-bottom: 15px;
            text-align: justify;
            color: #000000;
        }
        
        .product .product_box .product_card2 .product_details p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #555; 
            text-align: justify;
        }
        
        
        /*Quantity*/
        .form-control{
           width: 50px; 
           margin-right: 5px; 
           display: inline-block; 
           text-align: center; 
           border: 1px solid #ccc; 
           border-radius: 5px; 
           padding: 5px; 
           font-size: 16px;">

        }

        /*Cart*/

        .btn-primary {
        background-color: #f7a623;
        border-color: #f7a623;
        display: inline-block;
        width: auto;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s, border-color 0.3s; /* Add transition for smoother effect */
        margin: 20px 0 20px 20px;
    }

    
        .btn-primary:hover {
        background-color: #ffcc66; /* Change to a lighter shade or different color */
        border-color: #ffcc66; /* Change to match the background color */
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
    </style>


    <link rel="stylesheet" href="{{ asset('css/nexiconia-customer.css') }}">
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
            
                <input class="form-control" type="search" name="search" placeholder="" style="display: inline-block; width: auto;">
            
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

        <!--Product Description-->
    <div class="product">
        <div class="product_box">

            <div class="product_card">
                <div class="product_image">
                    <img src="{{ asset('Images\NewArrivals\arrival3.webp') }}">
                </div>
            </div>

            <div class="product_card2">
                <div class="product_details">
                    <h1>Moriarty the Patriot, Vol. 15  </h1>
                    <h2>By Ryosuke Takeuchi</h2>
                    <h3>Ã¢â€šÂ±671.00</h3>
                    <h4>Genre: Manga, Action & Adventure</h4>
                    <p>
                        The untold story of Sherlock HolmesÃ¢â‚¬â„¢ greatest rival, Moriarty!
                        <br><br>
                        Before he was SherlockÃ¢â‚¬â„¢s rival, Moriarty fought against the unfair class caste system in London by making sure corrupt nobility got their comeuppance. But even the most well-intentioned plans can spin out of controlÃ¢â‚¬â€will MoriartyÃ¢â‚¬â„¢s dream of a more just and equal world turn him into a heroÃ¢â‚¬Â¦or a monster?
                        <br><br>
                        Three years after the fateful night when William and Sherlock disappeared under the waves of the Thames, MI6 takes on a covert mission to stop a leak of sensitive information that could disrupt the balance of power between Great Britain and Russia. One stray bullet winds up revealing the existence of someone unexpected hiding behind the scenes, however. As rumblings of a great world war begin, it may finally be time to repent for the crimes of the pastÃ¢â‚¬Â¦
                        </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Quantity and Add to Cart Section -->
<div class="quantity" style="display: flex; align-items: center; margin-top: 50px; margin-left: 73%;">
    <form action="" method="" class="form-inline" style="float: right; margin-right: 10px;">
        @csrf
    
        <input type="number" value="1" min="1" class="form-control" name="quantity" >
    
        <input class="btn btn-primary" type="submit" value="Add to Cart" >
    </form>
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

        <p class="end">NEXICONIA BOOKSTORE COPYRIGHT Ã‚Â© 2024. ALL RIGHTS RESERVED.</p>

    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
</body>
</html>




                       