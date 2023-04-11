<?php
include __DIR__ . '/session.php';
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body class="vh-100 d-flex flex-column justify-content-center bg-primary-subtle">
    <div class="container">
        <h1 class="p-3 text-center">Your password is:</h1>
        <h2 class="p-3 text-center"><?php echo randomPassword($_SESSION['password-length']) ?></h2>
    </div>
</body>

</html>