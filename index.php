<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$presentTime = new DateTime();
$destinationTime = new DateTime();

$presentTime->setDate(2015,10,21);
$presentTime->setTime(16,29,00);
$destinationTime->setDate(2015,10,21);
$destinationTime->setTime(16,06,00);

echo $presentTime->format('M-d-Y-G-i'); ?> <br/>
<?= $destinationTime->format('M-d-Y-G-i'); ?> <br/>

<?php $difference = $presentTime->diff($destinationTime); ?> <br/>
<?= $difference->format('%Y-%M-%D-%H-%I'); ?> <br/>

</body>
</html>
