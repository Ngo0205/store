<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('html/đề tài/main.css')}}">
    <link rel="stylesheet" href="{{asset('html/fontawesome-free-6.4.0/css/all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
</head>
<body id="body-log">
<div id="page" class="site login-show">
    <div class="container-login ">
        <div class="wrapper-login">
            <!-- form đăng nhập -->
            <div class="login">
                <div class="content-heading-login">
                    <div class="login-style">
                        <div class="welcome">
                            <h2>Chào mừng <br>Trở lại</h2>
                            <p>Bắt đầu mua sắm với DOLPHIN!!!!</p>
                        </div>
                    </div>
                </div>
                <div class="content-form-login">
                    <div class="login-style">
                        <form action="{{route('postLogin')}}" method="post">
                            @csrf
                            <p>
                                <label>Họ tên:</label>
                                <input type="text" name="username" placeholder="Nhập tên đăng nhập của bạn ">
                            </p>
                            <p>
                                <label>Mật Khẩu:</label>
                                <input type="password" name="password" placeholder="Nhập mật khẩu  của bạn ">
                            </p>
                            <p class="check-login">
                                <label for="remember"></label>
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember"> Tôi nhớ </label>
                            <p class="forgot-login"><a href="#">Bạn quên mật khẩu</a></p>
                            <p>
                                <button type="submit">Đăng nhập</button>
                            </p>
                            </p>
                        </form>
                        <div class="afterform">
                            <p>Bạn không có tài khoản?</p>
                            <a href="#" class="t-signup" onclick="move()"> Đăng kí</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form đăng kí  -->
            <div class="signup">
                <div class="content-heading-login">
                    <div class="login-style">
                        <div class="welcome">
                            <h2>Đăng kí <br>Ngay</h2>
                            <p> Bạn đã sẵn sàng tạo tài khoản mua sắm? <br> Chúng tôi có thể giúp bạn mua sắm tiện lợi
                                nhất </p>
                        </div>
                    </div>
                </div>
                <div class="content-form-login">
                    <div class="login-style">
                        <form onsubmit="return check_register()" action="{{route('register')}}" method="post">
                            @csrf
                            <div>
                                <div>
                                    <label for="name">Họ tên:</label>
                                    <input type="text" id="name" name="name" placeholder="Nhập tên  của bạn ">
                                </div>
                                <div class=" col-1"><p class=" err" id="err_name"></p></div>
                            </div>
                            <div>
                                <div>
                                    <label for="username-reg">Tên đăng nhập:</label>
                                    <input type="text" id="username-reg" name="username"
                                           placeholder="Nhập tên đăng nhập của bạn ">
                                </div>
                                <div class="col-1"><p class=" err" id="err_username"></p></div>
                            </div>
                            <div>
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email"
                                           placeholder="Nhập tài khoản email của bạn ">
                                </div>
                                <div class="col-1"><p class=" err" id="err_email"></p></div>
                            </div>
                            <div>
                                <div>
                                    <label for="phone">SĐT:</label>
                                    <input type="text" id="phone" name="phone"
                                           placeholder="Nhập số điện thoại của bạn ">
                                </div>
                                <div class="col-1"><p class=" err" id="err_phone"></p></div>
                            </div>
                            <div>
                                <div>
                                    <label for="pass-reg">Mật Khẩu:</label>
                                    <input type="text" class="error" id="pass-reg" name="password"
                                           placeholder="Nhập mật khẩu  của bạn ">
                                </div>
                                <div class="col-1"><p class=" err" id="err_pass"></p></div>
                            </div>
                            <div>
                                <div>
                                    <input type="checkbox" id="terms" name="terms">
                                    <label for="terms">Tôi đồng ý với tất cả các điều khoản và điều kiện</label>
                                </div>
                                <div class="col-1"><p class=" err" id="err_term"></p></div>
                            </div>
                            <br><br>
                            <p>
                                <button id="register" type="submit">Đăng kí</button>
                            </p>
                        </form>
                        <div class="social">
                            <p><span>Hoặc đăng nhập với </span></p>
                            <ul>
                                <li><a href="#" class="google"> <i class="fa-brands fa-google"></i> </a></li>
                                <li><a href="#" class="face"><i class="fa-brands fa-facebook"></i></a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // chuyển trang login và register khi ấn
    function move() {
        const signup = document.querySelector('.t-signup');
        const addclass = document.querySelector('.site');
        signup.addEventListener('click', function () {
            addclass.className = 'site signup-show';
        })
    }


    // kiểm tra đầu vào

    function check_register() {
        var err_name = "";
        var err_username = "";
        var err_pass = "";
        var err_phone = "";
        var err_email = "";
        var err_terms = "";
        var check = true;

        var name = document.getElementById("name").value;
        var username = document.getElementById("username-reg").value;
        var password = document.getElementById("pass-reg").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var terms = document.getElementById("terms").checked;

        var name_pattern = /^[a-zA-Z]/;
        var username_pattern = /^[a-zA-Z0-9]+$/;
        var password_pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8}$/;
        var phone_pattern = /^0[3582]\d{8}$/;
        var email_pattern = /[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z0-9]+/;
        if (!name) {
            err_name = '* Vui lòng nhập họ tên ';
            check = false;
        } else if (!name_pattern.test(name)) {
            err_name = '* Họ tên không hợp lệ';
            check = false;
        }
        if (!username) {
            err_username = '* Vui lòng nhập tên đăng nhập';
            check = false;
        } else if (!username_pattern.test(username)) {
            err_username = '* Tên đăng nhập không hợp lệ ';
            check = false;
        }

        if (!password) {
            err_pass = '* Vui lòng nhập mật khẩu';
            check = false;
        } else if (!password_pattern.test(password)) {
            err_pass = 'Mật khẩu phải chỉ có 8 ký tự, gồm cả chữ hoa, chữ thường và số';
            check = false;
        }

        if (!phone) {
            err_phone = 'Nhập số điện thoại ';
            check = false;
        } else if (!phone_pattern.test(phone)) {
            err_phone = ' Số điện thoại không hợp lệ ';
            check = false;
        }

        if (!email_pattern.test(email)) {
            err_email = 'Email không hợp lệ ';
        }
        if (!terms) {
            err_terms = '* Vui lòng đồng ý với các điều khoản và điều kiện';
            check = false;
        }
        document.getElementById('err_name').textContent = err_name;
        document.getElementById('err_username').textContent = err_username
        document.getElementById('err_pass').textContent = err_pass;
        document.getElementById('err_phone').textContent = err_phone;
        document.getElementById('err_email').textContent = err_email;
        document.getElementById('err_term').textContent = err_terms;
        if (check)
            alert("Đăng ký thành công");
        return check;
    }
</script>
</body>
</html>

