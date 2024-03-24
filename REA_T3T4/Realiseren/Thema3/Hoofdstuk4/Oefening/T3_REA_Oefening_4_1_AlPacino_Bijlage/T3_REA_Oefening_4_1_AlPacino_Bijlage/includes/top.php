<!--
    Author:     Rob Wessels
    Date:       feb 2021

    Subject:    Result oefening 4.1  top: include
                Startende tags, head, header, ul (menulist)
-->
<html lang="en-us">
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>

    <body>
        <header>
            <h1><a href='../index.php'>Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
            <h3>
                <?php
                date_default_timezone_set("Europe/Amsterdam");
                $currentTime = date("H:i:s");
                $currentHour = date("H");
                function getGreeting($hour)
                {
                    if ($hour >= 6 && $hour < 12)return "Goedemorgen";
                    elseif ($hour >= 12 && $hour < 18)return "Goedemiddag";
                    elseif ($hour >= 18 && $hour < 24)return "Goedenavond";
                    else return "Goedenacht";

                }
                echo getGreeting($currentHour) . ", welkom op deze site";
                echo "<br>"; // Add a line break
                echo $currentTime;
                ?>

            </h3>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .
                </ul>
            </nav>
