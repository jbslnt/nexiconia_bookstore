<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nexiconia Bookstore — discover books worth keeping.">
    <title>Nexiconia Bookstore | Discover your next read</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/modern-storefront.css') }}">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ url('/') }}" aria-label="Nexiconia Bookstore home">
            <span class="brand-mark">N</span>
            <span><strong>Nexiconia</strong><small>BOOKSTORE</small></span>
        </a>

        <nav class="main-nav" aria-label="Main navigation">
            <a class="active" href="{{ url('/') }}">Home</a>
            <a href="#catalog">Browse books</a>
            <a href="{{ url('about') }}">About</a>
        </nav>

        <div class="header-actions">
            <form class="search-form" action="{{ url('search') }}" method="get">
                <label class="sr-only" for="site-search">Search books</label>
                <input id="site-search" type="search" name="search" placeholder="Search books...">
                <button type="submit" aria-label="Search"><span>⌕</span></button>
            </form>
            @auth
                <a class="cart-link" href="{{ url('showcart') }}" aria-label="View cart">
                    <span>Bag</span><b>{{ $count ?? 0 }}</b>
                </a>
                <a class="account-link" href="{{ route('profile.show') }}" aria-label="Your profile">◎</a>
            @else
                <a class="text-link" href="{{ route('login') }}">Sign in</a>
                <a class="button button-small" href="{{ route('register') }}">Join</a>
            @endauth
        </div>
    </header>

    @if (session('message'))
        <div class="toast" role="status">
            <span class="toast-check">✓</span>
            <span>{{ session('message') }}</span>
        </div>
    @endif

    <main>
        <section class="hero">
            <div class="hero-copy">
                <p class="eyebrow">Curated for curious minds</p>
                <h1>Stories that stay with <em>you.</em></h1>
                <p class="hero-description">Find your next favorite book from a collection made for slow mornings, long journeys, and everything in between.</p>
                <div class="hero-actions">
                    <a class="button" href="#catalog">Explore the collection <span>→</span></a>
                    <a class="quiet-link" href="#new-arrivals">See new arrivals <span>↗</span></a>
                </div>
                <div class="hero-meta"><span><strong>1,200+</strong> titles to explore</span><span><strong>Free</strong> local delivery</span></div>
            </div>
            <div class="hero-art">
                <div class="hero-orbit hero-orbit-one"></div>
                <div class="hero-orbit hero-orbit-two"></div>
                <img src="{{ asset('Images/main_banner.png') }}" alt="Featured books from Nexiconia Bookstore">
                <div class="hero-note">READ<br>MORE<br>WONDER</div>
            </div>
        </section>

        <section class="section" id="catalog">
            <div class="section-heading">
                <div><p class="eyebrow">Handpicked for you</p><h2>Trending now</h2></div>
                <a class="quiet-link" href="#catalog">View all books <span>→</span></a>
            </div>
            @include('user.product')
        </section>

        <section class="feature-strip">
            <div><span class="feature-icon">✦</span><strong>Thoughtfully curated</strong><small>Books chosen with intention</small></div>
            <div><span class="feature-icon">⌁</span><strong>Easy, secure checkout</strong><small>A better way to buy books</small></div>
            <div><span class="feature-icon">♡</span><strong>For every kind of reader</strong><small>Stories for every season</small></div>
        </section>

        @php
            $summerReads = [
                ['image' => 'summer1.webp', 'title' => "The Berenstain Bears' Big Track Meet", 'author' => 'Mike Berenstain', 'genre' => "Children's Books", 'price' => 250],
                ['image' => 'summer2.webp', 'title' => 'The Girl with Stars in Her Eyes', 'author' => 'Xio Axelrod', 'genre' => 'Teens & Young Adult', 'price' => 720],
                ['image' => 'summer3.webp', 'title' => 'Psyche and Eros', 'author' => 'Luna McNamara', 'genre' => 'Fantasy, Romance', 'price' => 999],
                ['image' => 'summer4.webp', 'title' => 'The School of Good and Evil', 'author' => 'Soman Chainani', 'genre' => 'Juvenile Fiction', 'price' => 450],
            ];
        @endphp
        <section class="section" id="summer-reads">
            <div class="section-heading"><div><p class="eyebrow">Seasonal picks</p><h2>Summer reads</h2></div><span class="section-caption">Made for bright days and open pages.</span></div>
            <div class="book-grid">
                @foreach ($summerReads as $book)
                    <article class="book-card">
                        <div class="book-cover"><img src="{{ asset('Images/SummerReads/' . $book['image']) }}" alt="{{ $book['title'] }}"></div>
                        <div class="book-info"><p class="book-genre">{{ $book['genre'] }}</p><h3>{{ $book['title'] }}</h3><p class="book-author">{{ $book['author'] }}</p><div class="book-footer"><strong>₱ {{ number_format($book['price'], 2) }}</strong><form action="{{ route('catalog.add') }}" method="POST">@csrf<input type="hidden" name="title" value="{{ $book['title'] }}"><input type="hidden" name="price" value="{{ $book['price'] }}"><input type="hidden" name="quantity" value="1"><button class="icon-button" type="submit" aria-label="Add {{ $book['title'] }} to cart">+</button></form></div></div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="editorial-banner editorial-banner-text-only" id="new-arrivals">
            <div><p class="eyebrow">The latest chapter</p><h2>New arrivals<br>for new perspectives.</h2><a class="button button-light" href="{{ url('p1') }}">Discover what's new <span>→</span></a></div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-brand"><span class="brand-mark">N</span><h2>Nexiconia</h2><p>A quieter place for good stories.</p></div>
        <div><h3>Explore</h3><a href="{{ url('/') }}">Home</a><a href="#catalog">Browse books</a><a href="{{ url('about') }}">About us</a></div>
        <div><h3>Contact</h3><a href="mailto:nexiconiabookstore@gmail.com">nexiconiabookstore@gmail.com</a><a href="tel:+639353611374">+63 935 361 1374</a></div>
        <div class="footer-bottom"><span>© {{ date('Y') }} Nexiconia Bookstore</span><span>Made for readers.</span></div>
    </footer>
</body>
</html>
