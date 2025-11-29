<?php
session_start();
require 'pokemon.php';

$pidgeotto = new Pidgeotto();

$jenisLatihan = null;
$intensitas = null;
$hasilLatihan = [];

if (isset ($_POST["latih"])) {
    $jenisLatihan = $_POST["jenis"];
    $intensitas = $_POST ["intensitas"];

    $level_before = $pidgeotto->getLevel();
    $hp_before = $pidgeotto->gethp();

    $hasilLatihan = $pidgeotto->train($jenisLatihan, $intensitas);
}


if (!isset($_SESSION["riwayat"])) {
    $_SESSION["riwayat"] = [];
}

if ($hasilLatihan) {
    $_SESSION["riwayat"][] = [
        "jenisLatihan" => $jenisLatihan,
        "intensitas" => $intensitas,
        "levelAwal" => $hasilLatihan["levelAwal"],
        "hpAwal" => $hasilLatihan["hpAwal"],
        "levelAkhir" => $hasilLatihan["levelAkhir"],
        "hpAkhir" => $hasilLatihan["hpAkhir"],
        "waktu" => date("Y-m-d H:i:s")
    ];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Pokemon></title>
        <style>
            body {
                font-family: sans-serif;
                background-color : #ffe1d2ff;
                text-align : center;
            }
            .box {
                background-color : #ffffff;
                border-radius : 10px;
                border : 2px solid #000000ff;
                margin : auto;
            }
            button {
                background-color : #61ffffff;
                border : 2px solid #000000ff;
                font-size : medium;
                cursor: pointer;
                border-radius : 5px;
            }
            button:hover {
                background-color : #6188ffff;
                color : #550b0bff;
            }
        </style>
    </head>

    <body>
        <h2>Latihan Pokemon Pidgeotto</h2>
        <form method = "POST">
            <div class = "box">
                <p><b> Jenis Latihan : </b></p>
                <select name = "jenis" required>
                    <option value = "Attack">Attack</option>
                    <option value = "Defense">Defense</option>
                    <option value = "Speed">Speed</option>
                </select>

                <p><b>Intensitas : </b></p>
                <input type = "number" name = "intensitas" min = "1" max = "10" required>
                <br><br>

                <button type = "submit" name = "latih">Mulai Latihan</button>
            </div>
        </form>


    <?php if ($hasilLatihan) : ?>
        <h3>Hasil Latihan : </h3>

        <p>Level Awal : <?= $hasilLatihan["levelAwal"] ?></p>
        <p>HP Awal : <?= $hasilLatihan["hpAwal"] ?></p>
        <p>Level Akhir : <?= $hasilLatihan["levelAkhir"] ?></p>
        <p>HP Akhir : <?= $hasilLatihan["hpAkhir"] ?></p>

        <p>Jurus Spesial : <?= $pidgeotto->specialMove() ?></p>

        <br>

        <a href="index.php"><button>Kembali ke Layar Beranda</button></a>
         <a href="riwayat.php"><button>Riwayat Latihan</button></a>
    </div>
    <?php endif; ?>
    </body>
</html>