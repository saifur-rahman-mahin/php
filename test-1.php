<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process the data (you can perform validation, save to a database, send emails, etc.)
    // For now, let's just echo the data
    echo "Name: $name<br>";
    echo "Email: $email";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// 1. Server Information
echo $_SERVER['SERVER_SOFTWARE'] . "<br>";  // Outputs: Apache/2.4.41 (Unix)
echo $_SERVER['SERVER_NAME'] . "<br>";      // Outputs: example.com
echo $_SERVER['SERVER_ADDR'] . "<br>";      // Outputs: 192.168.1.1
echo $_SERVER['SERVER_PORT'] . "<br>";      // Outputs: 80
echo "<br>";

// 2. Request Information
echo $_SERVER['REQUEST_METHOD'] . "<br>";   // Outputs: GET
echo $_SERVER['REQUEST_URI'] . "<br>";      // Outputs: /index.php?page=home
echo $_SERVER['QUERY_STRING'] . "<br>";     // Outputs: page=home
echo $_SERVER['HTTP_HOST'] . "<br>";        // Outputs: example.com
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";  // Outputs: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36
echo $_SERVER['HTTP_REFERER'] . "<br>";     // Outputs: http://referrer.com
echo "<br>";

// 3. Client Information
echo $_SERVER['REMOTE_ADDR'] . "<br>";      // Outputs: 203.0.113.42
echo $_SERVER['REMOTE_PORT'] . "<br>";      // Outputs: 54321
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";  // Outputs: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>"; // Outputs: en-US,en;q=0.9,fr;q=0.8
echo "<br>";

// 4. File Paths and Script Locations
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";    // Outputs: /var/www/html
echo $_SERVER['PHP_SELF'] . "<br>";         // Outputs: /index.php
echo $_SERVER['SCRIPT_NAME'] . "<br>";      // Outputs: /index.php
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";  // Outputs: /var/www/html/index.php
echo "<br>";

// 5. Security Information
echo $_SERVER['HTTPS'] . "<br>";            // Outputs: on (if using HTTPS)
echo $_SERVER['REQUEST_SCHEME'] . "<br>";   // Outputs: https (if using HTTPS)
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";  // Outputs: HTTP/1.1
echo "<br>";

// 6. Additional Elements
echo $_SERVER['GATEWAY_INTERFACE'] . "<br>"; // Outputs: CGI/1.1
echo $_SERVER['SERVER_ADMIN'] . "<br>";      // Outputs: webmaster@example.com
echo $_SERVER['SERVER_SIGNATURE'] . "<br>";  // Outputs: Apache/2.4.41 (Unix) Server at example.com Port 80
echo $_SERVER['SCRIPT_URI'] . "<br>";        // Outputs: http://example.com/index.php?page=home
echo "<br>";

// 7. Content Negotiation
echo $_SERVER['HTTP_ACCEPT'] . "<br>";        // Outputs: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
echo $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br>"; // Outputs: ISO-8859-1,utf-8;q=0.7,*;q=0.7
echo $_SERVER['HTTP_ACCEPT_ENCODING'] . "<br>"; // Outputs: gzip, deflate, br
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>"; // Outputs: en-US,en;q=0.9,fr;q=0.8
?>
