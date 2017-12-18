<?php
function srifto_dydis($dydis){
    switch ($dydis){
        case 'mazas': $d = '5px';
        break;
        case 'normalus': $d = '10px';
        break;
        case 'didelis': $d = '35px';
        break;
        case 'extra': $d = '45px';
        break;
        default: $d = '25px';
    }
    return $d;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>It is a long established <span style=" background-color: aqua; font-size:<?php echo srifto_dydis('mazas')?> ">fact that a reader will be</span> distracted by the readable content of a page when looking at its layout. <span style="background-color: pink; font-size:<?php echo srifto_dydis('normalus')?> ">The point</span>  of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.<span style="font-size:<?php echo srifto_dydis('didelis')?> "> Many desktop </span> publishing packages and web page editors now use Lorem Ipsum as their default model text, and <span style="font-size:<?php echo srifto_dydis('extra')?> "> a search for</span> 'lorem ipsum' will uncover many web sites still in their infancy.<span style=" font-size:<?php echo srifto_dydis('nedidelis')?> "> Various versions </span> have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

<?php
echo '<script>alert("!");</script>';   // su php padare kaip teksta naudojant javascript
?>
</body>
</html>
