<?php
include "../header.php";

?>
<div class="container">
        <h2>QUẢN LÝ TÀI KHOẢN</h2>
        <p><a href="index.php?act=sanpham_add">THÊM TÀI KHOẢN</a></p>
        <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>MẬT KHẨU </th>
            <th>NGÀY SINH</th>
            <th>GMAIL</th>
            <th>NƠI Ở</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
     
               <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Nguyễn Văn A</td>
                <td>123@123</td>
                <td>31/07/2002</td>
                <td>nguyenvana@gmail.com</td>
                <td>Bảo đức</td>
                <td>   <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                </td>
            </tr>
           
                        
            
        </tbody>
        </table>
</div>      
