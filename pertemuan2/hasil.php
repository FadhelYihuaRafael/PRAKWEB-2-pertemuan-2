<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2 class="text-center">HASIL PENDAFTARAN</h2>
    <div class="container px-5 my-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $jenisKelamin = $_POST["jenisKelamin"];
            $programStudi = $_POST["programStudi"];
            $email = $_POST["email"];
            $skills = isset($_POST["skills"]) ? $_POST["skills"] : [];

            // Daftar skill dan skor
            $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];

            // Menghitung skor skill
            $totalSkor = 0;
            foreach ($skills as $skill) {
                $totalSkor += $ar_skill[$skill];
            }

            // Menentukan kategori skill
            if ($totalSkor >= 100) {
                $kategoriSkill = "Sangat Baik";
            } elseif ($totalSkor >= 60) {
                $kategoriSkill = "Baik";
            } elseif ($totalSkor >= 40) {
                $kategoriSkill = "Cukup";
            } else {
                $kategoriSkill = "Kurang";
            }

            // Menampilkan hasil
            echo "<div class='border p-4'>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenisKelamin</p>";
            echo "<p><strong>Program Studi:</strong> $programStudi</p>";
            echo "<p><strong>Skill:</strong> " . implode(", ", $skills) . "</p>";
            echo "<p><strong>Skor Skill:</strong> $totalSkor</p>";
            echo "<p><strong>Kategori Skill:</strong> $kategoriSkill</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "</div>";
        } else {
            echo "<p class='text-danger'>Akses langsung ke halaman ini tidak diperbolehkan.</p>";
        }
        ?>
    </div>
</body>
</html>
