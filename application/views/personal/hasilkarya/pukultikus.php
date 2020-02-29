<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pukul Tikus Tanah</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style-pukul-tikus.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
    <style>
        h1,
        h2 {
            font-size: 60px;
            text-align: center;
            font-family: arial;
            margin: 10px;
        }

        button {
            display: block;
            margin: auto;
        }

        .container {
            width: 650px;
            margin: auto;
            cursor: url(<?= base_url('assets/img/pukul-tikus/palu1.png'); ?>), auto;
        }

        .container:active {
            cursor: url(<?= base_url('assets/img/pukul-tikus/palu2.png'); ?>), auto;
        }

        .tanah {
            width: 200px;
            height: 200px;
            position: relative;
            overflow: hidden;
            float: left;
        }

        .tanah::after {
            content: '';
            display: block;
            width: 200px;
            height: 100px;
            background: url(<?= base_url('assets/img/pukul-tikus/tanah.png'); ?>) bottom center no-repeat;
            background-size: 80%;
            position: absolute;
            bottom: -25px;
        }

        .tikus {
            width: 100%;
            height: 100%;
            background: url(<?= base_url('assets/img/pukul-tikus/tikus.png'); ?>) bottom center no-repeat;
            background-size: 60%;
            position: absolute;
            top: 100px;
            transition: top 0.3s;
        }

        .tanah.muncul .tikus {
            top: -15px;
        }
    </style>
</head>

<body>
    <div class="text-center">
        <h1>Pukul Tikus Tanah</h1>

        <a href="<?= base_url('personal'); ?>"><button type="button" class="btn btn-danger">Kembali!</button></a>
        <button type="button" class="btn btn-primary" onclick="mulai()">Mulai!</button>

        <h2 class="papan-skor">0</h2>
    </div>

    <div class="container">
        <div class="tanah">
            <div class="tikus"></div>
        </div>
        <div class="tanah">
            <div class="tikus"></div>
        </div>
        <div class="tanah">
            <div class="tikus"></div>
        </div>
        <div class="tanah">
            <div class="tikus"></div>
        </div>
        <div class="tanah">
            <div class="tikus"></div>
        </div>
        <div class="tanah">
            <div class="tikus"></div>
        </div>
    </div>

    <audio src="audio/Pop.mp3" id="pop"></audio>
    <script src="<?= base_url('assets/'); ?>js/script-pukul-tikus.js"></script>
</body>

</html>