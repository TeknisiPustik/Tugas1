<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="container">
        <div>Home</div>
        <div>Search</div>
        <div>Logout</div>
    </nav>
    <br>
    <br>
    <div>memposisikan posisikan ketiga item secara horizontal menggunakan "justify-content: center"</div>
    <p>Selain itu dapat juga menggunakan :</p>
    <ul>
        <li>flex-start (default)</li>
        <li>flex-end</li>
        <li>center</li>
        <li>space-between</li>
        <li>space-around</li>
        <li>space-evenly</li>
    </ul>
</body>

<style>
    .container>div {
        padding: 10px;
        text-align: center;
        font-size: 2em;
        color: #ffeead;
    }

    html,
    body {
        background-color: #ffeead;
        margin: 10px;
    }

    .container>div:nth-child(1) {
        background-color: #96ceb4;
    }

    .container>div:nth-child(2) {
        background-color: #ff6f69;
    }

    .container>div:nth-child(3) {
        background-color: #88d8b0;
    }

    .container {
        display: flex;
        justify-content: center;
    }
</style>

</html>