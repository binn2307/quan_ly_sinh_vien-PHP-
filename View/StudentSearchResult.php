<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
</head>

<body>
    <h1>DANH SÁCH SINH VIÊN TÌM ĐƯỢC</h1>

    <?php if(empty($sv)): ?>

        <p>Không tìm thấy sinh viên phù hợp!</p>

    <?php else: ?>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
            </tr>

            <?php foreach($sv as $student): ?>
            <tr>
                <td><?= htmlspecialchars($student['id']) ?></td>
                <td><?= htmlspecialchars($student['name']) ?></td>
                <td>
                    <a href="index.php?action=detail&stid=<?= urlencode($student['id']) ?>">
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>

        </table>

    <?php endif; ?>

    <br>
    <a href="index.php?action=search">Tìm kiếm lại</a>

</body>
</html>