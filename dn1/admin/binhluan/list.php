<?php
include "../header.php";
?>
<div class="container">
        <h2>Quản lý Bình Luận</h2>
        <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>MÃ KHÁCH HÀNG</th>
            <th>MÃ HÀNG HÓA </th>
            <th>NỘI DUNG </th>
            <th>NGÀY BÌNH LUẬN</th>
            <th>Chức năng</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php 
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            // $suabl = "index.php?act=suabl&id=".$id;
                            // $xoabl = "index.php?act=xoabl&id=".$id; // đường liên kết 
                          echo '  <tr>
                          <td><input type="checkbox" name="" id=""></td>
                          <td>'.$ma_kh.'</td>
                          <td>'.$ma_hh.'</td>
                          <td>'.$noi_dung.'</td>
                          <td>'.$ngay_bl.'</td>
                          <td>   
                                 <a href="XÓA"><input type="button" value="Xóa"></a>
                          </td>
                      </tr>';
                        }
                        
                        ?>
        </tbody>
        </table>
</div>      
