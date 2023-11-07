<div class="container">
        <h2>Thêm Mới Sản Phẩm</h2>
        <form action="/action_page.php">
                        Danh mục <br>
                        <select name="ma_loai">
                        <?php 
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                echo '   <option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                            }
                            ?>
                        ?>
                         
                        </select>
            <div class="form-group">
                <label for="tenhh">Tên Hàng Hóa:</label>
                <input type="text" class="form-control" placeholder="Tên Hàng Hóa" name="tenhh">
            </div>
            <div class="form-group">
                <label for="don_gia">Đơn giá:</label>
                <input type="text" class="form-control" placeholder="Giá" name="don_gia">
            </div>
            <div class="form-group">
                <label for="giam_gia">Giảm giá:</label>
                <input type="text" class="form-control" placeholder="Giảm Giá" name="giam_gia">
            </div>
            <div class="form-group">
                <label for="hinh">Hình:</label>
                <input type="file" class="form-control"  name="hinh">
            </div>
            <div class="form-group">
                <label for="dac_biet">Đặc Biệt:</label>
                <input type="number" class="form-control" placeholder="Đặc Biệt" name="dac_biet">
            </div>
            <div class="form-group">
                <label for="ngay_nhap">Ngày Nhập:</label>
                <input type="date" class="form-control"  name="ngay_nhap">
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô tả:</label>
                <textarea name="mo_ta"  cols="30" rows="10"></textarea>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
      </label>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
        </form>
    </div>