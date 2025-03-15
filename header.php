<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
</head>
<body>
    
</body>
</html>
<?php
@ob_start();

// Cấu hình session lifetime (3600 giây = 1 giờ)
$lifetime = 3600;
session_set_cookie_params($lifetime);
ini_set('session.gc_maxlifetime', $lifetime);

// Khởi tạo session
session_start();
$session_id = session_id();

// Các cấu hình khác nếu cần...
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "class/index_class.php";
Session::init();
$index = new index;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <!-- Phần header của trang -->
    <section class="top">
        
        <div class="container">
            <div class="row">
                <div class="menu-bar">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="top-logo">
                    <a href="index.php"><img src="image/logo.png" style="width: 50px;" alt=""></a>
                </div>
                <div class="top-menu-items">
                    <ul>
                        <?php
                        $show_danhmuc = $index->show_danhmuc();
                        if($show_danhmuc){
                            while($result = $show_danhmuc->fetch_assoc()) {
                        ?>
                        <li>
                            <?php echo $result['danhmuc_ten'] ?>
                            <ul class="top-menu-item">
                                <?php
                                $danhmuc_id = $result['danhmuc_id'];
                                $show_loaisanpham = $index->show_loaisanpham($danhmuc_id);
                                if($show_loaisanpham){
                                    while($result = $show_loaisanpham->fetch_assoc()){
                                ?>
                                <li>
                                    <a href="cartegory.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>">
                                        <?php echo $result['loaisanpham_ten'] ?>
                                    </a>
                                </li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                            <i class="fas fa-chevron-down"></i>
                        </li>
                        <?php
                            }
                        }
                        ?>
                        <li><a href="vechungtoi.php" style="color: #FFD700; text-decoration: none;">Về chúng tôi</a></li>
                        <li><a href="lienhe.php" style="color: #FFD700; text-decoration: none;">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li>
                            <form action="search.php" method="GET" class="search-form" style="position: relative; display: inline-block;">
                                <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..."
                                    required style="padding: 8px 50px 8px 12px; border: 1px solid #FFD700; border-radius: 25px; outline: none; width: 250px;">
                                <button type="submit" style="position: absolute; right: 5px; top:5px; border: none; background: none; color: #FFD700; cursor: pointer;">
                                    <i class="fas fa-search" style="font-size: 22px;"></i>
                                </button>
                            </form>
                        </li>
                        <li>
                            <a href="admin/login.php" style="color: black; text-decoration: none;" title="Trang quản lý">
                                <i class="fas fa-user-secret"></i>
                            </a>
                        </li>
                        <li>
                            <a href="cart.php">
                                <i class="fas fa-shopping-cart"></i>
                                <span><?php if(Session::get('SL')) { echo Session::get('SL'); } ?></span>
                            </a>
                            <!-- Nội dung giỏ hàng mini -->
                            <div class="cart-content-mini">
                                <div class="cart-content-mini-top">
                                    <p>Giỏ hàng</p>
                                </div>
                                <?php 
                                $session_id = session_id();
                                $show_cartF = $index->show_cartF($session_id);
                                if($show_cartF){
                                    while($result = $show_cartF->fetch_assoc()){
                                ?>
                                <div class="cart-content-mini-item">
                                    <img style="width:50px" src="<?php echo $result['sanpham_anh'] ?>" alt="">
                                    <div class="cart-content-item-text">
                                        <h1><?php echo $result['sanpham_tieude'] ?></h1>
                                        <p>Size: <?php echo $result['sanpham_size'] ?></p>
                                        <p>SL: <?php echo $result['quantitys'] ?></p>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                                <div class="cart-content-mini-bottom">
                                    <p><a href="detaill.php">Xem chi tiết đơn vừa đặt</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Các phần còn lại của trang -->
</body>
</html>
