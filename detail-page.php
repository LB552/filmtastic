<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugonia</title>
    <link rel="stylesheet" href="style-detail-page.css">
    <link rel="stylesheet" href="header-style.css">
    <link rel="stylesheet" href="footer-new-style.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

</head>

<body class="body-detail-page">
    <main class="main-detail-page">

        <!-- HEADER -->
        <?php require('header.php'); ?>

        <!-- HERO IMAGE -->
        <section class="hero">
            <img class="hero__image" src="resources-detail-page/Bugonia.gif">
            <h1 class="h1_bugonia">Bugonia</h1>
        </section>




        <section class="grid_section_desktop">
            <!-- MOVIE INFO SECTION -->
            <section class="movie_info_container">
                <div class="movie__desctription">
                    Two conspiracy-obsessed young men kidnap the high-powered CEO of a major company, convinced that she is an alien intent on destroying planet Earth.
                </div>

                <div class="movie__director">
                    <span class="movie__director-label">Directed by:</span>
                    <span class="movie__director-name">Yorgos Lanthimos</span>
                </div>

                <div class="movie__cast">
                    <span class="movie__cast-label">Starring:</span>
                    <span class="movie__cast-names">
                        Jesse Plemons, Emma Stone, Alicia Silverstone, Aidan Delbis, Stavros Halkias
                    </span>
                </div>
            </section>

            <!-- TICKETS -->
            <section class="tickets">
                <div class="tickets_tickets-text">Tickets:</div>
                <div class="tickets_holder">
                    <?php for ($i = 0; $i < 7; $i++): ?>
                        <div class="ticket">
                            <div class="ticket_day"><?= date('l', strtotime("+$i days")); ?></div>
                            <div class="ticket_date_month"><?= date("j M", strtotime("+$i day")); ?></div>
                            <div class="ticket_time">5:40 PM</div>
                        </div>
                    <?php endfor ?>
                </div>
            </section>
        </section>

        <!-- GALLERY -->
        <section class="gallery">

            <div class="item big">
                <img class="gallery__image1 gallery__image--poster" src="resources-detail-page/poster.jpg" alt="Poster">
            </div>

            <div class="item top-right">
                <img class="gallery__image2" src="resources-detail-page/still1.jpg" alt="Movie still">
            </div>

            <div class="item bottom-right">
                <img class="gallery__image3" src="resources-detail-page/still2.webp" alt="Movie still">
            </div>
        </section>

        <!-- FOOTER -->
        <?php require('footer-new.php'); ?>

    </main>
</body>

</html>