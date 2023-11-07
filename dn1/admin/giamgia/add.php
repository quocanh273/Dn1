<?php 
include "../header.php";
?>
<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Admin/Thêm Mã Giảm Gía</a></li>
        
        </ol>
        </div>
        </div>
        </div>
        </div>
    <div class="container">
        <h2>Thêm Mã Giảm Giá</h2>
        <form action="/process_discount.php" method="POST">
            <div class="form-group">
                <label for="ma_giam_gia">Mã Giảm Giá:</label>
                <input type="text" class="form-control" placeholder="Nhập mã giảm giá" name="ma_giam_gia" required>
            </div>
            <div class="form-group">
                <label for="phan_tram_giam">Phần Trăm Giảm:</label>
                <input type="number" class="form-control" placeholder="Phần trăm giảm (%)" name="phan_tram_giam" required>
            </div>
            <div class="form-group">
                <label for="ngay_bat_dau">Ngày Bắt Đầu:</label>
                <input type="date" class="form-control" name="ngay_bat_dau" required>
            </div>
            <div class="form-group">
                <label for="ngay_ket_thuc">Ngày Kết Thúc:</label>
                <input type="date" class="form-control" name="ngay_ket_thuc" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Mã Giảm Giá</button>
        </form>
    </div>
   
    
    