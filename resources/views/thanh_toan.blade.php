<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ti One Store</title>
    <link rel="shortcut icon" href="/assets/img/T1.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>
<body>
    <div id="header">
        <div class="headerTop"></div>
        <div class="headerNavbar">
            <a href="{{ route('user') }}"><img src="./assets/img/logo.png" alt="" class="headerNavbar__logo"></a>
            <div class="wallheader"></div>
            <div class="textcart">Thanh toán</div>
        </div>
        <div class="headerFloor" style ="margin-top: 20px"></div>
    </div>
    <div class="container" style="margin-top: 25px; text-align: center; ">
        <h1 style="font-size: 24px">Mã QR chuyển khoản ngân hàng</h1>
        <div class="qr-code">
            <img src="./assets/img/qr.png" alt="Mã QR chuyển khoản">
        </div>
        <div class="bank-info" >
            <div>Thông tin chuyển khoản ngân hàng</div>
        </div>
    </div>
    </div>
    <footer class="footer" style="margin-top: 300px;">
        <div class="footer-container">
        <div class="footer-column">
            <h3>Spring coffee</h3>
        </div>

        <div class="footer-column">
            <h4>Hỗ trợ</h4>
            <p>175 Tây Sơn, Đống Đa, Hà Nội</p>
            <p>anhHieu123@gmail.com</p>
            <p>09123456789</p>
        </div>

        <div class="footer-column">
            <h4>Tài khoản</h4>
            <p>Đăng nhập</p>
            <p>Đăng ký</p>
            <p>Yêu thích</p>
            <p>Shop</p>
        </div>

        <div class="footer-column">
            <h4>Thông tin</h4>
            <p>Chính sách bảo mật</p>
            <p>Điều khoản sử dụng</p>
            <p>Câu hỏi thường gặp</p>
            <p>Liên hệ</p>
        </div>

        <div class="footer-column">
            <h4>Giờ hoạt động</h4>
            <p>Thứ 2 - Chủ nhật: 7:00 - 22:00</p>
            <p>Giao hàng toàn thành phố</p>
            <p>Theo dõi chúng tôi:</p>
            <p>🔵 Facebook 🟣 Instagram 🪐 Twitter</p>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a62020562e.js" crossorigin="anonymous"></script>
</body>
</html>
