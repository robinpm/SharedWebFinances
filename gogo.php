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
        <div class="content">



                <!-- <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Surkhet, NP12</div>
                    <div class="text-two">Birendranagar 06</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+0098 9893 5647</div>
                    <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">codinglab@gmail.com</div>
                    <div class="text-two">info.codinglab@gmail.com</div>
                </div> -->
            </div>
            <div style="vertical-align: top;" class="right-side">
                <div class="topic-text">Shared Expenses Input | <?php echo date('F Y'); ?> </div>
                <!----------------------------------------------------------------------------------------->
                <h1 style="margin:auto;"> Submitted! </h1>
                <div id="log">
                <p>
<?php

echo "Connecting to SQL Server...<br>";

$servername = "sql177.main-hosting.eu";
$username = "u714174257_admin";
$password = "purn@drak4OUFT3braw";
$dbname = "u714174257_drysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} else {
echo "Success!<br>";
}


$user =  $_REQUEST['name'];
$date = $_REQUEST['date'];
$date = $_REQUEST['date'];
$description =  $_REQUEST['description'];
$amount =  $_REQUEST['amount'];
$notes =  $_REQUEST['notes'];



echo "<br>User: ".$user;
echo "<br>Date: ".$date;
echo "<br>Description: ".$description;
echo "<br>Price: ".$amount;
echo "<br>Notes: ".$notes;
echo "<br>";


// Attempt insert query execution
if (!empty($_REQUEST['date'])) {
$sql = "INSERT INTO SharedFinances (User, Date, Description, Amount, Notes) VALUES ('$user','$date','$description','$amount','$notes')";
}
else {
  $sql = "INSERT INTO SharedFinances (User, Description, Amount, Notes) VALUES ('$user','$description','$amount','$notes')";
}
if ($conn->query($sql) === TRUE) {
    echo "Records added successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. <br>" . $conn->error;
}

// Close connection
$conn->close;

?>
</p>
</div>

            </div>
        </div>
    </div>
</body>

</html>
