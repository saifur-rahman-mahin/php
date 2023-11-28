<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <input type="submit" value="Submit">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    // Process the data (you can perform validation, save to a database, send emails, etc.)
    // For now, let's just echo the data
    echo "Name: $name<br>";
    echo "Email: $email";
}
?>

</body>
</html>
