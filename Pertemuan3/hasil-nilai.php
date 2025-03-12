<?php
if (!isset($_POST['nama'])){
    echo '<script>alert("Anda harus mengisi form terlebih dahulu!")</script>
<meta http-equiv="refresh" content="0; url=form-nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #eef2f3;
            padding: 20px;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        td:first-child {
            font-weight: bold;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $_POST['nama']?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $_POST['nama']?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= $_POST['rombel']?></td>
        </tr>
        <tr>
            <td>Matkul</td>
            <td>:</td>
            <td><?= $_POST['matkul']?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= $_POST['tugas']?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= $_POST['uts']?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= $_POST['uas']?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas = $_POST['tugas'] * (35/100);
                $uts = $_POST['uts'] * (30/100);
                $uas = $_POST['uas'] * (35/100);
                $total = $tugas + $uts + $uas;

                if ($total <= 35) {
                    $pred = "E";
                }
                elseif ($total <= 55) {
                    $pred = "D";
                }
                elseif ($total <= 69) {
                    $pred = "C";
                }
                elseif ($total <= 84) {
                    $pred = "B";
                }
                elseif ($total <= 100) {
                    $pred = "A";
                }
                else {
                    $pred = "tifak diketahui";
                }
                echo $pred;
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred) {
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
                    default:
                        echo "Tidak Diketahui";
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>