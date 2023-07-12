<section id="product1" class="section-p1">
    <div class="header-pro">
        <h4>
            <a href="#"> Sản phẩm ưa thích nhất</a>
        </h4>
    </div>
    <p></p>
    <div class="pro-container">
        @foreach($products as $productItem)
            @foreach($categories as $categoryItem)
                @if($productItem -> category_id == $categoryItem -> id)
                    <div class="pro">
                        <img
                            src="{{config('app.baseUrl'). $productItem->feature_image}}"
                            alt="">
                        <div class="des">
                            <span>{{$categoryItem->name}}</span>
                            <a href="{{route('productDetail',['id'=>$productItem->id])}}">
                                <h5> {{$productItem->name}}</h5>
                            </a>
                            <p><span>{{number_format($productItem->price)}}</span> <sup>đ</sup></p>
                        </div>
                    </div>

                @endif

            @endforeach

        @endforeach


    </div>
</section>
