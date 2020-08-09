<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbusneed2tellyou";
    echo "Database";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM country where CTR_AVAILABLE = 'Y' ";
    $result = mysqli_query($conn, $sql);

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option>" . $row['CTR-DESC'] . "</option>";
        }
    } else {
        echo "";
    }

    $conn->close();
?>
