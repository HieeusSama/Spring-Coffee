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
    <link rel="stylesheet" href="./assets/css/footer.css">  <style>

.container {
  display: flex;
  width: 50%;
  margin: 30px 486px 321.55px 180px;
  gap: 30px;
}

.product-image {
  flex: 1 1 300px;
  text-align: center;
}

.product-image img {
    padding-top: 80px;
  max-width: 100%;
  border-radius: 8px;
}

.product-info {
  flex: 1 1 600px;
  padding-left: 20px;
  line-height: 1.6;
}

.product-info div {
  margin-bottom: 30px;
}

.label {
  font-weight: bold;
}

.price {
  color: red;
  font-weight: bold;
}

.quantity-control {
  display: flex;
  align-items: center;
  gap: 5px;
  margin-top: 5px;
}

.quantity-control button {
  padding: 4px 10px;
  font-size: 16px;
  cursor: pointer;
}

.quantity-control input {
  width: 50px;
  text-align: center;
  font-size: 16px;
}

.btn-order {
  background-color: red;
  color: white !important;
  padding: 10px 20px;
  border: none;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

.btn-order:hover {
  background-color: darkred;
}

  </style>
</head>
<body>
    <div id="header">
        <div class="headerTop"></div>
        <div class="headerNavbar">
            <a href="{{ route('user') }}"><img src="./assets/img/logo.png" alt="" class="headerNavbar__logo"></a>
            <div class="headerNavbar__search">
                <select class="headerNavbar__search--btnSelect">
                    <option value="all">Tất cả</option>
                    <option value="coffee">Cà phê</option>
                    <option value="tea">Trà</option>
                    <option value="matcha">Matcha</option>
                    <option value="cake">Bánh ngọt</option>
                </select>
                <input type="text" class="headerNavbar__search--input" placeholder="Tìm kiếm bằng từ khóa">
                <button class="headerNavbar__search--btnSearch">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <button class="headerNavbar__advancedSearch">
                Tìm kiếm<br>
                Nâng cao
            </button>
            <ol class="headerNavbar__list">
                <li class="headerNavbar__list--elements">
                    <i class="fa-solid fa-heart" style="margin-bottom: 5px;"></i>
                    Yêu thích
                </li>
                <li class="headerNavbar__list--elements">
                    <i class="fa-solid fa-circle-user" style="margin-bottom: 5px;"></i>
                    Tài khoản
                </li>
                <li class="headerNavbar__list--elements">
                    <i class="fa-solid fa-cart-shopping" style="margin-bottom: 5px;"></i>
                    Giỏ hàng
                </li>
                <li class="headerNavbar__list--elements">
                    <i class="fa-solid fa-question" style="margin-bottom: 5px;"></i>
                    Hỗ trợ
                </li>
            </ol>
        </div>
        <ol class="headerMenu">
            <li class="headerMenu__element--isActive">
                Tất cả
            </li>
            <li class="headerMenu__wall"></li>
            <li class="headerMenu__element">
                Cà phê
            </li>
            <div class="headerMenu__wall"></div>
            <li class="headerMenu__element">
                Trà
            </li>
            <li class="headerMenu__wall"></li>
            <li class="headerMenu__element">
                Matcha
            </li>
            <li class="headerMenu__wall"></li>
            <li class="headerMenu__element">
                Bánh ngọt
            </li>
        </ol>
        <div class="headerFloor"></div>
    </div>  
    <div class="container">
        <div class="product-image">
            <img src="./assets/img/coffee1.png" alt="Bạc xỉu">
        </div>
        <div class="product-info">
            <div>
            <h3>Cà phê truyền thống</h3>
            </div>

            <div>
            <span class="label">Mô tả:</span>
            <p>Thức uống được kết hợp giữa cà phê và sữa, với tỷ lệ sữa nhiều hơn cà phê. Thức uống này được ưa chuộng vì hương vị béo ngậy, ít đắng và dễ uống.</p>
            </div>

            <div>
            <span class="label">Giá tiền:</span>
            <span class="price">49.000đ</span>
            </div>

            <div>
            <span class="label">Số lượng:</span>
            <div class="quantity-control">
            <button onclick="decreaseQuantity()">-</button>
            <input value="1" min="1">
            <button onclick="increaseQuantity()">+</button>
            </div>
            </div>

            <div style="margin-top: 25px;">
                <a href="{{ route('user_xem_gio_hang') }}" class="btn-order">Đặt hàng</a>
            </div>
        </div>
    </div>
    <footer class="footer">
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
    </div>
    <script src="https://kit.fontawesome.com/a62020562e.js" crossorigin="anonymous"></script>
</body>
</html>
