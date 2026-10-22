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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
           
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
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
        

        .content-wrapper {
            margin-top: 120px; 
            flex: 1;
        }

        .product {
            width: 100%; 
            margin: 0 auto;
            padding-top: 50px;
            margin-bottom: 100px;
        }

        .table-container {
            width: 90%;
            padding: 20px;
            background-color: #ffffff; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            color: #000000;
            margin-left: 5%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Ensures the table layout is fixed */
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
            word-wrap: break-word; /* Ensures long words wrap to the next line */
            vertical-align: middle; /* Vertically centers the content */
        }

        table th {
            background-color: black;
            color: white;
        }

        table td.center {
            text-align: center; /* Horizontally centers the content */
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

        .confirm-button-container {
            text-align: right;
        }


        /*Footer*/
        
        footer{
            width: 100%;
            background: #eaeaea;
            flex-shrink: 0;
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

        :root {
            --nexiconia-ink: #172a3a;
            --nexiconia-cream: #f8f4ec;
            --nexiconia-paper: #fffdf8;
            --nexiconia-amber: #d9853b;
        }

        body {
            background: var(--nexiconia-cream);
            color: var(--nexiconia-ink);
        }

        .table-container {
            border: 1px solid #e4dbce;
            background: var(--nexiconia-paper);
            box-shadow: 0 18px 45px rgba(23, 42, 58, .09);
        }

        .table-container h1 {
            color: var(--nexiconia-ink);
            font: 700 38px Georgia, serif;
        }

        table th {
            background: var(--nexiconia-ink);
            border-color: var(--nexiconia-ink);
            font-size: 13px;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        table td {
            border-color: #e4dbce;
        }

        .confirm-button-container .btn-success {
            background-color: var(--nexiconia-amber) !important;
            border-color: var(--nexiconia-amber) !important;
            border-radius: 999px;
            padding: 10px 22px;
            font-weight: 700;
        }

        .confirm-button-container .btn-success:hover {
            background-color: var(--nexiconia-ink) !important;
            border-color: var(--nexiconia-ink) !important;
        }
    </style>
</head>
<body>

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
     

    <div class="content-wrapper">
        <div class="product">
            <div class="table-container">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: relative; padding-right: 50px;">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form action="{{url('order')}}" method="POST">
                    @csrf
                    <table>
                        <thead>
                            <tr>
                                <th>Book Title</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (($cart) as $carts)
                            <tr>
                                <td>
                                    <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
                                    {{$carts->product_title}}
                                </td>
                                <td>
                                    <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden>
                                    {{$carts->quantity}}
                                </td>
                                <td>
                                    <input type="text" name="price[]" value="{{$carts->price}}" hidden>
                                    {{$carts->price}}
                                </td>
                                <td class="center">
                                    <a href="{{url('delete', $carts->id)}}">
                                        <i class="fa-solid fa-trash" style="color: black;"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="confirm-button-container">
                        <button class="btn btn-success" style="margin-top: 50px; background-color: #f7a623; border-color: #f7a623;">Confirm Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





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
``
