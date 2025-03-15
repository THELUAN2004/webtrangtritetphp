<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="contact.css">
</head>
<style>
/* Phần liên hệ */
.contact-section-theluan {
    margin-top: 50px;
    text-align: center;
    padding: 50px 20px;
background: linear-gradient(135deg, #d32f2f, #ff9800); /* Đỏ & Vàng */
    color: white;
}

.contact-container-theluan {
    max-width: 800px;
    margin: auto;
}

.contact-title-theluan {
    font-size: 36px;
    margin-bottom: 20px;
}

.contact-description-theluan {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
}

.contact-content-theluan {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.contact-info-theluan,
.contact-form-theluan {
    background: white;
    color: red;
    padding: 20px;
    border-radius: 10px;
    width: 350px;
    text-align: left;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-info-theluan h2,
.contact-form-theluan h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: red;
}

.contact-info-theluan p {
    font-size: 16px;
    margin: 8px 0;
}

/* Biểu mẫu liên hệ */
.contact-form-theluan input,
.contact-form-theluan textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form-theluan button {
    width: 100%;
    padding: 12px;
    background: red;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background 0.3s;
}

.contact-form-theluan button:hover {
    background: #218838;
}

/* Phần bản đồ */
.map-section-theluan {
    text-align: center;
    padding: 50px 20px;
    background-color: #ffffff;
}

.map-title-theluan {
    font-size: 30px;
    color: #333;
    margin-bottom: 30px;
}

.map-container-theluan iframe {
    width: 80%;
    max-width: 800px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

</style>
<body>

    <!-- Phần liên hệ -->
    <section class="contact-section-theluan">
        <div class="contact-container-theluan">
            <h1 class="contact-title-theluan">Liên Hệ Với Chúng Tôi</h1>
            <p class="contact-description-theluan">
                Nếu bạn có bất kỳ câu hỏi nào, đừng ngần ngại liên hệ với chúng tôi. Chúng tôi luôn sẵn sàng hỗ trợ bạn!
            </p>

            <div class="contact-content-theluan">
                <div class="contact-info-theluan">
                    <h2>Thông Tin Liên Hệ</h2>
                    <p><strong>📍 Địa chỉ:</strong> EAUT, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam</p>
                    <p><strong>📞 Điện thoại:</strong> 0378 902 874</p>
                    <p><strong>✉ Email:</strong> support@theluan.com</p>
                    <p><strong>⏰ Giờ làm việc:</strong> 08:00 - 18:00 (Thứ 2 - Thứ 6)</p>
                </div>

                <div class="contact-form-theluan">
                    <h2>Gửi Tin Nhắn</h2>
                    <form action="#" method="POST">
                        <input type="text" name="name" placeholder="Họ và Tên" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Nội dung tin nhắn" rows="5" required></textarea>
                        <button type="submit">Gửi Tin Nhắn</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần bản đồ -->
    <section class="map-section-theluan">
        <h2 class="map-title-theluan">Bản Đồ</h2>
        <div class="map-container-theluan">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.716551013564!2d106.6783560748143!3d10.755341659500244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f41c3cdeefd%3A0x72b8e53a136c10f3!2zMTIzIMSQxrDhu51uZyBBQkMsIFBoxrDhu51uZyAxLCBQaMO6IEdpw6FuZyBLaMOhbmcsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVMOieSBIw7JhIHBo4buRIE1pbmggMTAwMDAw!5e0!3m2!1svi!2s!4v1710261945835" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>

</body>
</html>


<?php
    include "footer.php";
?>
