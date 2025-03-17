<?php
    require_once ('bukuTamu.php');
    session_start();

    if (!isset($_SESSION['bukutamu'])){
        $_SESSION['bukutamu'] = [];
    }

    if (isset($_POST['submit'])){
        $bukutamu = new BukuTamu ();
        $bukutamu->timestamp = date('Y-m-d H:i:s');
        $bukutamu->fullname = $_POST['fullname'];
        $bukutamu->email = $_POST['email'];
        $bukutamu->message = $_POST['email'];

        array_push($_SESSION['bukutamu'], $bukutamu);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku  Tamu</title>
</head>
<body>
    <div class="container">
        <h4 align="center">Daftar Kunjungan</h4>
        <table align="center" border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr bgcolor="pink">
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                <tr>
            <thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $buku): ?>
                <tr>
                    <td><?= htmlspecialchars($buku->timestamp)?></td>
                    <td><?= htmlspecialchars($buku->fullname)?></td>
                    <td><?= htmlspecialchars($buku->email)?></td>
                    <td><?= htmlspecialchars($buku->message)?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>