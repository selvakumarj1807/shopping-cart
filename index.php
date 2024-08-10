<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Access user information from session variables
    $email = "";
    $user_name = "";
}

if (isset($_SESSION['email']) || !empty($_SESSION['email'])) {
    // Access user information from session variables
    $email = $_SESSION['email'];
    $user_name = $_SESSION['user_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php'; ?>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>