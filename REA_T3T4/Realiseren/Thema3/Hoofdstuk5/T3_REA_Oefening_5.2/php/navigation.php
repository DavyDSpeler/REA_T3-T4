<?php
/**
 * User: D.Dessé
 * Date: 6-3-2024
 * File: navigation.php
 */

$chapters = array(
    1 => array(
        'name' => 'Hoofdstuk 1',
        'exercises' => array(
            'Oefening 1.1' => 'T3_REA_Oefening1.1.php',
        ),
    ),
    2 => array(
        'name' => 'Hoofdstuk 2',
        'exercises' => array(
            'Oefening 2.1' => 'T3_REA_Oefening2.1.php',
            'Oefening 2.2' => 'T3_REA_Oefening2.2.php',
        ),
    ),
    3 => array(
        'name' => 'Hoofdstuk 3',
        'exercises' => array(
            'Oefening 3.1' => 'T3_REA_Oefening3.1.php',
            'Oefening 3.2' => 'T3_REA_Oefening3.2.php',
        ),
    ),
    4 => array(
        'name' => 'Hoofdstuk 4',
        'exercises' => array(
            'Oefening 4.1' => 'T3_REA_Oefening4.1.php',
            'Oefening 4.2' => 'T3_REA_Oefening4.2.php',
            'Oefening 4.3' => 'T3_REA_Oefening4.3.php',
        ),
    ),
    5 => array(
        'name' => 'Hoofdstuk 5',
        'exercises' => array(
            'Oefening 5.1' => 'T3_REA_Oefening5.1.php',
        ),
    ),
);
?>
<nav>
    <h2>Hoofdmenu</h2>
    <?php foreach ($chapters as $chapterNumber => $chapter) : ?>
        <h3><?php echo $chapter['name']; ?>:</h3>
        <ul>
            <?php foreach ($chapter['exercises'] as $exerciseName => $exerciseFile) : ?>
                <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk<?php echo $chapterNumber; ?>/Oefening/<?php echo $exerciseFile; ?>"><?php echo $exerciseName; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</nav>
