<?php
include __DIR__ . '/functions.php';
include __DIR__ . '/session.php';
$_SESSION['password-length'] = $_GET['password-length'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body class="vh-100 d-flex flex-column justify-content-center bg-primary-subtle">
    <div class="container ">
        <h1 class="p-3 text-center">Strong Password Generator</h1>
        <form action="show-pass.php" method="get" class="p-3 bg-light rounded">
            <div class="mb-3 row">
                <label for="password-length" class="form-label col">Password length:</label>
                <input type="number" class="form-control col" id="password-length" name="password-length" min="1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>