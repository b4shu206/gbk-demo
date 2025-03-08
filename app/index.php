<?php
include 'config.php';

if (isset($_GET['name'])) {
    $name = addslashes($_GET['name']);

    $conn->query("SET NAMES gbk"); 

    $query = "SELECT username, age FROM users WHERE BINARY username = '$name'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Name: " . htmlspecialchars($row['username']) . " - Age: " . $row['age'] . "</p>";
        }
    } else {
        echo "<p>No user found.</p>";
    }
}
?>
