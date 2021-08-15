<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Shared Expenses Input | <?php echo date('F Y'); ?> </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/header-15.css" />
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
            </div>
            <div style="vertical-align: top;" class="right-side">
                <div class="topic-text">Shared Expenses Input | <?php echo date('F Y'); ?> </div>
                <a href="./index.php">
                <button>Home</button>
</a>
 <a href="sqlviewer.php">
    <button>Table Viewer</button>
</a>
                <!----------------------------------------------------------------------------------------->
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

// Close connection
echo "Opening<br>";
    $result = $conn->query("SELECT * FROM SharedFinances;");
    if (!$result) {
        die("Query to show fields from table failed");
    }
     echo "<table class=\"styled-table\">
         <thead>
                <tr>
                    <th>User</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Price</th>
                    
                </tr>
                </thead>
                <tbody>";
                
     while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["User"]. "</td>
                    <td>" . $row["Date"]. "</td>
                    <td>"  . $row["Description"]. "</td>
                    <td>" . $row["Amount"] . "</td>
                    
                    </tr>";
    }
    echo "</tbody>
    </table>";

    //$sql = "SHOW TABLES"; 
    // $sql = "SELECT * FROM SharedFinances";  //edit your table name here
    // $res = $conn->query($sql);

    // while ($row = $res->fetch_assoc()) {
    //     print_r($row);
    // }
    // echo "closing";
    // $conn->close;
?>
</p>
</div>

            </div>
        </div>
    </div>
</body>

</html>