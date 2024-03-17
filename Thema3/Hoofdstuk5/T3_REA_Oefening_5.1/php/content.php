<section>
    <h2>
        Uitwerking van oefening 5.1
    </h2>
    <p>        <!-- Plaats je code / uitwerking hieronder -->



    <form action="Oefening5.1-resultaat.php" method="GET">
        Voornaam: <input type="text" name="voornaam"><br><br>
        Achternaam: <input type="text" name="achternaam"><br><br>
        Studentnummer: <input type="text" name="studentnummer"><br><br>
        Uitschrijvingsdatum: <input type="date" name="uitschrijvingsdatum"><br><br>
        Reden van uitschrijving:
        <select name="reden">
            <option value="verkeerde_keuze" selected>Verkeerde keuze</option>
            <option value="andere_studie">Andere studie</option>
            <option value="persoonlijke_redenen">Persoonlijke redenen</option>
            <option value="geen_motivatie">Geen motivatie</option>
        </select><br><br>
        Leerjaar:
        <input type="radio" name="leerjaar" value="1e_leerjaar">1e leerjaar
        <input type="radio" name="leerjaar" value="2e_leerjaar">2e leerjaar
        <input type="radio" name="leerjaar" value="3e_leerjaar">3e leerjaar<br><br>
        <input type="checkbox" name="succesklas" value="succesklas">Ik wil me aanmelden bij de succesklas<br><br>
        <input type="checkbox" name="verwijderen" value="verwijderen">Verwijder mijn gegevens uit het systeem<br><br>
        Aanvullende redenen voor uitschrijving:<br>
        <textarea name="aanvullende_redenen" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Versturen">
    </form>




    </p>
</section>