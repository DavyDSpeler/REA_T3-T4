<?php

    // Is er een POST value "txtUsername" opgegeven?
    if( isset($_POST["txtUsername"]) == true)
    {
            // Het instellen van de cookie
            $username = $_POST["txtUsername"];
            // Bereken de vervaldatum (huidige tijd + 1 jaar in seconden)
            $expiration = time() + (365 * 24 * 60 * 60); // 365 dagen * 24 uur * 60 minuten * 60 seconden
            // Stel de cookie in
            setcookie("userUsernameCookie", $username, $expiration, "/");
            echo "Cookie is ingesteld!";
    }
    else echo "<p>Je bent vergeten een username op te geven. Ga terug!</p>";


    // Is er een POST value "selCountry" opgegeven?
    if( isset($_POST["selCountry"]) == true)
    {
        $countryCode = $_POST["selCountry"];
        // Bereken de vervaldatum (huidige tijd + 1 jaar in seconden)
        $expiration = time() + (365 * 24 * 60 * 60); // 365 dagen * 24 uur * 60 minuten * 60 seconden
        // Stel de cookie in
        setcookie("userCountryCode", $countryCode, $expiration, "/");
        echo "Cookie is ingesteld!";
    }
    else echo "<p>Je bent vergeten een land op te geven. Ga terug!</p>";



?>