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
        $bukutamu->message = $_POST['message'];

        array_push($_SESSION['bukutamu'], $bukutamu);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku  Tamu</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        line-height: 1.6;
        padding: 20px;
        display: flex;
        justify-content: center;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 10px;
    }

    h4 {
        text-align: center;
    }

    .table {
        width: 100%;
        
    }

    .table th, td {
        border-bottom: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    
    tr:hover {background-color: pink;}
</style>
</head>
<body>
    <div class="container">
        <h4>Daftar Kunjungan</h4>
        <br>
        <table>
            <thead>
                <tr>
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