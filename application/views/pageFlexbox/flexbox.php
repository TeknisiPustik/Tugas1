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
    <div>
        <h3>Mengenal CSS Flexible Box</h3>
        <p>Apa Itu Flexbox?</p>
        <p>Flexible Box biasa disebut flexbox merupakan mode layout yang ada di CSS3 dan digunakan untuk mengatur elemen di suatu halaman web. Flexbox ini akan mengatur ukuran dari elemen anaknya secara otomatis, dan mampu beradaptasi dengan ukuran container-nya.
        </p>
        <p>Untuk Apa Flexbox?</p>
        <p>Tujuan dari flexbox yaitu memberikan container kemampuan untuk mengatur panjang, lebar, dan posisi item-item yang berada di dalamnya agar memaksimalkan ruang yang ada. Pengaturan ini sangat penting bagi seorang frontend developer untuk membuat sebuah website yang nyaman dilihat di berbagai device dengan berbagai macam resolusi.
        </p>

        <p>Browser Support</p>
        <p> Masalah yang sering dihadapi berkaitan dengan penggunaan CSS3 di webpage adalah tidak semua web browser sudah mendukung properties atau modul CSS3 tersebut. Berikut ini adalah daftar browser yang sudah mendukung modul Flexbox ini:
        </p>
    </div>
    <div>
        <H2>Halaman ini menggunakan teknik Flexbox</H2>
        <br>
        <div><a href="<?= site_url('home/layFlexbox') ?>">layout flexbox pertama</a></div><br>
        <div><a href="<?= site_url('home/centerFlex') ?>">flexbox Justify Content</a></div><br>
        <div><a href="<?= site_url('home/marginFlex') ?>">flexbox Mengontrol Satu Item</a></div><br>
        <div><a href="<?= site_url('home/propertiFlex') ?>">Properti Flex</a></div><br>
    </div>
</body>

<style>
    .container {
        display: flex;
        flex-direction: row;
        background-color: lightblue;
    }

    .container>div {
        background-color: #f1f1f1;
        margin: 10px;
        padding: 20px;
        font-size: 30px;
    }

    @media (max-width: 700px) {
        .container {
            flex-direction: column;
        }

        .container>div {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    }
</style>

</html