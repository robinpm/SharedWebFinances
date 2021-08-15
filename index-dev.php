<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title> Shared Expenses Input | <?php echo date('F Y'); ?> </title>
    <link rel="stylesheet" href="style-dev.css">
    <!-- Fontawesome CDN Link -->
    <link rel="apple-touch-icon" href="images/zilent.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head>

<body>

    <div class="title-text">Shared Expenses Input | <?php echo date('F Y'); ?> </div>
    <nav>
        <a href="./index-dev.php">
            <button>Home</button>
        </a>
        <a href="sqlviewer.php">
            <button>Table Viewer</button>
        </a>
    </nav>

    <form action="./gogo.php" method="post">
        <div class="input-div">
            <input type="text" name="name" placeholder="Who are you?">
        </div>
        <div class="input-div">
            <input id="today" type="date" name="date">
        </div>
        <div class="input-div">
            <input type="text" name="description" placeholder="What did you buy?">
        </div>
        <div class="input-div">
            <input type="number" step="0.01" id="price" pattern="^\d*(\.\d{0,2})?$" title="Insert a price! (00.000" name="amount" placeholder="How much was it?">
            <i>$</i>
        </div>
        <div class="input-div">

            <input type="text" name="notes" placeholder="Anything else?">
        </div>
        <div class="button">
            <input type="submit" value="Submit">
        </div>
    </form>

</body>