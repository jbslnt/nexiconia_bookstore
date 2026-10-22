   
   
   <!--Trending-->

    <div class="featured_boks">

        <h1>What's Trending</h1>


        <div class="featured_book_box">

            @foreach($data as $product)

            <div class="featured_book_card">

                <div class="featurde_book_img">
                    <img src="/productimage/{{$product->image}}">
                </div>

                <div class="featurde_book_tag">
                    <h5>{{$product->title}}</h5>
                    <p class="writer">{{$product->author}}</p>
                    <div class="categories">{{$product->genre}}</div>
                    <p class="book_price">₱ {{$product->price}}</p>


                    <form action="{{url('addtocart', $product->id)}}" method="POST" class="form-inline" style="float: right; margin-right: 10px;">
                        @csrf
                    
                        <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 50px; margin-right: 5px; display: inline-block;">
                    
                        <input class="btn btn-primary" type="submit" value="Add to Cart" 
                               style="background-color: #f7a623; border-color: #f7a623; display: inline-block; width: auto;">
                    </form>
                    


                </div>               

            </div>

            @endforeach

        </div>

       

    </div>