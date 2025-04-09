<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2 class="text-center">FORM PENDAFTARAN</h2>
    <div class="container px-5 my-5">
        <form action="hasil.php" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" name="nim" type="text" placeholder="NIM" required />
                <label for="nim">NIM</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="nama" type="text" placeholder="Nama" required />
                <label for="nama">Nama</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenisKelamin" value="L" required />
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenisKelamin" value="P" required />
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <?php 
                $ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
            ?>
            <div class="form-floating mb-3">
                <select class="form-select" name="programStudi" required>
                    <option value="">Pilih Program Studi</option>
                    <?php 
                        foreach ($ar_prodi as $k => $v) {
                            echo "<option value='$k'>$v</option>";
                        }
                    ?>
                </select>
                <label for="programStudi">Program Studi</label>
            </div>
            <div class="mb-3">
                <?php 
                    $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
                ?>
                <label class="form-label d-block">Skill Web dan Programming</label>
                <?php 
                    foreach ($ar_skill as $k => $v) {
                        echo '<div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="skills[]" value="'.$k.'">
                                <label class="form-check-label">'.$k.'</label>
                              </div>';
                    }
                ?>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="email" type="email" placeholder="Email" required />
                <label for="email">Email</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
