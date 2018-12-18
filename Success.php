<?php 
    if(!empty($_GET['tid'] && !empty($_GET['product']))) {
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
        $tid = $GET['tid'];
        $product = $GET['product'];
    } else {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Payment Successful</title>
</head>
<body>
    <div class='container mt-4'>
        <h2>Thank you for your purchase of <?php echo $product ?>!</h2>
        <hr>
        <p>Your transaction ID is <?php echo $tid ?></p>
        <p>Check your email for more information.</p>
        <p><a href='index.php' class='btn btn-light mt-2'>Go Back.</a></p>
    </div>
</body>
</html>