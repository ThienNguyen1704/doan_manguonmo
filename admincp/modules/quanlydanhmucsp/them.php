<p>Thêm danh mục sản phẩm</p>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action="modules/quanlydanhmucsp/xuly.php">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Tên danh mục</label>
    <div class="col-sm-10">
      <input name="tendanhmuc" type="text" class="form-control" id="staticEmail" placeholder="Tên danh mục">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Thứ tự</label>
    <div class="col-sm-10">
      <input name="thutu" type="text" class="form-control" id="inputPassword" placeholder="Thứ tự">
    </div>
  </div>
  <div class="form-group row">
  <label for="inputPassword" class="col-sm-2 col-form-label"></label>

  <div class="col-sm-10">
  	<input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm">
    </div>

  </div>

</form>
</body>
</html>