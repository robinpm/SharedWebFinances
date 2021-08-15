<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<?php include 'header.php' ?>

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

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["User"] . "</td>
                    <td>" . $row["Date"] . "</td>
                    <td>"  . $row["Description"] . "</td>
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