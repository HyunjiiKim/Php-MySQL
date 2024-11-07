<?php

    $pages=[
        'Ch4' => 'Objects & Classes',
        'section_b/ch5' => 'Built-In Functions',
        'section_b/ch6' => 'Getting Data From Browsers',
        'section_b/ch7' => 'Images & Files',
        'section_b/ch8' => 'Dates & Times',
        'section_b/ch9' => 'Cookies & Sessions',
        'section_b/ch10' => 'Error Handling',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <h2>Index</h2>
            <ul>
                <?php
                foreach($pages as $folder => $label){?>
                    <li><a href='<?=$folder?>/homepage.php'><?=$label?></a></li>
                <?php }; ?>
            </ul>
    </main>
    <footer></footer>
</body>
</html>