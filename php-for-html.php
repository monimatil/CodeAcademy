<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$auto = [
    [
        'Gamintojas' => 'BMW',
        'Modelis' => '320i',
        'Variklis' => '2.0',
        'Durys' => 4,
        'Metai' => 2010
    ],
    [
    'Gamintojas' => 'Audi',
    'Modelis' => '100',
    'Variklis' => '2.4',
    'Durys' => 4,
    'Metai' => 1990
    ],
    [
        'Gamintojas' => 'Honda',
        'Modelis' => 'Civic',
        'Variklis' => '1.4',
        'Durys' => 2,
        'Metai' => 1996
    ]
];

function getInfo($masina){
    $s = '';
    $s .= '<td>' . $masina['Gamintojas'] . '</td>';
    $s .= '<td>' . $masina['Modelis'] . '</td>';
    $s .= '<td>' . $masina['Variklis'] . '</td>';
    $s .= '<td>' . $masina['Durys'] . '</td>';
    $s .= '<td>' . $masina['Metai'] . '</td>';
    return $s;
}
?>

<table>
    <tr>
        <th>Nr</th>
        <th>Gamintojas</th>
        <th>Modelis</th>
        <th>Variklis</th>
        <th>Durys</th>
        <th>Metai</th>
    </tr>
    <?php
    $nr = 1;
    foreach ($auto as $masina){
        echo '<tr>';
        echo '<td>' . $nr++ . '. ' . '</td>';
        echo getInfo($masina);
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>