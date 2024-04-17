<p>Thêm sản phẩm</p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
	<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="tensanpham" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" id="exampleFormControlInput1" >
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Giá sản phẩm</label>
                    <input type="text" name="giasp" class="form-control" id="exampleFormControlInput1" >
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" id="exampleFormControlInput1" >
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hình ảnh</label>
                    <input type="file" name="hinhanh" class="form-control" id="exampleFormControlInput1" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tóm tắt</label>
                    <textarea name="tomtat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                    <textarea name="noidung" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Danh mục sản phẩm</label>
					<select name="danhmuc" class="form-select" aria-label="Default select example">
					<?php
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
						<?php
						} 
					?>

					</select>
				</div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tình trạng</label>
					<select name="tinhtrang" class="form-select" aria-label="Default select example">
						<option selected value="1">Kích hoạt</option>
	    				<option value="0">Ẩn</option>
					</select>
				</div>
            </div>
        </div>
		<input type="submit" name="themsanpham" value="Thêm sản phẩm">
	</form>
</div>
</body>
</html>
