<!-- header -->
<section class="header">
    <div class="fisrt">
        <a class="logo" href="/">
            <img id="logo-header" src="/html/đề tài/ảnh//footer&logo/logo-con-ca-voi-20.png" alt="">
            <h3>DOLPHIN</h3>
        </a>
    </div>
    <div>
        <ul class="navbar">
            <li><a class="active" href="/">
                    <i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li><a href="{{route('laptop.index')}}">
                    <i class="fa-solid fa-laptop"></i>Laptop
                </a></li>
            <li><a href="{{route('phone.index')}}">
                    <i class="fa-sharp fa-solid fa-mobile-screen-button"></i> Điện thoại
                </a></li>
            <li><a href="{{route('accessory.index')}}">
                    Phụ kiện
                </a></li>

            <form class="search-header" action="{{route('search')}}" method="get">
                <input type="text" id="search-header-text" name="search"
                       placeholder="Nhập để tìm kiếm sản phẩm"  value="{{isset($keywords) ? $keywords:''}}" required>
                <button type="submit" id="btn-search-header">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <li><a href="{{route('cart.showCart')}}">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a></li>
            <li id="user"><a href="#"><i class="fa-regular fa-circle-user"></i></a>
                <ul class="ul-2">
                    <li><a href="{{route('login')}}">Đăng nhập</a></li>
                    <li><a href="#">Đăng kí </a></li>
                    <li><a href="#">Đăng xuất </a></li>
                </ul>
            </li>
        </ul>
    </div>
</section>

