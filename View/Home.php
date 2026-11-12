<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MVC EXAMPLE</title>
    <style>
        h1 {
            text-align: center;
        }

        a {
            color: #0000ff; /* Màu mặc định của link */
            text-decoration: none;
        }
        a:visited{
            color: #0000ff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>QUẢN LÝ THÔNG TIN SINH VIÊN</h1>
    <h3 style="text-decoration: underline;">Chức năng:</h3>
    <h3>1. <a href="index.php?action=list">Xem thông tin sinh viên</a></h3>
    <h3>2. <a href="index.php?action=add">Thêm thông tin sinh viên</a></h3>
    <h3>3. <a href="index.php?action=update">Cập nhập thông tin sinh viên</a></h3>
    <h3>4. <a href="index.php?action=search">Tìm kiếm thông tin</a></h3>
    <h3>5. <a href="index.php?action=delete">Xóa thông tin</a></h3>
</body>

</html>