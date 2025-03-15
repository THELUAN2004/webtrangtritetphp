<?php
// define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/admin/lib/database.php');
require_once(__ROOT__.'/admin/lib/session.php');
// include "../lib/database.php";
// include "../lib/session.php";
?>

<?php
class admin
{

   private $db;

public function __construct()
   {
       $this ->db = new Database();
    
   }
   public function check_admin($username, $userpassword) {
    // Sử dụng prepared statement với dấu chấm hỏi (?) để tránh SQL Injection
    $query = "SELECT * FROM tbl_admin WHERE admin_name = ? LIMIT 1";
    
    $stmt = $this->db->link->prepare($query);
    if (!$stmt) {
        return "Có lỗi trong quá trình xử lý";
    }
    
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result && $result->num_rows > 0) {
        $value = $result->fetch_assoc();
        // So sánh mật khẩu dạng plain text
        if ($userpassword === $value['admin_password']) {
            Session::set('user_login', true);
            Session::set('admin_name', $value['admin_name']);
            Session::set('admin_id', $value['admin_id']);
            header('Location:index.php');
            exit();
        } else {
            return "Tên đăng nhập hoặc mật khẩu không đúng";
        }
    } else {
        return "Tên đăng nhập hoặc mật khẩu không đúng";
    }
}


   }
?>