<?php
$userPhrase = $_GET['userPhrase'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP elabora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>La tua frase è , <?php echo $userPhrase; ?></h2>
    <p>La tua frase è lunga <?php echo strlen($userPhrase); ?> caratteri</p>
    <h2><?php echo $newphrase = str_replace('cavolo', '***', $userPhrase); ?> </h2>

</body>

</html>