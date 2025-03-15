<?php
class Search {
    private $conn;

    // Khởi tạo kết nối CSDL (điền thông tin kết nối thật của bạn)
    public function __construct() {
        $host = "sql311.infinityfree.com";
        $user = "if0_38468465";
        $password = "oz5WLsmAjLj";
        $database = "if0_38468465_web_ttt";
        $this->conn = new mysqli($host, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
         // Đặt UTF-8 để tránh lỗi font tiếng Việt
        $this->conn->set_charset("utf8mb4");
    }

    // Phương thức tìm kiếm sản phẩm theo từ khóa
    public function searchProduct($keyword) {
        // Dùng <mark>real_escape_string</mark> để tránh SQL Injection
        $keyword = $this->conn->real_escape_string($keyword);
        $sql = "SELECT * FROM tbl_sanpham WHERE sanpham_tieude LIKE '%$keyword%'";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
