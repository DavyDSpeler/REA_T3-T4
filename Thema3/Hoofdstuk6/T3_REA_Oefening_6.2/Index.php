<?php
include 'php/header.php';
include 'php/navigation.php';
?>
<?php
// Functie om de winnaar te bepalen
function bepaalWinnaar($spelerKeuze, $computerKeuze)
{
    if (($spelerKeuze === 'steen' && $computerKeuze === 'schaar') || ($spelerKeuze === 'papier' && $computerKeuze === 'steen') || ($spelerKeuze === 'schaar' && $computerKeuze === 'papier')) return 'speler';
    else if ($spelerKeuze === $computerKeuze) return 'gelijkspel';
    else return 'computer';
}
// Variabelen instellen voor score en maxScore
$spelerScore = isset($_COOKIE['spelerScore']) ? $_COOKIE['spelerScore'] : 0;
$computerScore = isset($_COOKIE['computerScore']) ? $_COOKIE['computerScore'] : 0;
$maxScore = 3;
// Checken of er al een winnaar is
if ($spelerScore === $maxScore || $computerScore === $maxScore) $winnaarGedeclareerd = true;
else $winnaarGedeclareerd = false;
// Functie om de computerkeuze te genereren
function genereerComputerKeuze()
{
    $keuzes = ['steen', 'papier', 'schaar'];
    $willekeurigIndex = array_rand($keuzes);
    return $keuzes[$willekeurigIndex];
}
// Wanneer het formulier wordt ingediend
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['keuze']) && !$winnaarGedeclareerd)
{
    $spelerKeuze = $_GET['keuze'];
    $computerKeuze = genereerComputerKeuze();
    $resultaat = bepaalWinnaar($spelerKeuze, $computerKeuze);
    // Score bijwerken
    if ($resultaat === 'speler') $spelerScore++;
    else if ($resultaat === 'computer') $computerScore++;
    // Cookies bijwerken
    setcookie('spelerScore', $spelerScore, time() + (86400 * 30), "/");
    setcookie('computerScore', $computerScore, time() + (86400 * 30), "/");
    // Resultaat weergeven
    $bericht = '';
    if ($resultaat === 'speler') $bericht = 'Je wint!';
    else if ($resultaat === 'computer') $bericht = 'De computer wint.';
    else $bericht = 'Gelijkspel.';
    // Update de tekst in de paragraaf
    $paragraafInhoud = '';
    if ($spelerScore === $maxScore || $computerScore === $maxScore) {
        $paragraafInhoud = "Het spel is afgelopen!";
        // JavaScript-code toevoegen om scores na 3 seconden te resetten
        echo "<script>
            setTimeout(function() {
                document.cookie = 'spelerScore=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'computerScore=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                window.location.reload();
            }, 3000);
        </script>";
    }
    $bijgewerkteParagraafInhoud = "$bericht Je koos $spelerKeuze, de computer koos $computerKeuze. Score: Speler $spelerScore - Computer $computerScore. $paragraafInhoud";
}
// Functie om het spel te resetten
function resetSpel()
{
    setcookie('spelerScore', 0, time() - 3600, "/");
    setcookie('computerScore', 0, time() - 3600, "/");
    header("Refresh:3"); // pagina verversen na 3 seconden
}

?>
<section>
    <h2>Uitwerking van oefening 6.2</h2>
    <?php if(isset($bijgewerkteParagraafInhoud)) {
        echo "<p>$bijgewerkteParagraafInhoud</p>";
    } else { ?>
        <p>Dit is het klassieke spel van steen, papier, schaar. Kies je wapen en kijk wie er wint!</p>
    <?php } ?>
    <form id="gameFrm" method="get" action="#" style="text-align: center; background-color: lightblue; padding: 10px; border-radius: 10px;">
        <div style="display: inline-block; margin-right: 20px;">
            <img src="Media/SteenPapierSchaar(STEEN).png" style="width: 100px;"><br>
            <input type="radio" name="keuze" value="steen">
        </div>
        <div style="display: inline-block; margin-right: 20px;">
            <img src="Media/SteenPapierSchaar(PAPIER).png" style="width: 100px;"><br>
            <input type="radio" name="keuze" value="papier">
        </div>
        <div style="display: inline-block;">
            <img src="Media/SteenPapierSchaar(SCHAAR).png" style="width: 100px;"><br>
            <input type="radio" name="keuze" value="schaar">
        </div>
        <br>
        <button type="submit">Submit</button>
        <?php if ($winnaarGedeclareerd) {echo "<p>Het spel is afgelopen!</p>";} ?>
    </form>
</section>
<?php
include 'php/footer.php';
?>
