<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DetailStudent</title>
    </head>
    <body>
        <h1 style="text-align: center;">THÔNG TIN CHI TIẾT</h1>
        <table border="1" width="80%" >
            <tr>
                <th width="2">Id</th>
                <th width="100">Name</th>
                <th width="30">Age</th>
                <th width="180">University</th>
            </tr>
            <tr>
                <td><?= htmlspecialchars($sv['id']) ?></td>
                <td><?= htmlspecialchars($sv['name']) ?></td>
                <td><?= htmlspecialchars($sv['age']) ?></td>
                <td><?= htmlspecialchars($sv['university']) ?></td>
            </tr>
        </table>
        <a href="index.php?action=list">Quay lại</a>
    </body>
</html>