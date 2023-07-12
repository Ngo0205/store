<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chitietsp</title>
    <link rel="stylesheet" href="{{asset('html/đề tài/main.css')}}">
    <link rel="stylesheet" href="{{asset('html/fontawesome-free-6.4.0/css/all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">

    <style>
        .quantity-input {
            display: inline-block;
        }

        .quantity-input{
            width: 60px;
            padding: 5px;
            font-size: 14px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="cps-container__body">
    <div style="display: none;">
        <div id="page_loader">
            <div class="logo"></div>
            <div class="loader"></div>
        </div>
    </div>

    <div class="container-full">
        <div id="productDuan">
            <div id="breadcrumbs">
                <div class="block-breadcrumbs__affix">
                    <div class="cps-container">
                        <a href="/" class="breadcrumb-text">
                            <i class="fa fa-home" aria-hidden="true">Trang chủ</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="frame">
            <div class="frame-left">
                <div>
                    <img
                        src="{{config('app.baseUrl') . $productDetail->feature_image}}"
                        alt="">
                    <div class="button-left"></div>
                    <div class="button-right"></div>
                </div>
                <div class="list-img-small">

                    @foreach($productDetail->getProductImageDetail as $productImageDetail)
                        <div class="img-small">
                            <img
                                src="{{config('app.baseUrl') . $productImageDetail->image}}"
                                alt="" class="img-litter">
                        </div>
                    @endforeach


                </div>
                <div class="box-warranty">
                    <div class="box-info">
                        <div class="box-title">
                            <p><strong>Thông tin sản phẩm</strong></p>
                        </div>
                        <div class="box-info-content">
                            <div class="item-info-content">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="description">
                                    Hàng mới 100%, chính hãng.
                                </div>
                            </div>
                            <div class="item-info-content">
                                <div class="icon">
                                    <i class="fal fa-box-open"></i>
                                </div>
                                <div class="description">
                                    Hộp, sách hướng dẫn sử dụng, phụ kiện đi kèm(sạc,...)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="frame-right">
                <h1>{{$productDetail->name}}</h1>
                <div class="box-rating">
                    <div icon="star" class="icon-active">
                        <i class="fa-thin fa-star"></i>
                    </div>
                    <div icon="star" class="icon-active">
                        <i class="fa-thin fa-star"></i>
                    </div>
                    <div icon="star" class="icon-active">
                        <i class="fa-thin fa-star"></i>
                    </div>
                    <div icon="star" class="icon-active">
                        <i class="fa-thin fa-star"></i>
                    </div>
                    <div icon="star" class="icon-active">
                        <i class="fa-thin fa-star"></i>
                    </div>
                    " &nbsp; 15 đánh giá "
                </div>
                <div class="list-memory">
                    <a href="" title="128GB">
                        <div class="box-memory">
                            <!-- <div class="text-memory"> -->
                            <p class="text-mo">128GB</p>
                            <div class="checked-product"></div>
                            <!-- </div> -->
                        </div>
                    </a>

                    <a href="" title="256GB">
                        <div class="box-memory">
                            <!-- <div class="text-memory"> -->
                            <p class="text-mo">256GB</p>
                            <div class="checked-product"></div>
                            <!-- </div> -->
                        </div>
                    </a>

                    <a href="" title="512GB">
                        <div class="box-memory">
                            <!-- <div class="text-memory"> -->
                            <p class="text-mo">512GB</p>
                            <div class="checked-product"></div>
                            <!-- </div> -->
                        </div>
                    </a>

                    <a href="" title="1TB">
                        <div class="box-memory">
                            <!-- <div class="text-memory"> -->
                            <p class="text-mo">1TB</p>
                            <div class="checked-product"></div>
                            <!-- </div> -->
                        </div>
                    </a>
                </div>
                <p class="text-sm">Chọn màu để xem giá chi tiết:</p>
                <div class="list-color">
                    <!-- <div> -->
                    <div class="box-color">
                        <div class="item-color">
                            <img
                                src="{{config('app.baseUrl') . $productDetail->feature_image}}"
                                alt="{{$productDetail->name}}"
                                class="img-item-color">
                        </div>
                        <div class="item-color">
                            <p class="text-color">Màu xàm</p>
                            <p class="text-price">{{number_format($productDetail->price)}}</p>
                        </div>
                        <div class="checked-product"></div>
                    </div>

                    <div class="box-color">
                        <div class="item-color">
                            <img
                                src="{{config('app.baseUrl') . $productDetail->feature_image}}"
                                alt="{{$productDetail->name}}" class="img-item-color">
                        </div>
                        <div class="item-color">
                            <p class="text-color">Vàng Gold</p>
                            <p class="text-price">{{number_format($productDetail->price)}}</p>
                        </div>
                        <div class="checked-product"></div>
                    </div>

                    <div class="box-color">
                        <div class="item-color">
                            <img
                                src="{{config('app.baseUrl') . $productDetail->feature_image}}"
                                alt="{{$productDetail->name}}" class="img-item-color">
                        </div>
                        <div class="item-color">
                            <p class="text-color">Màu bạc</p>
                            <p class="text-price">{{number_format($productDetail->price)}}</p>
                        </div>
                        <div class="checked-product"></div>
                    </div>

                    <div class="box-color">
                        <div class="item-color">
                            <img
                                src="{{config('app.baseUrl') . $productDetail->feature_image}}"
                                alt="{{$productDetail->name}}" class="img-item-color">
                        </div>
                        <div class="item-color">
                            <p class="text-color">Màu tím</p>
                            <p class="text-price">{{number_format($productDetail->price)}}</p>
                        </div>
                        <div class="checked-product"></div>
                    </div>
                </div>
                <div>
                    <form onsubmit="return order()" action="{{route('cart.addToCart',['id'=> $productDetail->id] )}}"  method="post">
                        @csrf
                        <p class="type-text">Mua ngay</p>
                        <div class="main-price">
                            <div class="item-price">
                                <strong>
                                    <p class="text-dvv">{{number_format($productDetail->price)}}</p>
                                </strong>
                            </div>
                            <div>
                                <label>Số lượng</label>
                                <input class="quantity-input" type="number" value="1" min="1" name="quantity[{{$productDetail->id}}]"/>
                            </div>
                        </div>
                        <button type="submit" class="box-order">
                            <div class="item-order">
                                <p class="type-order">THÊM VÀO GIỎ HÀNG</p>
                            </div>
                        </button>
                    </form>

                </div>
            </div>
        </div>


        <!--sản phẩm tương tự-->
        <div id="frameone">
            <div class="frameone-full">
                <div class="similar-text">
                    <h2 class="text-two">Sản phẩm tương tự</h2>
                </div>
            </div>
            <!-- box -->
            @foreach($productRecommends as  $productRecommendItem)
                <div class="box-similar">
                    <div class="similar-one">
                        <a class="similar-path" href="#">
                            <div class="similar-max">
                                <div class="similar-min">
                                    <div style="width: 100%; height: 250px; position: relative;">
                                        <img
                                            src="{{config('app.baseUrl') . $productRecommendItem->feature_image}}"
                                            width="250px" height="250px" alt="{{$productRecommendItem->name}}">
                                    </div>
                                </div>
                                <h3 class="similar-text-text">{{$productRecommendItem->name}}</h3>
                                <div class="similar-price">
                                    <p class="price-new"> {{number_format($productRecommendItem->price)}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach


        </div>


        <!--  Thong tin chi tiet   -->
        <div id="frametwo">
            <div class="frametwo-left">
                <div>
                    <div class="content-sp">
                        <h2> MacBook Air M1 2020 256GB</h2>
                        <p dir="text">
                            <em>
                                <strong>
                                    <a href="#" target="_blank" rel="noopener">Macbook Air M1</a>
                                    <!-- <a href="#" class="text-red">MacBook Air M1</a> -->
                                </strong>
                                2020 256GB
                            </em>
                            "có hiệu năng nhanh hơn tới 3 lần so với hầu hết các laptop chạy Windows có mặt trên thị
                            trường. Ngoài ra, theo công bố của Cupertino Macbook Air M1 2020 256GB sẽ có tốc độ hơn 9
                            lần so với các phiên bản Air cũ."
                        </p>
                        <p class="img-content">
                            <img
                                src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dienmayxanh.com%2Flaptop%2Fapple-macbook-air-m1-2020-z127000de&psig=AOvVaw13nhR03_2y9lFgGByQRpPB&ust=1684920230750000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOCT6ZCPi_8CFQAAAAAdAAAAABAK"
                                alt="MacBook Air M1">
                        </p>
                        <h3 dir="text"> Thiết kế Macbook Air M1 2020 256GB nhỏ gọn&nbsp;</h3>
                        <p dir="text">
                            <em>
                                <a href="#">
                                    <strong> Air M1 2020 256GB</strong>
                                </a>
                            </em>
                            "&nbsp;có thân hình cực kì mỏng nhẹ, viền màn hình mỏng và màn hình vẫn là 13-inch Retina
                            nhưng được nâng cấp nhẹ với chuẩn màu P3 mới."
                        </p>
                        <p style="text-align: center;" class="img-content">
                            <img
                                src="https://cdn.didongviet.vn/pub/media/wysiwyg/Macbook/macbook-air-m1/macbook-air-m1-2020-256gb-danh-gia.png"
                                alt="">
                        </p>

                        <p dir="text">
                            <strong>
                                <em>MacBook Air M1 2020 256GB</em>
                            </strong>
                            "&nbsp;sở hữu thiết kế không khác mấy so với các người đàn anh trước đó được làm từ chất
                            liệu hợp kim nhôm chắc chắn và cực kì bền bỉ. Máy có kích thước khá nhỏ gọn 30,41 x 21,24 x
                            1,61 cm và trọng lượng nặng chỉ 1.29 kg cực kì nhẹ. Với kích thước nhỏ gọn và trọng lượng
                            nhẹ như vậy chiếc laptop này có thể bỏ vừa nhiều loại túi hiện nay thuật tiện cho người dùng
                            mang theo cả ngày."
                        </p>
                        <p dir="text">
                            Máy vẫn sở hữu màn hình Retina 13 inch cùng với các vị trí các cổng kết nối không thay đổi.
                            Mẫu laptop Air vẫn giữ lại Touch ID tích hợp nút nguồn đi kèm với Magic Keyboard.
                        </p>
                        <h3 dir="text">Về cổng kết nối, mẫu laptop này sẽ có:</h3>
                        <ul>
                            <li>2 cổng USB-C bên cạnh trái bao gồm 1 cổng Thunderbolt 4 và 1 cổng USB 4.</li>
                            <li>1 cổng jack tai nghe 3.5mm bên cạnh phải dành cho việc kết nối với tai nghe.</li>
                            <li>Một điểm ấn tượng năm nay đó là việc mẫu MacBook M1 sẽ không còn quạt tản nhiệt. Dẫu
                                vậy, Apple vẫn bố trí những khe tản nhiệt nhằm giúp máy giải phóng bớt nhiệt lượng khi
                                thực hiện các tác vụ nặng.
                            </li>
                        </ul>
                        <p style="text-align: center;" class="img-content">
                            <img src="https://oyster.ignimgs.com/wordpress/stg.ign.com/2021/01/M1_MacBook_Air__-_6.jpeg"
                                 alt="">
                        </p>

                        <h3 dir="text">Hiệu năng Macbook Air M1 2020 256GB vượt trội so với thế hệ Intel</h3>
                        <p dir="text">
                            Chiếc máy tính chạy chip M1 sẽ có hiệu năng nhanh hơn tới 3 lần so với hầu hết các laptop
                            chạy Windows có mắt trên thị trường.
                            <strong>&nbsp;Macbook Air M1 2020 256GB</strong>
                            cũng cho hiệu năng tiêu thụ thấp hơn bất cứ con chip Intel nào trước đây. Ngoài ra, theo
                            công bố của Cupertino máy sẽ có tốc độ hơn 9 lần so với các phiên bản Air cũ.
                        </p>
                        <p style="text-align: center;" class="img-content">
                            <img
                                src="https://icdn.dantri.com.vn/zoom/1200_630/2022/12/21/macbook-air-m1-crop-1671622787953.jpeg"
                                alt="">
                        </p>
                        <p dir="text">
                            Con chip này được thiết kế dựa trên nền tảng ARM, sản xuất trên tiến trình 5nm. Bên trong
                            con chip xử lý sẽ là CPU 8 nhân với 4 nhân hiệu suất cao và 4 nhân hiệu năng tiết kiệm điện
                            năng. Nhờ đó, máy sẽ có hiệu năng rất ấn tượng và chạy các tác vụ từ cơ bản đến nâng cao.
                        </p>
                        <p dir="text">
                            Con chip trên Macbook Air M1 2020 256GB sẽ có 16 tỷ bóng bán dẫn sẽ đưa ra những dự đoán máy
                            học khi kết hợp với nền tảng macOS Big Sur.
                        </p>

                        <h3>Bàn phím Magic hành trình phím 1mm</h3>
                        <p dir="text">
                            Bàn phím Magic Keyboard được hỗ trợ các phím tắt mới được táo khuyết trang bị cho MacBook
                            M1. Bàn phím cũng sẽ hỗ trợ chuyển đổi ngôn ngữ trực tiếp chỉ với một vài thao tác hay nhiều
                            tác vụ khác chỉ với một cú chạm.
                        </p>
                        <p style="text-align: center;" class="img-content">
                            <img src="https://m.media-amazon.com/images/I/81HZAfCGZ5L._AC_UF1000,1000_QL80_.jpg" alt="">
                        </p>
                        <p dir="text">
                            Magic Keyboard cũng có đèn nền với cảm biến ánh sáng giúp thay đổi độ sáng tùy thuộc vào
                            điều kiện môi trường. Ngay cả trackpad cũng hỗ trợ các cử chỉ thu phóng, vuốt một cách chính
                            xác và mượt mà.
                        </p>

                        <h3> Ổ cứng 256GB dung lượng lớn tốc độ cao, hỗ trợ nhiều cổng kết nối</h3>
                        <p dir="text">
                            Nhà sản xuất tích hợp ổ cứng SSD (solid-state storage) 256 GB có tốc độ nhanh gấp đôi cho
                            chiếc
                            <strong>&nbsp;Macbook Air M1 2020 256GB</strong>
                            này, đồng nghĩa với việc dữ liệu được xử lý trơn tru và mượt mà hơn, trong thực tế cho thấy
                            kết quả nhanh hơn 21% trong các tác vụ lõi đơn và 30% trong các tác vụ đa lõi. Bạn còn có
                            thế có lựa chọn khác với dung lượng ổ cứng lớn hơn đó là phiên 512 GB, phù hợp với nhiều đối
                            tượng người dùng.
                        </p>
                        <p dir="text">
                            Để thích hợp hơn cho nhu cầu làm việc Apple cũng trang bị cho chiếc máy này nhiều cổng kết
                            nối thông dụng hiện nay như: 2 cổng Thunderbolt 3 (USB-C) ports with support for: Charging
                            DisplayPort Thunderbolt (up to 40Gb/s) USB 3.1 Gen 2 (up to 10Gb/s) hỗ trợ cho việc kết nối
                            cắm sạc, truyền dữ liệu hay kết nối với các thiết bị khác.
                        </p>

                        <h3> Ổ cứng 256GB dung lượng lớn tốc độ cao, hỗ trợ nhiều cổng kết nối</h3>
                        <p dir="text">
                            Macbook Air M1 2020 256GB sẽ có thời lượng pin 15 giờ cho tác vụ lướt web. Trong khi đó,
                            laptop này sẽ cho thời gian xem video lên đến 18 tiếng. Thời lượng này gấp đôi so với các
                            phiên bản cũ.
                        </p>
                    </div>
                </div>
            </div>
            <div class="frametwo-right">
                <div>
                    <div class="paramater-sp">
                        <div class="item-paramater">
                            <h2>Thông số kỹ thuật</h2>
                        </div>
                        <div class="relative">
                            {!! $productDetail->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function order() {
        alert('Thêm giỏ hàng thành công');
    }
    // var btn = document.getElementsByClassName('box-order');
    // btn.click = function order(){
    //
    // }
</script>
</body>
</html>
