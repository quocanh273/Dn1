
<?php 
include "../header.php";
?>
<div class="container">
        <h2>Thêm Mới Danh Mục</h2>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="maloai">Mã Loại:</label>
                <input type="text" class="form-control" name="maloai" disabled>
            </div>
            <div class="form-group">
                <label for="tenloai">Tên Loại:</label>
                <input type="text" class="form-control"  placeholder="Tên Loại" name="tenloai">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
      </label>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
        </form>
    </div>
    