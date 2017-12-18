<?php
function spalvos_kodas($spalva){
    switch ($spalva){
        case 'raudona': $kodas = 'red';
            break;
        case 'rozine': $kodas = 'pink';
            break;
        case 'tamsus': $kodas = '#999999';
            break;
        default: $kodas = 'black';
    }
    return $kodas;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Lorem Ipsum is <span style="color:<?php echo spalvos_kodas('raudona') ?> "> simply</span> dummy text of the printing and typesetting industry.<span style="color: <?php echo spalvos_kodas('rozine') ?> "> Lorem </span>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</body>
</html>
