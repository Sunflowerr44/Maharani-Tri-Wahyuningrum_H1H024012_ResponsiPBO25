<?php

session_start();
$riwayat = $_SESSION["riwayat"]??[];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Riwayat Latihan Pokemon</title>
        <style>
            body {
                text-align : center;
                font-family : sans-serif;
                background-color : #ffe1d2ff;
            }
            table {
                margin : auto;
                border-collapse: collapse;
            }
            th, td {
                border : 1px solid #000000;
                padding : 8px;
            }
            th {
                background : #69dde1ff;
            }
        </style>
    </head>

    <body>
        <h2>Riwayat Latihan Pokemon</h2>

        <?php if (empty($riwayat)) : ?>
            <p>Belum ada riwayat latihan.</p>
        <?php else : ?>
            <table>
                <tr>
                    <th>Jenis</th>
                    <th>Intensitas</th>
                    <th>Level Awal</th>
                    <th>Level Akhir</th>
                    <th>HP Awal</th>
                    <th>HP Akhir</th>
                    <th>Waktu</th>
                </tr>

                <?php foreach ($riwayat as $r) : ?>
                    <tr>
                        <td><?= $r["jenisLatihan"] ?></td>
                        <td><?= $r["intensitas"] ?></td>
                        <td><?= $r["levelAwal"] ?></td>
                        <td><?= $r["levelAkhir"] ?></td>
                        <td><?= $r["hpAwal"] ?></td>
                        <td><?= $r["hpAkhir"] ?></td>
                        <td><?= $r["waktu"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <?php endif; ?>

            <br>
            <a href = "index.php"><button>Kembali ke Beranda</button></a>
    </body>
</html>