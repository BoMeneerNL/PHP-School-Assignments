<?php $error = 400?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 400 - Bad Request, oops :(</title>
</head>
<body>
<h2>Error <?php echo $error;?></h2>
<h3>Oops, an error has occurred (error <?php echo $error;?>)</h3>

<p>Error <?php echo $error?> has occurred, the probable cause is that a parameter is missing to load the page correctly</p>
</body>
</html>