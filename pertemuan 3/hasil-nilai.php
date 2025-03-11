<?php
if (!isset($_POST['nama'])) {
    echo '<script>alert("Anda harus mengisi form terlebih dahulu!")</script>
    <meta http-equiv="refresh" content="0; url=form-nilai.php">';
    exit; // Menghentikan eksekusi script setelah redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            transition: background-color 0.3s;
        }
        .table tr:hover {
            background-color: #e9ecef;
        }
        .result-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result-header">
            <h2>Hasil Nilai Mahasiswa</h2>
        </div>
        <table class="table table-bordered mt-3">
            <tr>
                <th>Nama</th>
                <td><?= htmlspecialchars($_POST['nama']) ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= htmlspecialchars($_POST['nim']) ?></td>
            </tr>
            <tr>
                <th>Rombel</th>
                <td><?= htmlspecialchars($_POST['rombel']) ?></td>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <td><?= htmlspecialchars($_POST['matkul']) ?></td>
            </tr>
            <tr>
                <th>Nilai Tugas</th>
                <td><?= htmlspecialchars($_POST['tugas']) ?></td>
            </tr>
            <tr>
                <th>Nilai UTS</th>
                <td><?= htmlspecialchars($_POST['uts']) ?></td>
            </tr>
            <tr>
                <th>Nilai UAS</th>
                <td><?= htmlspecialchars($_POST['uas']) ?></td>
            </tr>
            <tr>
                <th>Predikat</th>
                <td>
                    <?php
                    $tugas = $_POST['tugas'] * (35 / 100);
                    $uts = $_POST['uts'] * (30 / 100);
                    $uas = $_POST['uas'] * (35 / 100);
                    $total = $tugas + $uts + $uas;

                    if ($total <= 35) {
                        $predikat = 'E';
                    } elseif ($total <= 55) {
                        $predikat = 'D';
                    } elseif ($total <= 69) {
                        $predikat = 'C';
                    } elseif ($total <= 84) {
                        $predikat = 'B';
                    } elseif ($total <= 100) {
                        $predikat = 'A';
                    } else {
                        $predikat = 'Tidak Diketahui';
                    }
                    echo htmlspecialchars($predikat);
                    ?>
                </td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>
                    <?php
                    switch ($predikat) {
                        case 'A':
                            echo "Sangat Baik";
                            break;
                        case 'B':
                            echo "Baik";
                            break;
                        case 'C':
                            echo "Cukup";
                            break;
                        case 'D':
                            echo "Kurang";
                            break;
                            case 'E':
                                echo "Sangat Kurang";
                                break;
                            default:
                                echo "Tidak Diketahui";
                                break;
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <div class="text-center mt-4">
                <a href="form-nilai.php" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Kembali ke Form</a>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
    </html>