<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Review your Nexiconia Bookstore cart.">
    <title>Your reading bag | Nexiconia Bookstore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/modern-storefront.css') }}">
    <style>
        .cart-page {
            max-width: 1280px;
            margin: 0 auto;
            padding: 64px clamp(20px, 6vw, 90px) 90px;
        }

        .cart-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 36px;
        }

        .cart-heading h1 {
            margin: 0;
            font: 700 clamp(42px, 6vw, 72px)/.95 "Playfair Display", serif;
            letter-spacing: -.05em;
        }

        .cart-heading p {
            max-width: 280px;
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        .cart-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.6fr) minmax(280px, .8fr);
            gap: 28px;
            align-items: start;
        }

        .cart-list,
        .cart-summary {
            border: 1px solid var(--line);
            border-radius: 12px;
            background: var(--paper);
        }

        .cart-list {
            overflow: hidden;
        }

        .cart-list-header {
            display: grid;
            grid-template-columns: 1fr 110px 130px 42px;
            gap: 16px;
            padding: 14px 22px;
            border-bottom: 1px solid var(--line);
            color: var(--muted);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .cart-row {
            display: grid;
            grid-template-columns: 1fr 110px 130px 42px;
            gap: 16px;
            align-items: center;
            padding: 24px 22px;
            border-bottom: 1px solid var(--line);
        }

        .cart-row:last-child {
            border-bottom: 0;
        }

        .cart-book {
            display: flex;
            align-items: center;
            gap: 16px;
            min-width: 0;
        }

        .cart-book-cover {
            display: grid;
            width: 52px;
            height: 68px;
            flex: 0 0 52px;
            place-items: center;
            border-radius: 5px;
            background: linear-gradient(145deg, #ead3bb, #f5eee6);
            color: var(--accent);
            font: 700 27px "Playfair Display", serif;
        }

        .cart-book h2 {
            overflow: hidden;
            margin: 0;
            color: var(--ink);
            font: 700 17px/1.25 "Playfair Display", serif;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .cart-book p,
        .cart-cell-label {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 11px;
        }

        .cart-quantity {
            color: var(--ink);
            font-size: 13px;
            font-weight: 600;
        }

        .cart-price {
            color: var(--ink);
            font-size: 14px;
            font-weight: 700;
        }

        .remove-link {
            display: grid;
            width: 30px;
            height: 30px;
            place-items: center;
            border-radius: 50%;
            color: var(--muted);
            font-size: 18px;
            transition: .2s;
        }

        .remove-link:hover {
            background: #f8e9e3;
            color: #b7503d;
        }

        .cart-summary {
            position: sticky;
            top: 100px;
            padding: 26px;
        }

        .cart-summary h2 {
            margin: 0 0 24px;
            font: 700 27px "Playfair Display", serif;
        }

        .summary-line {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid var(--line);
            color: var(--muted);
            font-size: 13px;
        }

        .summary-line strong {
            color: var(--ink);
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 22px 0;
            color: var(--ink);
            font-size: 17px;
            font-weight: 700;
        }

        .summary-total strong {
            color: var(--accent);
            font-size: 21px;
        }

        .checkout-button {
            width: 100%;
            justify-content: center;
            cursor: pointer;
        }

        .continue-shopping {
            display: block;
            margin-top: 16px;
            color: var(--muted);
            font-size: 12px;
            text-align: center;
        }

        .continue-shopping:hover {
            color: var(--accent);
        }

        .cart-empty {
            padding: 75px 24px;
            text-align: center;
        }

        .cart-empty-mark {
            display: grid;
            width: 64px;
            height: 64px;
            margin: 0 auto 20px;
            place-items: center;
            border-radius: 50%;
            background: var(--soft);
            color: var(--accent);
            font-size: 28px;
        }

        .cart-empty h2 {
            margin: 0 0 10px;
            font: 700 28px "Playfair Display", serif;
        }

        .cart-empty p {
            margin: 0 auto 24px;
            color: var(--muted);
            font-size: 13px;
        }

        @media (max-width: 800px) {
            .cart-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .cart-layout {
                grid-template-columns: 1fr;
            }

            .cart-summary {
                position: static;
            }
        }

        @media (max-width: 580px) {
            .cart-page {
                padding-top: 42px;
            }

            .cart-list-header {
                display: none;
            }

            .cart-row {
                grid-template-columns: 1fr auto;
                gap: 12px;
                padding: 20px 16px;
            }

            .cart-book {
                grid-column: 1 / -1;
            }

            .cart-quantity::before {
                content: "Qty ";
                color: var(--muted);
                font-weight: 400;
            }

            .cart-price {
                text-align: right;
            }
        }
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
            <a href="{{ url('about') }}">About</a>
        </nav>

        <div class="header-actions">
            <form class="search-form" action="{{ url('search') }}" method="get">
                <label class="sr-only" for="cart-search">Search books</label>
                <input id="cart-search" type="search" name="search" placeholder="Search books...">
                <button type="submit" aria-label="Search"><span>⌕</span></button>
            </form>
            <a class="cart-link" href="{{ url('showcart') }}" aria-label="View cart"><span>Bag</span><b>{{ $count }}</b></a>
            <a class="account-link" href="{{ route('profile.show') }}" aria-label="Your profile">◎</a>
        </div>
    </header>

    @if (session('message'))
        <div class="toast" role="status"><span class="toast-check">✓</span><span>{{ session('message') }}</span></div>
    @endif

    @php
        $cartTotal = $cart->sum(fn ($item) => (float) $item->price * (int) $item->quantity);
    @endphp

    <main class="cart-page">
        <div class="cart-heading">
            <div><p class="eyebrow">Your collection</p><h1>Reading bag.</h1></div>
            <p>Keep the stories that caught your attention close. Review your selection before placing your order.</p>
        </div>

        @if ($cart->isEmpty())
            <section class="cart-list cart-empty">
                <div class="cart-empty-mark">♡</div>
                <h2>Your bag is waiting.</h2>
                <p>Find a story that speaks to you and it will appear here.</p>
                <a class="button" href="{{ url('/') }}#catalog">Browse books <span>→</span></a>
            </section>
        @else
            <div class="cart-layout">
                <form id="order-form" class="cart-list" action="{{ url('order') }}" method="POST">
                    @csrf
                    <div class="cart-list-header"><span>Book</span><span>Quantity</span><span>Price</span><span></span></div>
                    @foreach ($cart as $cartItem)
                        <div class="cart-row">
                            <div class="cart-book">
                                <span class="cart-book-cover" aria-hidden="true">N</span>
                                <div>
                                    <h2>{{ $cartItem->product_title }}</h2>
                                    <p>Ready to become part of your library</p>
                                    <input type="hidden" name="productname[]" value="{{ $cartItem->product_title }}">
                                    <input type="hidden" name="quantity[]" value="{{ $cartItem->quantity }}">
                                    <input type="hidden" name="price[]" value="{{ $cartItem->price }}">
                                </div>
                            </div>
                            <span class="cart-quantity">{{ $cartItem->quantity }}</span>
                            <span class="cart-price">₱ {{ number_format((float) $cartItem->price * (int) $cartItem->quantity, 2) }}</span>
                            <a class="remove-link" href="{{ url('delete', $cartItem->id) }}" aria-label="Remove {{ $cartItem->product_title }} from cart">×</a>
                        </div>
                    @endforeach
                </form>

                <aside class="cart-summary">
                    <h2>Order summary</h2>
                    <div class="summary-line"><span>Books</span><strong>{{ $cart->count() }}</strong></div>
                    <div class="summary-line"><span>Delivery</span><strong>Free</strong></div>
                    <div class="summary-total"><span>Total</span><strong>₱ {{ number_format($cartTotal, 2) }}</strong></div>
                    <button class="button checkout-button" type="submit" form="order-form">Confirm order <span>→</span></button>
                    <a class="continue-shopping" href="{{ url('/') }}#catalog">← Continue browsing</a>
                </aside>
            </div>
        @endif
    </main>

    <footer class="site-footer">
        <div class="footer-brand"><span class="brand-mark">N</span><h2>Nexiconia</h2><p>A quieter place for good stories.</p></div>
        <div><h3>Explore</h3><a href="{{ url('/') }}">Home</a><a href="{{ url('/') }}#catalog">Browse books</a><a href="{{ url('about') }}">About us</a></div>
        <div><h3>Contact</h3><a href="mailto:nexiconiabookstore@gmail.com">nexiconiabookstore@gmail.com</a><a href="tel:+639353611374">+63 935 361 1374</a></div>
        <div class="footer-bottom"><span>© {{ date('Y') }} Nexiconia Bookstore</span><span>Made for readers.</span></div>
    </footer>
</body>
</html>
