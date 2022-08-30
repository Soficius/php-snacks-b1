<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$matches = [
    [
        'Hteam' => 'Chicago Bulls',
        'Vteam' => 'Golden State Warriors',
        'scoreHt' => '80',
        'scoreVt' => '100'
    ],
    [
        'Hteam' => 'Boston Celtics',
        'Vteam' => 'Three-peat Lakers',
        'scoreHt' => '90',
        'scoreVt' => '95'
    ],
    [
        'Hteam' => 'Showtime Lakers',
        'Vteam' => 'San Antonio Spurs',
        'scoreHt' => '100',
        'scoreVt' => '70'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
    <?php for ($i = 0; $i < count($matches); $i++) : ?>
        <div>
            <?php echo $matches[$i]['Hteam'] ?> - <?php echo $matches[$i]['Vteam'] ?>
            | <?php echo $matches[$i]['scoreHt'] ?> - <?php echo $matches[$i]['scoreVt'] ?>
        </div>
    <?php endfor ?>
</body>

</html>