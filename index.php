<?php

    $pages=[
        'Ch4' => 'Objects & Classes',
        'section_b/ch5' => 'Built-In Functions',
        'section_b/ch6' => 'Getting Data From Browsers',
        'section_b/ch7' => 'Images & Files',
        'section_b/ch8' => 'Dates & Times',
        'section_b/ch9' => 'Cookies & Sessions',
        'section_b/ch10' => 'Error Handling',
        'section_c/ch11' => 'Structured Query Language',
        'section_c/ch12' => 'Get & Show Data From a Database',
        'section_c/ch13' => 'Updating Data in a Database',
        'section_d/ch14' => 'Refactoring & Dependancy Injection',
        'section_d/ch15' => 'Namespaces & Libraries',
        'section_d/ch16' => 'Membership',
        'section_d/ch17' => 'Adding&Functionality',
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