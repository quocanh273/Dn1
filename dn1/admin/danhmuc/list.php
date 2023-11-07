

<div class="container">
        <h2>Quản lý danh mục</h2>
        <p><a href="index.php?pg=danhmuc_add">Thêm danh mục</a></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>MÃ LOẠI</th>
                    <th>Tên danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   // echo var_dump($dsdm);
                    foreach ($dsdm as $dm) {

                        extract($dm);
                        $suadm = "index.php?pg=suadm&ma_loai=".$ma_loai;
                        $xoadm = "index.php?pg=xoadm&ma_loai=".$ma_loai; // đường liên kết 
                        echo '<tr>
                        <td>'.$ma_loai.'</td>
                        <td>'.$ten_loai.'</td>
                        <td> <a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                ?>
           </tbody>
        </table>
    </div>