<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse</title>
    <link rel="stylesheet" href="assets/style/common.css">
    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/style/navbar.css">
    <link rel="stylesheet" href="assets/style/footer.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <header>
        <form method="GET" action="search.php" class="search-box">
            <input type="text" name="location" placeholder="Location">
            <input type="date" name="dates" placeholder="Dates">
            <input type="number" name="people" placeholder="People" min="1">
            <input type="submit" value="Search" class="searchBtn">
        </div>
    </header>

    <section class="listings">
        <div class="listing">
            <img src="assets/images/default.png" width="200" height="200">
            <h3>Residhotel Lyon Part Dieu</h3>
            <p>Tres bien (972 avis)</p>
            <p><strong>468 €</strong></p>
        </div>
        <div class="listing">
            <img src="assets/images/default.png" width="200" height="200">
            <h3>Tout pres de Lyon dans la verdure</h3>
            <p>Exceptionnel (29 avis)</p>
            <p><strong>2629 €</strong></p>
        </div>
        <div class="listing">
            <img src="assets/images/default.png" width="200" height="200">
            <h3>Test 3</h3>
            <p>Exceptionnel (11 avis)</p>
            <p><strong>753 €</strong></p>
        </div>
        <div class="listing">
            <img src="assets/images/default.png" width="200" height="200">
            <h3>Test 4</h3>
            <p>Mauvaise (3 avis)</p>
            <p><strong>153 €</strong></p>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>
