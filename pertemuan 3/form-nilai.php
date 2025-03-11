<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            border-radius: 15px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h4>Form Nilai Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form method="post" action="hasil-nilai.php" onsubmit="return validateForm()">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Masukkan nama lengkap" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rombel" class="col-4 col-form-label">Rombel</label> 
                        <div class="col-8">
                            <input id="rombel" name="rombel" placeholder="Masukkan rombel Anda" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select" required>
                                <option value="">Pilih Mata Kuliah</option>
                                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                                <option value="UI/UX">UI/UX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="Masukkan nilai tugas" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                            <input id="uts" name="uts" placeholder="Masukkan nilai UTS" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                            <input id="uas" name="uas" placeholder="Masukkan nilai UAS" type="number" class="form-control" required>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn
                                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            const tugas = document.getElementById('tugas').value;
            const uts = document.getElementById('uts').value;
            const uas = document.getElementById('uas').value;

            if (tugas < 0 || tugas > 100) {
                alert("Nilai Tugas harus antara 0 dan 100");
                return false;
            }
            if (uts < 0 || uts > 100) {
                alert("Nilai UTS harus antara 0 dan 100");
                return false;
            }
            if (uas < 0 || uas > 100) {
                alert("Nilai UAS harus antara 0 dan 100");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>