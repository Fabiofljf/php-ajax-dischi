<!-- 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
-->

<?php
// 1. Creo la struttura dati da utilizzare.

$albums =
    [
        [
            "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
            "title" => "New Jersey",
            "author" => "Bon Jovi",
            "genre" => "Rock",
            "year" => "1988"
        ],
        [
            "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
            "title" => "Live at Wembley 86",
            "author" => "Queen",
            "genre" => "Pop",
            "year" => "1992"
        ],
        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
            "title" => "Ten's Summoner's Tales",
            "author" => "Sting",
            "genre" => "Pop",
            "year" => "1993"
        ],
        [
            "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
            "title" => "Steve Gadd Band",
            "author" => "Steve Gadd Band",
            "genre" => "Jazz",
            "year" => "2018"
        ],
        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
            "title" => "Brave new World",
            "author" => "Iron Maiden",
            "genre" => "Metal",
            "year" => "2000"
        ],
        [
            "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
            "title" => "One more car, one more raider",
            "author" => "Eric Clapton",
            "genre" => "Rock",
            "year" => "2002"
        ],
        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
            "title" => "Made in Japan",
            "author" => "Deep Purple",
            "genre" => "Rock",
            "year" => "1972"
        ],
        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
            "title" => "And Justice for All",
            "author" => "Metallica",
            "genre" => "Metal",
            "year" => "1988"
        ],
        [
            "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
            "title" => "Hard Wired",
            "author" => "Dave Weckl",
            "genre" => "Jazz",
            "year" => "1994"
        ],
        [
            "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
            "title" => "Bad",
            "author" => "Michael Jacjson",
            "genre" => "Pop",
            "year" => "1987"
        ]

    ];

// var_dump($albums); // - Struttura dati pronta all'utilizzo.

foreach ($albums as $album) {
    //var_dump($album); // - Single Array.
    //var_dump($album['title']); // - Single information.
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Google Font -->

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link Css -->
    <link rel="stylesheet" href="./assets-php/css/style.css">

    <!-- TITLE -->
    <title>PHP Dischi</title>

</head>

<body>

    <header id="site_header">
        <div class="Upbarr">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"/></svg>
        </div>
    </header>
    <!-- /#site_header -->

    <main id="site_main">
        <section id="music" class="my-5">
            <div class="container">
                <div class="row row-cols-5 g-5">
                    <?php foreach ($albums as $album) : ?>
                        <div class="col">
                            <div class="card">
                                <img src="<?= $album['poster'] ?>" alt="">
                                <h4 class="text-center text-light"><?= $album['title'] ?></h4>
                                <h5 class="text-center c_text_grey"><?= $album['author'] ?></h5>
                                <h5 class="text-center c_text_grey"><?= $album['year'] ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <!-- /#site_main -->

</body>

</html>