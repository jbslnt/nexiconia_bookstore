<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about Nexiconia Bookstore and our mission to help readers find meaningful stories.">
    <title>About Nexiconia | Nexiconia Bookstore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/modern-storefront.css') }}">
    <style>
        .about-page { max-width: 1280px; margin: auto; padding: 76px clamp(20px, 6vw, 90px) 90px; }
        .about-hero { display: grid; grid-template-columns: 1fr .9fr; gap: 70px; align-items: center; padding-bottom: 85px; }
        .about-hero h1 { max-width: 650px; margin: 0; font: 700 clamp(46px, 6vw, 78px)/.98 "Playfair Display", serif; letter-spacing: -.06em; }
        .about-hero h1 em { color: var(--accent); font-style: normal; }
        .about-lead { max-width: 520px; margin: 24px 0 30px; color: var(--muted); font-size: 16px; line-height: 1.8; }
        .about-art { position: relative; }
        .about-art img { display: block; width: 100%; aspect-ratio: 619 / 515; object-fit: contain; border-radius: 24px; box-shadow: 20px 24px 0 #e9ded3; }
        .about-brand-art { position: relative; display: grid; width: 100%; aspect-ratio: 619 / 515; place-items: center; overflow: hidden; border-radius: 24px; background-color: #f1df9e; background-image: linear-gradient(45deg, rgba(255,255,255,.35) 25%, transparent 25%), linear-gradient(-45deg, rgba(255,255,255,.3) 25%, transparent 25%), radial-gradient(circle at 20% 25%, #fff 0 2px, transparent 3px), radial-gradient(circle at 75% 70%, #8d8c82 0 3px, transparent 4px); background-position: 0 0, 20px 20px, 0 0, 0 0; background-size: 40px 40px, 40px 40px, 90px 80px, 120px 110px; box-shadow: 20px 24px 0 #e9ded3; }
        .about-brand-art::before { position: absolute; inset: 0; background: repeating-linear-gradient(120deg, transparent 0 46px, rgba(91,91,83,.2) 47px 49px, transparent 50px 92px); content: ""; opacity: .65; }
        .about-brand-name { position: relative; z-index: 1; color: #050505; font: 700 clamp(36px, 6vw, 78px)/.85 Georgia, serif; letter-spacing: -.08em; text-align: center; text-shadow: 2px 2px 0 rgba(255,255,255,.25); }
        .about-brand-name small { display: block; margin-top: 20px; font: 700 clamp(14px, 2vw, 24px)/1 "DM Sans", sans-serif; letter-spacing: .02em; }
        .about-art::before { position: absolute; inset: 8% -8% 8% 8%; border: 1px solid #dfc4af; border-radius: 50%; content: ""; transform: rotate(-18deg); }
        .about-stamp { position: absolute; right: -18px; bottom: 12px; display: grid; width: 92px; height: 92px; place-items: center; border-radius: 50%; background: var(--accent); color: #fff; font-size: 10px; font-weight: 700; letter-spacing: .12em; line-height: 1.4; text-align: center; transform: rotate(10deg); }
        .about-numbers { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; margin-bottom: 90px; border: 1px solid var(--line); background: var(--line); }
        .about-number { padding: 28px; background: var(--paper); }
        .about-number strong { display: block; color: var(--accent); font: 700 34px "Playfair Display", serif; }
        .about-number span { color: var(--muted); font-size: 12px; }
        .about-section { display: grid; grid-template-columns: .7fr 1.3fr; gap: 70px; padding: 75px 0; border-top: 1px solid var(--line); }
        .about-section h2, .about-story h2 { margin: 0; font: 700 clamp(34px, 4vw, 54px)/1.05 "Playfair Display", serif; letter-spacing: -.04em; }
        .about-copy { color: var(--muted); font-size: 16px; line-height: 1.85; }
        .about-copy p { margin: 0 0 20px; }
        .value-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; margin-top: 34px; }
        .value-card { min-height: 145px; padding: 20px; border: 1px solid var(--line); border-radius: 9px; background: var(--paper); }
        .value-card > span { color: var(--accent); font-size: 24px; }
        .value-card h3 { margin: 22px 0 7px; font: 700 16px "Playfair Display", serif; }
        .value-card p { margin: 0; color: var(--muted); font-size: 11px; line-height: 1.5; }
        .about-story { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; padding: 80px 0 20px; }
        .about-story img { width: 100%; height: 310px; object-fit: cover; border-radius: 10px; }
        .about-story p { margin: 22px 0; color: var(--muted); font-size: 15px; line-height: 1.8; }
        .featured-author { position: relative; display: block; width: min(100%, 760px); margin: 20px auto 80px; border-radius: 180px 180px 12px 12px; }
        .featured-author::before { position: absolute; z-index: -1; inset: 20px -1px -20px 20px; border-radius: 180px 180px 12px 12px; background: #e9ded3; content: ""; }
        .featured-author-image { display: block; width: 100%; aspect-ratio: 619 / 515; border-radius: 180px 180px 12px 12px; object-fit: cover; }
        .featured-author-badge { position: absolute; right: -1px; bottom: -19px; display: grid; width: 94px; height: 94px; place-items: center; border-radius: 50%; background: var(--accent); color: #fff; font-size: 10px; font-weight: 700; letter-spacing: .1em; line-height: 1.4; text-align: center; transform: rotate(10deg); }
        .about-hero .featured-author { width: 100%; margin: 0; }
        @media (max-width: 800px) { .about-hero, .about-section, .about-story { grid-template-columns: 1fr; gap: 38px; } }
        @media (max-width: 560px) { .featured-author, .featured-author-image { border-radius: 120px 120px 12px 12px; } .featured-author::before { border-radius: 120px 120px 12px 12px; } }
        @media (max-width: 560px) { .about-page { padding-top: 45px; } .about-numbers, .value-grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ url('/') }}" aria-label="Nexiconia Bookstore home">
            <span class="brand-mark">N</span>
            <span><strong>Nexiconia</strong><small>BOOKSTORE</small></span>
        </a>
        <nav class="main-nav" aria-label="Main navigation">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/') }}#catalog">Browse books</a>
            <a class="active" href="{{ url('about') }}">About</a>
        </nav>
        <div class="header-actions">
            <form class="search-form" action="{{ url('search') }}" method="get">
                <label class="sr-only" for="about-search">Search books</label>
                <input id="about-search" type="search" name="search" placeholder="Search books...">
                <button type="submit" aria-label="Search">⌕</button>
            </form>
            <a class="cart-link" href="{{ url('showcart') }}" aria-label="View cart"><span>Bag</span><b>{{ $count }}</b></a>
            @auth
                <a class="account-link" href="{{ route('profile.show') }}" aria-label="Your profile">◎</a>
            @else
                <a class="text-link" href="{{ route('login') }}">Sign in</a>
            @endauth
        </div>
    </header>

    <main class="about-page">
        <section class="about-hero">
            <div>
                <p class="eyebrow">A little about us</p>
                <h1>Books make the world feel <em>larger.</em></h1>
                <p class="about-lead">Nexiconia is a thoughtful online bookstore for curious readers across the Philippines. We help you find stories that open doors, start conversations, and stay with you.</p>
                <a class="button" href="{{ url('/') }}#catalog">Explore our books <span>→</span></a>
            </div>
            <div class="about-art">
                <section class="featured-author" aria-label="Featured author Alan Moore">
                    <img class="featured-author-image" src="{{ asset('Images/author.png') }}" alt="Featured author Alan Moore">
                    <span class="featured-author-badge">READ<br>WITH<br>INTENTION</span>
                </section>
            </div>
        </section>

        <section class="about-numbers" aria-label="Nexiconia highlights">
            <div class="about-number"><strong>2024</strong><span>Our digital bookstore journey began</span></div>
            <div class="about-number"><strong>1,200+</strong><span>Stories and perspectives to discover</span></div>
            <div class="about-number"><strong>∞</strong><span>Reasons to keep turning the page</span></div>
        </section>

        <section class="about-section">
            <div><p class="eyebrow">What we believe</p><h2>A bookstore for the curious.</h2></div>
            <div class="about-copy">
                <p>Our mission is simple: make meaningful books easier to find and more enjoyable to bring into your life. From new releases to overlooked gems, every title is an invitation to pause, imagine, and learn.</p>
                <p>We are building more than a shop. We are building a welcoming community for readers, thinkers, and lifelong learners—one good recommendation at a time.</p>
                <div class="value-grid">
                    <article class="value-card"><span>✦</span><h3>Curiosity first</h3><p>Room for different ideas, voices, and ways of seeing.</p></article>
                    <article class="value-card"><span>♡</span><h3>Reader-led</h3><p>Your reading life is personal. Our shelves should feel that way too.</p></article>
                    <article class="value-card"><span>⌁</span><h3>Always learning</h3><p>Every book is a chance to grow a little wider and deeper.</p></article>
                </div>
            </div>
        </section>

        <section class="about-story">
            <img src="{{ asset('Images/banner2.png') }}" alt="Books waiting to be discovered">
            <div><p class="eyebrow">Keep reading</p><h2>Make space for a story.</h2><p>Whether you are choosing a gift, finding a weekend read, or starting a new chapter of your own, Nexiconia is here to help you find something worth keeping.</p><a class="quiet-link" href="{{ url('/') }}#catalog">Browse the collection <span>→</span></a></div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-brand"><span class="brand-mark">N</span><h2>Nexiconia</h2><p>A quieter place for good stories.</p></div>
        <div><h3>Explore</h3><a href="{{ url('/') }}">Home</a><a href="{{ url('/') }}#catalog">Browse books</a><a href="{{ url('about') }}">About us</a></div>
        <div><h3>Contact</h3><a href="mailto:nexiconiabookstore@gmail.com">nexiconiabookstore@gmail.com</a><a href="tel:+639353611374">+63 935 361 1374</a></div>
        <div class="footer-bottom"><span>© {{ date('Y') }} Nexiconia Bookstore</span><span>Made for readers.</span></div>
    </footer>
</body>
</html>
