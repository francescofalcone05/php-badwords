<?php 
$userWord = $_GET['userWord'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP elabora</title>
</head>
<body>
<h1>La tua parola è lunga  <?php echo strlen($userWord);?> caratteri</h1>
<h2>La tua parola è ,<?php echo $userWord;?></h2>


</body>
</html>