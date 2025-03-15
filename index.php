<?php
include "header.php";
include "slider.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Tết Vui Tươi</title>
    
</head>
<body>
    <style>
   .featured-categories {
    padding: 20px;
    background-color: #f9f9f9;
}

.featured-categories h2 {
    text-align: center;
    color: #d32f2f; /* Màu đỏ Tết để phù hợp với chủ đề */
    margin-bottom: 20px;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.category-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    text-align: center;
    display: flex; /* Sử dụng Flexbox để căn chỉnh nội dung */
    flex-direction: column; /* Sắp xếp các phần tử theo cột */
    justify-content: space-between; /* Đảm bảo nội dung được phân bố đều */
    height: 100%; /* Đảm bảo các item có chiều cao bằng nhau */
}

.category-item img {
    width: 100%; /* Ảnh lấp đầy chiều rộng của phần tử cha */
    height: 200px; /* Chiều cao cố định cho ảnh */
    object-fit: cover; /* Cắt ảnh để lấp đầy khung mà không làm méo */
    border-radius: 5px;
}

.category-item h3 {
    margin: 10px 0;
    color: #333;
}

.category-item p {
    color: #666;
    flex-grow: 1; /* Cho phép phần mô tả mở rộng để đẩy nút xuống dưới */
}

.category-item a {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #d32f2f; /* Màu đỏ Tết */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}
    </style>
<div class="featured-categories">
    <h2>Danh mục nổi bật</h2>
    <div class="category-grid">
        <div class="category-item">
            <img src="image/category1.jpg" alt="Cây trang trí Tết">
            <h3>Cây trang trí Tết</h3>
            <p>Mang không gian xanh vào nhà với cây cảnh tươi tốt.</p>
            <a href="cartegory.php?loaisanpham_id=29">Xem thêm</a>
        </div>
        <div class="category-item">
            <img src="image/category2.jpeg" alt="Combo decor Tết">
            <h3>Combo decor Tết</h3>
            <p>Biến hóa không gian với các combo trang trí độc đáo.</p>
            <a href="cartegory.php?loaisanpham_id=32">Xem thêm</a>
        </div>
        <div class="category-item">
            <img src="image/category3.jpg" alt="Quạt giấy truyền thống">
            <h3>Quạt giấy truyền thống</h3>
            <p>Tô điểm không gian với nét đẹp văn hóa truyền thống.</p>
            <a href="cartegory.php?loaisanpham_id=28">Xem thêm</a>
        </div>
    </div>
    
</div>

    <br>
    <div class="bannertongduoi">
        <div class="doi1">
            <img src="image/caudoiphai.jpeg" alt="">
        </div>
        <div class="doi2">
            <img src="image/caudoitrai.png" alt="">
        </div>
        <div class="banner1">
            <div class="banner1text">
                <h2> "Không gian xanh – Sống trọn cảm hứng!"</h2>
                <p>Mang thiên nhiên vào ngôi nhà bạn với những chậu cây trang trí đầy sức sống. Thanh lọc không khí, tạo điểm nhấn tinh tế!</p>
            </div>
            <div class="banner1img">
                <img src="image/img1.jpg" alt="">
            </div>
        </div>
        <div class="banner1">
            <div class="banner1img">
                <img src="image/img2.jpg" alt="">
            </div>
            <div class="banner1text">
                <h2>"Combo trang trí – Biến hóa không gian ngay tức thì!"</h2>
                <p>Chọn ngay combo decor độc đáo giúp căn phòng thêm sang trọng, ấm cúng và đầy phong cách. Nhiều mẫu phối hợp sẵn tiện lợi!</p>
            </div>
        </div>
        <div class="banner1">
            <div class="banner1text">
                <h2>"Nét đẹp truyền thống – Vẻ đẹp tinh tế!"</h2>
                <p> Những chiếc quạt giấy mang đậm hơi thở văn hóa, vừa trang trí vừa thể hiện phong cách riêng. Mua ngay để tô điểm không gian của bạn!</p>
            </div>
            <div class="banner1img">
                <img src="image/img3.jpeg" alt="">
            </div>
        </div>
    </div>
    <h1 style="text-align: center; margin: 20px 0; color:rgb(208, 4, 53);">Cái tên "Tết vui tươi" chúng tôi đặt hết tấm lòng mình vào đấy</h1>
    <h3 style="text-align: center;margin: 20px 0; "> "Tết vui tươi" không chỉ đơn thuần là một câu nói mà còn thể hiện khát vọng về một năm mới tràn đầy niềm vui, may mắn và sự khởi sắc trong cuộc sống</h3>
    <div class="bannertongtren">
        <h1>Ngày Tết truyền thống</h1>
        <h2>Nhà rực rỡ, hạnh phúc – Đoàn viên, niềm vui – Gia đình sung túc – Chúc phúc tràn đầy</h2>
        <p>Trong ngày Tết, gia đình cùng nhau thăm viếng người thân và bạn bè. Những lời chúc phúc và lì xì may mắn được trao đổi.</p>
        <p>Trẻ em háo hức nhận những lì xì từ người lớn, trong khi người lớn trao đổi những câu chuyện và kỷ niệm đáng nhớ.</p>
        <div class="bannertongtren-img">
            <div class="bannertongtren-img1">
            <img src="image/img1.jpg" alt="">
            </div>
            <div class="bannertongtren-img1">
            <img src="image/img2.jpg" alt="">
            </div>
            <div class="bannertongtren-img1">
            <img src="image/img1.jpg" alt="">
            </div>
        </div>
        <br>
        <h1>Niềm vui tràn đầy</h1>
        <h2>Gia đình sum vầy – Mâm cơm thịnh vượng – Cười nói, chơi đùa – Lì xì, chúc phúc</h2>
        <p>Buổi tối, một màn trình diễn pháo hoa lung linh chiếu sáng bầu trời.</p>
        <p>Mọi người tụ tập lại, ngắm nhìn những ánh sáng rực rỡ và ngưỡng mộ vẻ đẹp của pháo hoa. Tiếng cười và niềm vui tràn đầy, tạo nên không khí phấn khích và phấn chấn.</p>
        <div class="bannertongtren-img">
            <div class="bannertongtren-img1">
            <img src="image/sumenhtet.png" alt="">
            </div>
            <div class="bannertongtren-img1">
            <img src="image/img1.jpg" alt="">
            </div>
            <div class="bannertongtren-img1">
            <img src="image/giadinh.jpg" alt="">
            </div>
        </div>
        <br>
    </div>
</body>
</html>

<?php
include "footer.php"
?>