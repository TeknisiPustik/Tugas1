<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grid CSS</title>
</head>

<body>
    <div class="container">
        <div class="top-left">Top Left</div>
        <div class="top-right">Top Right</div>
        <div class="content">Content</div>
        <div class="bottom-left">Bottom Left</div>
        <div class="bottom-center">Bottom Center</div>
        <div class="bottom-right">Bottom Right</div>
    </div>
</body>

<style>
    .container {
        margin-top: 20vh;
        display: grid;
        grid-template-columns: auto auto auto;
        grid-gap: 10px;
        background-color: coral;
        padding: 12px;
    }

    .container>div {
        background-color: skyblue;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        padding: 3em;
        border: 3px solid black;
    }

    .top-left {
        grid-column: 1/2;
    }

    .top-right {
        grid-column: 3/4;
    }

    .content {
        grid-column: 1/4;
    }

    .bottom-left {
        grid-column: 1/2;
    }

    .bottom-center {
        grid-column: 2/3;
    }

    .bottom-right {
        grid-column: 3/4;
    }
</style>

</html>