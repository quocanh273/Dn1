<div class="container">
        <h2>Quản lý Sản Phẩm</h2>
        <p><a href="index.php?pg=sanpham_add">Thêm sản phẩm</a></p>
        <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>MÃ LOẠI</th>
            <th>TÊN SẢN PHẨM</th>
            <th>HÌNH </th>
            <th>GIÁ</th>
            <th>LƯỢT XEM</th>
            <th>NGÀY NHẬP</th>
            <th>Chức năng</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($listhh as $hang_hoa) {
            extract($hang_hoa);
            $suasp = "index.php?act=suasp&id=".$ma_hh;
            $xoasp = "index.php?act=xoasp&id=".$ma_hh; // đường liên kết 
            $hinhpath = "../upload/".$hinh;
            if (is_file($hinhpath)) {
                $hinh1="<img src='".$hinhpath."' height='80'>" ;
            }else{
                $hinh1 = "không có hình";
            }
            echo '  <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>'.$ma_hh.'</td>
            <td>'.$ten_hh.'</td>
            <td>'.$hinh1.'</td>
            <td>'.$don_gia.'</td>
            <td>'.$so_luot_xem.'</td>
            <td>'.$ngay_nhap.'</td>
            <td>   <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                    <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
            </td>
        </tr>';
        }
                        ?>
        </tbody>
        </table>
</div>      
