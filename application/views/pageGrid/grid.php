<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <div class="item1">1</div>
        <div class="item2">2</div>
        <div class="item3">3</div>
    </div>

    <br>
    <div><a href="<?= site_url('home/layoutGrid') ?>">tampilan layout grid</a></div>
    <div><a href="<?= site_url('home/CSSGrid') ?>">Penerapan CSS Grid</a></div>
    <div><a href="<?= site_url('home/gridColumn') ?>">Penerapan CSS Grid column</a></div>
    <div><a href="<?= site_url('home/gridRow') ?>">Penerapan CSS Grid row</a></div>
</body>

<style>
    .container {
        display: grid;
        grid: 80px / 50px 50px 50px;
        grid-gap: 10px;
        background-color: lightblue;
        padding: 10px;
    }

    .container>div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        padding: 20px;
        font-size: 30px;
    }
</style>

</html>