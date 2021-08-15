<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Shared Expenses Input | <?php echo date('F Y'); ?> </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="images/zilent.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
    <script>
        var field = document.querySelector('#today');
        var date = new Date();

        // Set the date
        field.value = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) +
            '-' + date.getDate().toString().padStart(2, 0);

            $(document).on('keydown', 'input[pattern]', function(e){
  var input = $(this);
  var oldVal = input.val();
  var regex = new RegExp(input.attr('pattern'), 'g');

  setTimeout(function(){
    var newVal = input.val();
    if(!regex.test(newVal)){
      input.val(oldVal); 
    }
  }, 1);
});
    </script>
</head>

<body>
    <div class="container">
        <div class="content"></div>
            <div class="right-side">
                <div class="topic-text">Shared Expenses Input | <?php echo date('F Y'); ?> </div>
                <a href="./index.php">
                <button>Home</button>
</a>
 <a href="sqlviewer.php">
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