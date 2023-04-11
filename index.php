<?php
function randomPassword($length)
{
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $password = [];
    $alphaLength = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $password[] =  $characters[$n];
    }
    return implode($password);
}
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

<body>
    <h1>Strong Password Generator</h1>
    <form action="index.php" method="get">
        <div class="mb-3">
            <label for="password-length" class="form-label">Password length:</label>
            <input type="number" class="form-control" id="password-length" name="password-length" min="1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2>Your password is: <?php echo randomPassword($_GET['password-length'])
                            ?></h2>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>