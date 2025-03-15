<?php
include "header.php";
include "leftside.php"
?>
<?php
if (isset($_GET['loaisanpham_id']) || $_GET['loaisanpham_id'] != NULL) {
    $loaisanpham_id = $_GET['loaisanpham_id'];
}
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
$get_loaisanpham = $index->get_loaisanpham($loaisanpham_id, $sort);
?>


<style>
 
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
    
</body>
</html>
<div class="cartegory-right">
    <div class="cartegory-right-top row">
        <div class="cartegory-right-top-item ">
            <?php  
                        $get_loaisanphamA = $index -> get_loaisanphamA($loaisanpham_id);
                        if($get_loaisanphamA){$result = $get_loaisanphamA ->fetch_assoc();} 
                        ?>
            <p><?php if(isset($result['loaisanpham_ten'])) {echo $result['loaisanpham_ten'];}else {echo "Hiện tại chưa có loại sản phẩm nào";}?>
            </p>
        </div>
        <div class="cartegory-right-top-item">
            <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
        </div>
        <div class="cartegory-right-top-item">
    <form id="sortForm" method="GET">
         <!-- Giữ lại tham số lọc sản phẩm hiện có -->
         <input type="hidden" name="loaisanpham_id" value="<?php echo $loaisanpham_id; ?>">
         <select name="sort" id="sort" onchange="this.form.submit();">
              <option value="">Sắp xếp</option>
              <option value="desc" <?php if(isset($_GET['sort']) && $_GET['sort']=='desc') echo 'selected'; ?>>
                  Giá cao đến thấp
              </option>
              <option value="asc" <?php if(isset($_GET['sort']) && $_GET['sort']=='asc') echo 'selected'; ?>>
                  Giá thấp đến cao
              </option>
         </select>
    </form>
</div>

    </div>
    <div class="cartegory-right-content row">
        <?php
                       if($get_loaisanpham){while($resultB = $get_loaisanpham ->fetch_assoc()){
                        ?>
        <div class="cartegory-right-content-item">
            <img src="admin/uploads/<?php echo $resultB['sanpham_anh']?>" alt="">
                <h1><?php echo $resultB['sanpham_tieude']?></h1>
                <div class="product-bottom">
        <p>
            <?php 
                $resultA = number_format($resultB['sanpham_gia']); 
                echo $resultA;
            ?>
            <sup>đ</sup>
        </p>
        <button class="themvaogiohang">
            <a href="product.php?sanpham_id=<?php echo $resultB['sanpham_id']?>">Xem chi tiết...</a>
        </button>
    </div>
        </div>
        <?php
                        }}
                        ?>
    </div>
    <div class="cartegory-right-bottom row">
        <div class="cartegory-right-bottom-items">
            <p>Hiện thị 2 <span>&#124;</span> 4 sản phẩm</p>
        </div>
        <div class="cartegory-right-bottom-items">
            <p><span>&#171;</span> 1 2 3 4 5 <span>&#187;</span> Trang cuối</p>
        </div>
    </div>
</div>
</div>
</div>
</section>

<!-- -------------------------Footer -->
<?php
include "footer.php"
?>