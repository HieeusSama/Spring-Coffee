# ☕ SpringCoffee - Website Bán Cà Phê  
> Dự án thực hiện bởi Nhóm 13 - Môn Tương tác người máy

## 📌 Giới thiệu

**SpringCoffee** là website thương mại điện tử chuyên cung cấp các sản phẩm cà phê, combo khuyến mãi và dịch vụ đặt hàng online. Giao diện hiện đại, dễ sử dụng, tối ưu cho trải nghiệm người dùng.

Website được xây dựng bằng framework **Laravel** kết hợp HTML, CSS, JavaScript, mang đến hiệu năng ổn định và khả năng mở rộng cao.

---

## 🚀 Tính năng chính

-  Trang chủ hiển thị banner, sản phẩm nổi bật, combo ưu đãi.
-  Giỏ hàng và đặt hàng online tiện lợi.
-  Tìm kiếm và lọc sản phẩm theo tên, loại.
-  Quản lý đơn hàng, cập nhật trạng thái đơn.
-  Quản lý sản phẩm.
-  Phân quyền người dùng (người dùng, nhân viên, nhân viên giao hàng).

---

## 🛠️ Công nghệ sử dụng

| Công nghệ        | Mô tả |
|------------------|-------|
| Laravel          | PHP framework theo mô hình MVC |
| MySQL            | Quản lý cơ sở dữ liệu |
| Blade Template   | Engine giao diện của Laravel |
| HTML/CSS/JS      | Thiết kế giao diện người dùng |
| FontAwesome      | Thư viện icon chuyên nghiệp |

---

## ⚙️ Hướng dẫn cài đặt

```bash
# Clone dự án về máy
git clone https://github.com/HieeusSama/Spring-Coffee.git
cd SpringCoffee

# Cài đặt thư viện PHP
composer install

# Tạo file .env và generate key
cp .env.example .env
php artisan key:generate

# Khởi động server
php artisan serve
