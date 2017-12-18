<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$sveciai = [
    [
        'Vardas' => 'Tomas',
        'Pavarde' => 'Tomaitis',
        'Maistas' => 'Mesa',
        'Lytis' => 'Vyras'
    ],
    [
        'Vardas' => 'Jonas',
        'Pavarde' => 'Jonaitis',
        'Maistas' => 'Zuvis',
        'Lytis' => 'Vyras'
    ],
    [
        'Vardas' => 'Ana',
        'Pavarde' => 'Anaite',
        'Maistas' => 'Sriuba',
        'Lytis' => 'Moteris'
    ],
];
function getInfo($sarasa){
    $a = '';
    $a .= '<td>' . $sarasa['Vardas'] . '</td>';
    $a .= '<td>' . $sarasa['Pavarde'] . '</td>';
    $a .= '<td>' . $sarasa['Maistas'] . '</td>';
    $a .= '<td>' . $sarasa['Lytis'] . '</td>';
    return $a;
}
?>
<table>
    <tr>
        <th>Nr</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Maistas</th>
        <th>Lytis</th>
    </tr>
    <?php
    $nr = 1;
    foreach ($sveciai as $sarasa){
        echo '<tr>';
        echo '<td>' . $nr++ . '. ' . '</td>';
        echo getInfo($sarasa);
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>