<?php
session_start();
$session_id = session_id();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Giả lập xử lý thanh toán qua QR momo
    header("Location: success.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thanh toán qua QR Code MoMo</title>
  <!-- Import Google Fonts cho kiểu chữ -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Lato', sans-serif;
      background: linear-gradient(135deg, #FFD700, #FF6347);
      margin: 0;
      padding: 0;
      text-align: center;
      color: #333;
    }
    .container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      border: none;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .container h2 {
      color: #b22222;
      font-family: 'Pacifico', cursive;
      margin-bottom: 20px;
    }
    .qr-container {
      margin: 20px 0;
    }
    .qr-container img {
      width: 100%;
      max-width: 250px;
      border: 3px solid #b22222;
      border-radius: 10px;
    }
    button {
      padding: 12px 20px;
      background-color: #b22222;
      color: #fff;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #8b1a1a;
    }
    .note {
      background-color: #fff4e6;
      border: 2px dashed #b22222;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 20px;
      font-weight: bold;
      color: #b22222;
    }
    .error {
      color: red;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
      <h2>Thanh toán qua QR Code MoMo</h2>
      <p>Quét mã QR bên dưới nhập số tiền và nội dung chuyển khoản bằng ứng dụng MoMo của bạn để thanh toán.</p>
      <div class="qr-container">
        <img src="image/qrmomo.jpg" alt="QR Code MoMo">
      </div>
      <div class="note">
        Nội dung chuyển khoản bắt buộc: <strong>tvt<?php $ma = substr($session_id,0,8); echo $ma   ?></strong>
      </div>
      <form method="POST" action="">
        <button type="submit">Hoàn thành</button>
      </form>
  </div>
</body>
</html>
