<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Tên chung cư:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="tenChungCu">
        </div>
        @error('tenChungCu')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="pwd">Ðịa chỉ :</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="diaChi">
        </div>
        @error('diaChi')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="pwd">Giá bán :</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="giaBan">
        </div>
        @error('giaBan')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="pwd">Thông tin chung:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="thongTinChung">
        </div>
        @error('thongTinChung')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="pwd">Thông tin chi tiết:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="thongTinChiTiet">
        </div>
        @error('thongTinChiTiet')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="pwd">Hình đại diện:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="hinhDaiDien">
        </div>
        @error('hinhDaiDien')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="pwd">Trang thai:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="trangThai">
        </div>
        @error('trangThai')
        <div class="text-danger">* {{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-submit">Submit</button>
    </form>
</div>

</body>
</html>
