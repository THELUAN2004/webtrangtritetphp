<?php
include "header.php";
include "leftside.php";
include_once "../helper/format.php";

$product = new product();
$fm = new Format();

// Kiểm tra xem có tìm kiếm sản phẩm không
if(isset($_GET['keyword']) && !empty($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $show_product = $product->search_product($keyword);
} else {
    $show_product = $product->show_product();
}
?>

<div class="admin-content-right">
    <div class="table-content">
    <h1>Danh sách sản phẩm</h1>
        <!-- Thanh tìm kiếm -->
        <form action="" method="GET" style="margin-bottom:20px;">
            <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm..." 
                   value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>" 
                   style="padding:8px; width:300px;">
            <input type="submit" value="Tìm kiếm" style="padding:8px;">
        </form>

        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Mã</th>
                <th>Danh mục</th>
                <th>Loại sản phẩm</th>
                <th>Giá</th> 
                <th>Chi tiết</th> 
                <th>Bảo quản</th>   
                <th>Ảnh</th>   
                <th>Ảnh sản phẩm</th>     
                <th>Size sản phẩm</th>                
                <th>Tùy chỉnh</th>
            </tr>
            <?php
            if($show_product){
                $i=0; 
                while($result = $show_product->fetch_assoc()){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['sanpham_id'] ?></td>
                <td><?php echo $fm->textShorten($result['sanpham_tieude'], 30); ?></td>
                <td><?php echo $result['sanpham_ma'] ?></td>
                <td><?php echo $result['danhmuc_ten'] ?></td>
                <td><?php echo $result['loaisanpham_ten'] ?></td>
                <td><?php echo $result['sanpham_gia'] ?></td>
                <td><?php echo $fm->textShorten($result['sanpham_chitiet'], 30); ?></td>
                <td><?php echo $fm->textShorten($result['sanpham_baoquan'], 30); ?></td>                  
                <td>
                    <img style="width: 100px; height: 50px" src="uploads/<?php echo $result['sanpham_anh'] ?>" alt="">
                </td>                
                <td>
                    <a href="anhsanphamlist.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Xem</a>
                </td>
                <td>
                    <a href="sizesanphamlist.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Xem</a>
                </td>
                <td>
                    <a href="productedit.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Sửa</a> |
                    <a href="productdelete.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Xóa</a>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>        
</div>
</section>
<section>
</section>
<script src="js/script.js"></script>
</body>
</html>
