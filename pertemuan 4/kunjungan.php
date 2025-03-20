<?php
require_once('bukuTamu.php');
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    array_push($_SESSION['bukutamu'], $bukutamu);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h4 {
            text-align: center;
            color: #007bff;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #007bff;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Daftar Kunjungan</h4>
        <table>
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $buku): ?>
                <tr>
                    <td><?= htmlspecialchars($buku->timestamp) ?></td>
                    <td><?= htmlspecialchars($buku->fullname) ?></td>
                    <td><?= htmlspecialchars($buku->email) ?></td>
                    <td><?= htmlspecialchars($buku->message) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>