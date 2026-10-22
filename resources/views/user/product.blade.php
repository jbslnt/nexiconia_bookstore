@if ($data->isEmpty())
    <div class="empty-state">
        <span>◎</span>
        <h3>Your next favorite book is on its way.</h3>
        <p>There are no catalog products yet. Check back soon for new arrivals.</p>
    </div>
@else
    <div class="book-grid">
        @foreach ($data as $product)
            <article class="book-card">
                <a class="book-cover" href="{{ url('p1') }}">
                    <img src="{{ asset('productimage/' . $product->image) }}" alt="{{ $product->title }}">
                    <span class="book-badge">In stock</span>
                </a>
                <div class="book-info">
                    <p class="book-genre">{{ $product->genre }}</p>
                    <h3>{{ $product->title }}</h3>
                    <p class="book-author">{{ $product->author }}</p>
                    <div class="book-footer">
                        <strong>₱ {{ number_format((float) $product->price, 2) }}</strong>
                        <form action="{{ url('addtocart', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <button class="icon-button" type="submit" aria-label="Add {{ $product->title }} to cart">+</button>
                        </form>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endif
