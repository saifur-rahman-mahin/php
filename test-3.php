<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Action Self</title>
</head>
<body>

<?php
// Define variables and initialize with empty values
$name = $email = $message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    // Process the form data (you can add your own logic here)

    // For demonstration purposes, let's just echo the submitted data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
    echo "<br>";
}

// Function to sanitize form data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>
    Message: <textarea name="message"><?php echo $message; ?></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>


<?php
echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
?>
