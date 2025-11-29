<?php

require 'pokemon.php';

$pidgeotto = new Pidgeotto();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pokémon Research & Training Center</title>
        <style>
            body {
                font-family: sans-serif;
                background-color : #ffe1d2ff;
                color : #6188ffff;
                text-align : center;
            }
            .title {
                font-size : 35px;
                font-weight : bold;
                text-align : center;
                color : #ffffff;
            }
            .cardbox {
                background-color : #ffffff;
                border-radius : 10px;
                border : 3px solid #000000ff;
                margin : 0 auto;
            }
            .pokemoncard {
                width : 300px;
                border-radius : 10px;
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
        <div class = "title">Pokémon Research & Training Center</div>
        <br><br>

        <img class = "pokemoncard" src="https://www.pokemon.com/static-assets/content-assets/cms2/img/cards/web/SM9/SM9_EN_123.png" alt="Pidgeotto">
        <br><br>
        
        <div class = "cardbox">
            <h2>Pokemon Anda</h2>
            <p><b>Nama Pokemon : </b> <?= $pidgeotto->getnama() ?></p>
            <p><b>Tipe Pokemon : </b> <?= $pidgeotto->gettipe() ?></p>
            <p><b>Level Pokemon : </b> <?= $pidgeotto->getlevel() ?></p>
            <p><b>HP Pokemon : </b> <?= $pidgeotto->gethp() ?></p>
            <p><b>Jurus Spesial Pokemon : </b> <?= $pidgeotto->specialMove() ?></p>
        </div>

    </body>

    <br><br>

    <button onclick="window.location.href='train.php'">Mulai Latihan</button>
    <button onclick="window.location.href='train.php'">Riwayat Latihan</button>
</html>


