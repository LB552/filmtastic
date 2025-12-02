<?php
require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer-new-style.css">
    <link rel="stylesheet" href="header-style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmtastic</title>
</head>

<body>
    <div class="offer" id="offerId">
        <div></div>
        <p>LIMITED TIME OFFER: BUY 3 TICKETS GET 1 FREE</p>
        <div class="closeButton" id="closeButtonId"></div>
    </div>
    <?php require('header.php'); ?>
    <div class="mainCarousel">
        <div class="slides">
            <div class="slideDiv">
                <img class="slide active" src="ezgif-3587d7156079f5be.gif">
                <p class="slideText" onclick="window.location='detail-page.php'">Bugonia</p>
                <div class="mainTickets">TICKETS</div>
            </div>
            <div class="slideDiv">
                <img class="slide" src="ezgif-42e6653fba659e48.gif">
                <p class="slideText">One Battle After Another</p>
                <div class="mainTickets">TICKETS</div>
            </div>
            <div class="slideDiv">
                <img class="slide" src="ezgif-3da8c88847697957.gif">
                <p class="slideText">Frankenstein</p>
                <div class="mainTickets">TICKETS</div>
            </div>
        </div>
        <div id="left" class="navButton">⟨</div>
        <div id="right" class="navButton">⟩</div>
    </div>
    <h2>Now showing</h2>
    <div class="posterWall">
        <?php
        for ($i = 0; $i < 8; $i++) { ?>
            <div class="filmFrame">
                <?php if ($i === 7): ?>
                    <div class="classicBadge">
                        <p>Classic</p>
                    </div>
                <?php endif; ?>
                <?php if ($i === 0): ?>
                    <a href="detail-page.php" class="posterLink">
                    <?php endif; ?>
                    <div class="posterBox">
                        <img src="<?= ($films[$i]['poster']) ?>">
                        <p class="title"><?= ($films[$i]['title']) ?></p>
                        <p class="genre"><?= ($films[$i]['genre']) ?></p>
                        <?php if ($i === 0): ?>
                    </a>
                <?php endif; ?>
            </div>
    </div>
<?php }
?>
</div>
<h2>Upcoming</h2>
<div class="posterWall">
    <?php
    for ($i = 8; $i < 12; $i++) { ?>
        <div class="filmFrame">
            <div class="posterBox">
                <img src="<?= ($films[$i]['poster']) ?>">
                <p class="title"><?= ($films[$i]['title']) ?></p>
                <p class="genre"><?= ($films[$i]['genre']) ?></p>
            </div>
        </div>
    <?php }
    ?>
</div>
<div class="newsletter">
    <p class="newsletterText">Sign up for the FilmTastic newsletter:</p>
    <div class="newsletterClickables">
        <div class="newsletterInput">
            <input type="email" placeholder="name@example.com">
        </div>
        <div class="newsletterSubmit">
            <p>Submit</p>
        </div>
    </div>
</div>
</div>
<!--<footer>
        <p>Contanct | Newsletter</p>
        <p>© FilmTastic 2025</p>
    </footer>-->
<?php require('footer-new.php'); ?>
<script>
    const offer = document.getElementById('offerId');
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;

    function adjustBodyPadding() {
        const offerHeight = offer.offsetHeight;
        document.body.style.paddingTop = offerHeight + 'px';
    }
    window.addEventListener('load', adjustBodyPadding);
    window.addEventListener('resize', adjustBodyPadding);
    document.getElementById('closeButtonId').addEventListener('click', function() {
        offer.style.display = 'none';
        document.body.style.paddingTop = '0';
    });

    let current = 0; // 0 = first image, 1 = second image

    function updateSlide() {
        document.querySelector(".slides").style.transform =
            `translateX(-${current * 100}vw)`;
    }

    document.getElementById("left").onclick = () => {
        current = (current === 0) ? totalSlides - 1 : current - 1;
        updateSlide();
    };

    document.getElementById("right").onclick = () => {
        current = (current === totalSlides - 1) ? 0 : current + 1;
        updateSlide();
    };

    document.getElementById("newsletterToggle").addEventListener("click", function() {
        const newsletter = document.querySelector(".newsletter");

        if (newsletter.style.display === "none" || newsletter.style.display === "") {
            newsletter.style.display = "block";
        } else {
            newsletter.style.display = "none";
        }
    });
</script>
</body>

</html>