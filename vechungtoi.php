<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về chúng tôi - Nhóm 3</title>
</head>
<style>
  
    .vechungtoi{
        top: 50px;
        margin: 0;
        height: 500px;
        text-align: center;
    }
    .vechungtoi-title{
        width: 100%;
        color: white;
        position: absolute;
        z-index: 1;
    }
    .vechungtoi-title h1{
        margin-top: 50px;

    }
    .vechungtoi-title p{
        margin-top: 30px;
    }
    .vechungtoi-title button{
        margin-top: 30px;
        width: 150px;
        height: 40px;
        border: none;
        border-radius: 20px;
        color: yellow;
        background-color: red
    }
    .vechungtoi-title button:hover{
        cursor: pointer;
    }
    .vechungtoi {
    position: relative;
    background: url('image/sinhvien.jpg') no-repeat center;
    background-size: cover;
}

    .vechungtoi::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7); /* Điều chỉnh độ mờ tại đây */
 
}
/* Phần giới thiệu */
.about-section-theluan {
    text-align: center;
    padding: 50px 20px;
    color: white;
}

.about-container-theluan {
    max-width: 800px;
    margin: auto;
}

.about-title-theluan {
    font-size: 36px;
    margin-bottom: 20px;
}

.about-description-theluan {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
}

.about-content-theluan {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.about-box-theluan {
    background: white;
    color: black;
    padding: 20px;
    border-radius: 10px;
    width: 250px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.about-box-theluan:hover {
    transform: scale(1.05);
}

.about-box-theluan h2 {
    font-size: 22px;
    margin-bottom: 10px;
}

.about-box-theluan p {
    font-size: 16px;
}

/* Phần đội ngũ */
.team-section-theluan {
    text-align: center;
    padding: 50px 20px;
    background-color: #ffffff;
}

.team-title-theluan {
    font-size: 30px;
    color: #333;
    margin-bottom: 30px;
}

.team-container-theluan {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.team-member-theluan {
    background: #f1f1f1;
    padding: 20px;
    border-radius: 10px;
    width: 200px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.team-member-theluan img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    margin-bottom: 15px;
    transition: transform 0.3s ease-in-out;
}

.team-member-theluan img:hover {
    transform: scale(1.1);
    

}

.team-member-theluan h3 {
    font-size: 20px;
    color: black;
    margin-bottom: 5px;
}

.team-member-theluan p {
    font-size: 16px;
    color: #555;
}
</style>
<body>
    <div class="vechungtoi">
        <div class="vechungtoi-title">
            <h1>VỀ CHÚNG TÔI</h1>
        <p>Chúng tôi là nhóm sinh viên DCCNTT13.10.5 gồm 3 thành viên, với kiên thức đã học được chúng tôi đã xây dựng lên trang web php bán đồ trang trí tết.</p>
        <button><a href="lienhe.php" style="text-decoration: none;
    color: yellow;">LIÊN HỆ</a></button></div>
        
    </div>
 <!-- Phần giới thiệu -->
 <section class="about-section-theluan">
        <div class="about-container-theluan">
           <br>
            <div class="about-content-theluan">
                <div class="about-box-theluan">
                    <h2>Sứ Mệnh</h2>
                    <p>Cung cấp sản phẩm và dịch vụ xuất sắc, giúp khách hàng đạt được mục tiêu của họ.</p>
                </div>
                <div class="about-box-theluan">
                    <h2>Tầm Nhìn</h2>
                    <p>Trở thành thương hiệu đáng tin cậy, dẫn đầu trong lĩnh vực mà chúng tôi hoạt động.</p>
                </div>
                <div class="about-box-theluan">
                    <h2>Giá Trị</h2>
                    <p>Chúng tôi luôn đổi mới, sáng tạo và đặt sự hài lòng của khách hàng lên hàng đầu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần đội ngũ -->
    <section class="team-section-theluan">
        <h2 class="team-title-theluan">Đội Ngũ Của Chúng Tôi</h2>
        <div class="team-container-theluan">
            <div class="team-member-theluan">
                <img src="image/luan.jpg" alt="Thành viên 1">
                <h3>Trịnh Thế Luân</h3>
                <p>Nhà sáng lập</p>
            </div>
            <div class="team-member-theluan">
                <img src="image/duy.jpg" alt="Thành viên 2">
                <h3>Hoàng Minh Duy</h3>
                <p>Thiết kế UI/UX</p>
            </div>
            <div class="team-member-theluan">
                <img src="image/vinh.jpg" alt="Thành viên 3">
                <h3>Phạm Quang Vinh</h3>
                <p>Lập trình viên</p>
            </div>
            <div class="team-member-theluan">
                <img src="image/thao.png" alt="Thành viên 4">
                <h3>Lưu Thị Thảo</h3>
                <p>Giảng viên</p>
            </div>
        </div>
    </section>

</body>
</html>
<?php
    include "footer.php";
?>
