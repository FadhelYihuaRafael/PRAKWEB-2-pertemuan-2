<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <form name="contactForm" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" type="text" placeholder="Nama" required />
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="mataKuliah" aria-label="Mata Kuliah">
                <option value="Pemrograman Web2">Pemrograman Web2</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
            </select>
            <label for="mataKuliah">Mata Kuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiTugas" type="number" placeholder="Nilai Tugas" required />
            <label for="nilaiTugas">Nilai Tugas</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiUts" type="number" placeholder="Nilai UTS" required />
            <label for="nilaiUts">Nilai UTS</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiUas" type="number" placeholder="Nilai UAS" required />
            <label for="nilaiUas">Nilai UAS</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
        </div>
    </form>
</div>

<div class="container px-5 my-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Matkul</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
            </tr>
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) {
                $nama = $_POST['nama'];
                $mataKuliah = $_POST['mataKuliah'];
                $nilaiTugas = $_POST['nilaiTugas'];
                $nilaiUts = $_POST['nilaiUts'];
                $nilaiUas = $_POST['nilaiUas'];

                echo "<tr>";
                echo "<td>1</td>";
                echo "<td>$nama</td>";
                echo "<td>$mataKuliah</td>";
                echo "<td>$nilaiTugas</td>";
                echo "<td>$nilaiUts</td>";
                echo "<td>$nilaiUas</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
