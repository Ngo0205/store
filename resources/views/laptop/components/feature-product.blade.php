<section id="product1" class="section-p1">
    <div class="selectquick">
        <div class="selectquick-item">
            <span>Sắp xếp theo:</span>
            <div class="btnselectquick">
                <ul class="listselectquick">
                    <li class="listselectquick-item"><a href="{{route('laptop.bestseller')}}">Bán chạy nhất</a></li>
                    <li class="listselectquick-item"><a href="{{route('laptop.lowest-price')}}">Giá thấp nhất</a></li>
                    <li class="listselectquick-item"><a href="{{route('laptop.highest-price')}}">Giá cao nhất</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="pro-container">
        @foreach($items as $productItem)
            <div class="pro">
                <img
                    src="{{config('app.baseUrl'). $productItem->feature_image}}"
                    alt="">
                <div class="des">
                    <a href="{{route('productDetail',['id'=>$productItem->id])}}"><h5>{{$productItem->name}}</h5></a>
                    <p><span>{{number_format($productItem->price)}}</span> <sup>đ</sup></p>
                </div>
            </div>
        @endforeach
    </div>
</section>
