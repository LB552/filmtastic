<?php
require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmtastic</title>
</head>

<body>
    <div class="offer">
        <p>LIMITED TIME OFFER: BUY 3 TICKETS GET 1 FREE</p>
        <img src="Property 1=Default.png" alt="Offer x button default">
    </div>
    <div class="heroMain">
        <img src="left arrow.png" alt="left arrow">
        <div class="trailerScroller">
            <img src="Bugonia.gif" alt="Bugonia trailer">
            <img src="One Battle After Another.gif" alt="One Battle After Another trailer">
            <img src="Frankenstein.gif" alt="Frankenstein trailer">
        </div>
        <img src="right arrow.png" alt="right arrow">
    </div>
    <h1>Now showing</h1>
    <div class="filmWallMain">
        <?php
        for ($i = 0; $i < 8; $i++) { ?>
            <div class="filmBoxMain">
                <img src="<?= ($films[$i]['poster']) ?>">
                <a><?= ($films[$i]['title']) ?></a>
                <p><?= ($films[$i]['genre']) ?></p>
            </div>
        <?php }
        ?>
    </div>

</html>