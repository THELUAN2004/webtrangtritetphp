<?php
include "class/search_class.php";

// Kiểm tra nếu có từ khóa tìm kiếm được gửi lên qua GET
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = $_GET['query'];
    $search = new Search();
    $results = $search->searchProduct($query);
} else {
    echo "Vui lòng nhập từ khóa tìm kiếm.";
    exit;
}
?>
<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <style>
        body {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        .search-results {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 70px;
            margin-bottom: 10px;
        }
        
        .product-item {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border: 2px solid #FFD700;
            padding: 15px;
            text-align: center;
            transition: box-shadow 0.3s ease;
        }
        
        .product-item:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        .product-item h1 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
            /* Nếu tên sản phẩm quá dài, giới hạn hiển thị 2 dòng */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        
        /* Container chứa giá và nút, đẩy xuống dưới cùng */
        .product-bottom {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .product-bottom p {
            font-size: 16px;
            color: #e74c3c;
            margin: 0;
        }
        
        .product-bottom a {
            display: inline-block;
            padding: 8px 16px;
            background-color: rgb(208, 4, 53);
            color: #FFD700;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="search-results">
        <?php
        if ($results && $results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                echo '<div class="product-item">';
                    echo '<img src="admin/uploads/' . $row['sanpham_anh'] . '" alt="' . $row['sanpham_tieude'] . '">';
                    echo '<h1>' . $row['sanpham_tieude'] . '</h1>';
                    echo '<div class="product-bottom">';
                        echo '<p>' . number_format($row['sanpham_gia']) . '<sup>đ</sup></p>';
                        echo '<a href="product.php?sanpham_id=' . $row['sanpham_id'] . '">Xem chi tiết</a>';
                    echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Không tìm thấy sản phẩm nào.";
        }
        ?>
    </div>
</body>
</html>
<?php
    include "footer.php";
?>
