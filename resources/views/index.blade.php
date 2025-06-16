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
            <img src="./assets/img/logo.png" alt="" class="headerNavbar__logo">
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
                    <i class="fa-solid fa-user-plus" style="margin-bottom: 5px;"></i>
                    Đăng ký
                </li>
                <a href="{{ route('user') }}"> 
                    <li class="headerNavbar__list--elements">
                        <i class="fa-solid fa-right-to-bracket" style="margin-bottom: 5px;"></i>
                        Đăng nhập
                    </li>     
                </a>
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
    <container class="container">
        <div class="slider">
            <div class="slides">
                <img class="slide" src="./assets/img/banner1.png" alt="Image #1">
                <img class="slide" src="./assets/img/banner2.png" alt="Image #2">
                <img class="slide" src="./assets/img/banner3.png" alt="Image #3">
            </div>
            <button class="prev" onclick="prevSlide()">&#10094</button>
            <button class="next" onclick="nextSlide()">&#10095</button>
        </div>
        <section class="product-section">
            <div style="margin-bottom: 20px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <div style="width: 20px; height: 40px; background-color: red; border-radius: 4px;"></div>
                <span style="color: red; font-weight: bold; font-size: 14px;">Today's</span>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div style="font-size: 32px; font-weight: bold; margin: 35px 0 35px 0">
                Coffee and chill
                </div>
                <div>
                    <button class="nav prev">&#8592;</button>
                    <button class="nav next">&#8594;</button>
                </div>
            </div>
            </div>
            
            <div class="slider-wrapper">
            <div class="product-slider" id="slider">
                <div class="product-card">
                    <div class="product-image">
                        <div class="discount-badge">-40%</div>
                        <img src="./assets/img/coffee1.png" alt="Cà phê truyền thống">
                        <div class="product-actions">
                            <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4>Cà phê truyền thống</h4>
                        <div class="price">
                            <span class="new-price">35.000 đ</span>
                            <span class="old-price">40.000 đ</span>
                        </div>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="count">(88)</span>
                        </div>
                    </div>
                </div>
                <!-- GEN -->
                 <div class="product-card">
                    <div class="product-image">
                        <div class="discount-badge">-40%</div>
                        <img src="./assets/img/coffee1.png" alt="Cà phê truyền thống">
                        <div class="product-actions">
                            <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4>Cà phê truyền thống</h4>
                        <div class="price">
                            <span class="new-price">35.000 đ</span>
                            <span class="old-price">40.000 đ</span>
                        </div>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="count">(88)</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <div class="discount-badge">-40%</div>
                        <img src="./assets/img/coffee1.png" alt="Cà phê truyền thống">
                        <div class="product-actions">
                            <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4>Cà phê truyền thống</h4>
                        <div class="price">
                            <span class="new-price">35.000 đ</span>
                            <span class="old-price">40.000 đ</span>
                        </div>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="count">(88)</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <div class="discount-badge">-40%</div>
                        <img src="./assets/img/coffee1.png" alt="Cà phê truyền thống">
                        <div class="product-actions">
                            <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4>Cà phê truyền thống</h4>
                        <div class="price">
                            <span class="new-price">35.000 đ</span>
                            <span class="old-price">40.000 đ</span>
                        </div>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="count">(88)</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <div class="discount-badge">-40%</div>
                        <img src="./assets/img/coffee1.png" alt="Cà phê truyền thống">
                        <div class="product-actions">
                            <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4>Cà phê truyền thống</h4>
                        <div class="price">
                            <span class="new-price">35.000 đ</span>
                            <span class="old-price">40.000 đ</span>
                        </div>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="count">(88)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </section>
        <script src="./assets/js/index.js"></script>
    </container>
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
