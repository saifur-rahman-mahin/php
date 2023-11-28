<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: stretch;
        }

        .user-card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: auto;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
            float: left;
        }

        .user-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h3 {
            margin-top: 0;
        }

        p {
            margin: 5px 0;
        }

    </style>
</head>
<body>
<h1>User Information</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to retrieve user information
$table_name = "info";
$sql_select_users = "SELECT id, name, age, email FROM $table_name";

// Execute the query
$result = $conn->query($sql_select_users);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        
        echo '<div class="user-card">';
        echo '<div class="user-field"><strong>ID:</strong> ' . $row["id"] . '</div>';
        echo '<div class="user-field"><strong>Name:</strong> ' . $row["name"] . '</div>';
        echo '<div class="user-field"><strong>Age:</strong> ' . $row["age"] . '</div>';
        echo '<div class="user-field"><strong>Email:</strong> ' . $row["email"] . '</div>';
        echo '</div>';
    }
} else {
    echo "No users found";
}

// Close connection
$conn->close();
?>

</body>
</html>
