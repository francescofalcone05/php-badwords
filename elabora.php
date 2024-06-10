<?php 
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$username = $nome . " " . $cognome ;

//ucfirst ritorna la stringa con la prima lettera maiuscoila
$nomecognomecorretti = ucfirst($nome) . " " . ucfirst($cognome);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP elabora</title>
</head>
<body>
    <h1>Hellow, <?php echo  $username; ?></h1>
    <h2>Hellow, <?php echo  $nomecognomecorretti; ?></h2>
</body>
</html>