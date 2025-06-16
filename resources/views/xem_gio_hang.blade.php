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
    <div class="address-popup" id="addressPopup">
        <div class="address-popup-content">
            <h1>Địa chỉ</h1>
            <div style="display: flex; justify-content: space-between;">
                <input type="text" placeholder="Họ và tên" style="width: 215px; height: 38px;">
                <input type="tel" placeholder="Số điện thoại" style="width: 215px; height: 38px;">
            </div>
            
            <select>
                <option value="" style="color: #000000;">Tỉnh/Thành phố, Quận/Huyện, Phường/Xã</option>
                <option value="hn" style="color: #000000;">Hà Nội</option>
                <option value="hcm" style="color: #000000;">TP.Hồ Chí Minh</option>
            </select>
            
            <input type="text" style="padding-bottom: 58px; " placeholder="Địa chỉ cụ thể">
            <div style="margin-top: 130px; "></div>
            <div class="address-popup-buttons">
                <button class="address-popup-back" id="popupBackBtn">Trở lại</button>
                <button class="address-popup-complete" id="popupCompleteBtn">Hoàn thành</button>
            </div>
        </div>
    </div>

    <div id="header">
        <div class="headerTop"></div>
        <div class="headerNavbar">
            <a href="{{ route('user') }}"><img src="./assets/img/logo.png" alt="" class="headerNavbar__logo"></a>
            <div class="wallheader"></div>
            <div class="textcart">Giỏ hàng</div>
        </div>
        <div class="headerFloor" style ="margin-top: 20px"></div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="cart">
            <table>
            <thead>
                <tr>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
                <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="product">
                    <img src="./assets/img/coffee1.png" alt="Cà phê truyền thống" />
                    <span>Cà phê truyền thống</span>
                </td>
                <td>₫24.500</td>
                <td class="quantity">
                    <button>+</button>
                    <span>2</span>
                    <button>-</button>
                </td>
                <td>₫49.000</td>
                <td><a href="#">Xóa</a></td>
                </tr>
            </tbody>
            </table>

            <div class="total">
                <span style="margin-right: 10px">Tổng cộng (1 Sản phẩm):</span>
                <span class="price" style="margin-right: 80px">₫49.000</span>
                <button class="buy" id="buyNowBtn">Mua ngay</button>
            </div>
        </div>
    </div>

    <footer class="footer" style="margin-top: 400px;">
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
    
    <script>
        document.getElementById('popupBackBtn').addEventListener('click', function() {
            document.getElementById('addressPopup').style.display = 'none';
            window.location.href = '{{ route("user_xem_san_pham") }}';
        });
        
        document.getElementById('popupCompleteBtn').addEventListener('click', function() {
            // Lấy thông tin từ form
            const name = document.querySelector('.address-popup input[placeholder="Họ và tên"]').value;
            const phone = document.querySelector('.address-popup input[placeholder="Số điện thoại"]').value;
            const address = document.querySelector('.address-popup input[placeholder="Địa chỉ cụ thể"]').value;
            
            if (!name || !phone || !address) {
                alert('Vui lòng điền đầy đủ thông tin địa chỉ!');
                return;
            }
            
            document.getElementById('addressPopup').style.display = 'none';
            
            localStorage.setItem('deliveryAddress', JSON.stringify({
                name: name,
                phone: phone,
                address: address
            }));
        });

        document.getElementById('buyNowBtn').addEventListener('click', function() {
            const savedAddress = localStorage.getItem('deliveryAddress');
            if (!savedAddress) {
                document.getElementById('addressPopup').style.display = 'flex';
                return;
            }
            
            window.location.href = '{{ route("user_thanh_toan") }}';
        });
    </script>
    <script src="https://kit.fontawesome.com/a62020562e.js" crossorigin="anonymous"></script>
</body>
</html>