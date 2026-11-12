<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DANH SÁCH SINH VIÊN</title>
</head>

<body>
    <h1 style="text-align: center;">DANH SÁCH SINH VIÊN</h1>

    <table border="1" width="50%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Delete</th>
        </tr>

        <!--hiển thị list sv lên bảng-->
        <?php foreach($list as $sv): ?>
        <tr>
            <td>
                <a href="index.php?action=detail&stid=<?= $sv['id'] ?>">
                    <?= htmlspecialchars($sv['id']) ?>
                </a>
            </td>
            <td>
                <?= htmlspecialchars($sv['name']) ?>
            </td>
            <td>
                <a href="index.php?action=delete&stid=<?= $sv['id'] ?>">XÓA</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php?">Quay lại trang chủ</a>
</body>

</html>