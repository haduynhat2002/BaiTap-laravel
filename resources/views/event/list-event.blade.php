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
    <h2>List</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Tên chung cư</th>
            <th>Ðịa chỉ</th>
            <th>Giá bán</th>
            <th>Thông tin chung</th>
            <th>Thông tin chi tiết</th>
            <th>Hình đại diện</th>
            <th>Trang thai</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($list as $item)
            <td>{{$item->tenChungCu}}</td>
            <td>{{$item->diaChi}}</td>
            <td>{{$item->giaBan}}</td>
            <td>{{$item->thongTinChung}}</td>
            <td>{{$item->thongTinChiTiet}}</td>
            <td>{{$item->hinhDaiDien}}</td>
            <td>{{$item->trangThai}}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
    {!! $list->links() !!}
</div>
</body>
</html>
