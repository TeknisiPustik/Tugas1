<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <title>CSS Grid Tutorial</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
    <style>
        .container {
            display: grid;
            grid-template-columns: 66% auto;
            padding: 4em 1em;
        }

        ul {
            display: grid;
            list-style-type: none;
            margin: 0;
            padding: 0;
            grid-template-columns: repeat(3, auto);
            grid-template-rows: repeat(2, auto);
        }

        img {
            width: 150px;
            justify-self: center;
        }

        body {
            font-family: 'Source Sans Pro';
            background: red;
            margin: 0;
            color: white;
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: auto 60% 40%;
            grid-template-areas:
                "header"
                "body"
                "footer";
        }

        header {
            grid-area: header;
            /* Properti lain tidak ditulis agar lebih singkat */
        }

        .container {
            grid-area: body;
            /* Properti lain tidak ditulis agar lebih singkat */
        }

        footer {
            grid-area: footer;
            /* Properti lain tidak ditulis agar lebih singkat */
        }

        @media only screen and (max-width: 500px) {

            body {
                grid-template-areas:
                    "header"
                    "footer"
                    "body";
            }
        }

        @media only screen and (max-width: 500px) {

            body {
                grid-template-areas:
                    "header"
                    "footer"
                    "body";
            }

            ul,
            .container {
                grid-template-columns: auto;
                grid-template-rows: auto;
            }

            .container {
                text-align: center;
            }

        }
    </style>

</head>

<body>
    <header>
        <a href="#">Libertians > *</a>
    </header>

    <div class="container">
        <div id="content">
            <h1>Down with the state</h1>
            <p>Abandon the left vs. right paradigm and adopt new ideals, where consistency and logic reign supreme.</p>
        </div>
        <img src="<?= base_url('assets/logo.png') ?>" />
    </div>

    <footer>
        <ul>
            <li>
                <span>But what about the roads?</span>
                You just don't understand economics, like supply and demand. Don't worry kiddo, where there's a demand there will be a supply; we'll all have our roads.
            </li>
            <li>
                <span>Is taxation theft?</span>
                If I came to your house with some heavily armed buddies, demanded that you and your neighbors give me a percentage of your income, in return for some crappy monopolized services that you didn't ask for, would you consider that theft?
            </li>
            <li>
                <span>So, what you're saying is...?</span>
                Libertarians want to live in a world where gay couples can protect their poppy fields with fully automatic weapons.

                A world where voluntaryism and property rights are treated with the highest respect.
            </li>

            <li>
                <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
            <li>
                <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
            <li>
                <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
        </ul>
    </footer>

</body>

<style>
    body {
        font-family: 'Source Sans Pro';
        background: red;
        margin: 0;
        color: white;
    }

    a {
        text-decoration: none;
        color: red;
        font-size: 1.8em;
        font-weight: 700;
    }

    img {
        width: 150px;
    }

    header {
        background: #FFFFFF;
        padding: 1em;
    }

    .container {
        padding: 4em 1em;
    }

    footer {
        background: #571212;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    ul li {
        padding: 2em;
        color: #E98A8A;
    }

    ul li span {
        display: block;
        font-size: 1.4em;
        margin-bottom: 1em;
        color: white;
    }
</style>

</html>