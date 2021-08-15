<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<?php include 'header.php' ?>

<body>
    <div class="container">
        <div class="content"></div>
        <div class="right-side">
            <div class="topic-text">Shared Expenses Input | <?php echo date('F Y'); ?> </div>
            <a href="./index.php">
                <button>Home</button>
            </a>
            <a href="./sqlviewer.php">
                <button>Table Viewer</button>
            </a>
            <!----------------------------------------------------------------------------------------->
            <form action="./gogo.php" method="post">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Who are you?">

                </div>
                <!-- <input type="text" name="name" id="name"> -->
                <div class="input-box">
                    <!-- <label for="date">date:</label> -->
                    <input id="today" type="date" name="date">
                </div>
                <div class="input-box">
                    <!-- <label for="description">description:</label> -->
                    <input type="text" name="description" placeholder="What did you buy?">
                </div>
                <div class="input-box">
                    <!-- <label for="amount">amount:</label> -->
                    <input type="number" step="0.01" id="price" pattern="^\d*(\.\d{0,2})?$" title="Insert a price! (00.000" name="amount" placeholder="How much was it?">
                    <i>$</i>
                </div>
                <div class="input-box">
                    <!-- <label for="notes">notes:</label> -->
                    <input type="text" name="notes" placeholder="Anything else?">
                </div>
                <div class="button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

    </div>
    </div>
    </div>
</body>

</html>

<!-- <label for="name">Name:</label>
        <select type="text"name="name">
            <option value = "Robin">Robin</option>
            <option value = "Connie">Connie</option>
        </select> -->