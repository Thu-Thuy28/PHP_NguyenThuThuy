<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'mysql');
// Kết nối tới MySQL server

if (!$conn) {
    die("Unable to connect to MySQL: " . mysqli_connect_error());
}
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

$sql_stmt = "SELECT * FROM my_contacts";
// Câu lệnh SELECT

$result = mysqli_query($conn, $sql_stmt);
// Thực thi câu lệnh SQL

if (!$result) {
    die("Database access failed: " . mysqli_error($conn));
}
// Thông báo lỗi nếu thực thi thất bại

$rows = mysqli_num_rows($result);
// Lấy số hàng trả về

if ($rows) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo 'ID: ' . htmlspecialchars($row['id']) . '<br>';
        echo 'Full Names: ' . htmlspecialchars($row['full_names']) . '<br>';
        echo 'Gender: ' . htmlspecialchars($row['gender']) . '<br>';
        echo 'Contact No: ' . htmlspecialchars($row['contact_no']) . '<br>';
        echo 'Email: ' . htmlspecialchars($row['email']) . '<br>';
        echo 'City: ' . htmlspecialchars($row['city']) . '<br>';
        echo 'Country: ' . htmlspecialchars($row['country']) . '<br><br>';
    }
}

mysqli_close($conn); // Đóng kết nối CSDL
?>

</body>
</html>