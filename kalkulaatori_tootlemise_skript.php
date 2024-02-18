<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["arvuta"])) {
    // Kontrollime, kas teenuste valik on tehtud
    if ($_POST["algajatele_koolitus"] == "none" && $_POST["edasijoudnutele_koolitus"] == "none") {
        echo "<p class='text-danger'>Palun vali vähemalt üks koolitus!</p>";
    } else {
        // Siin võid jätkata oma kalkulatsiooni loogikaga
        // Näiteks, kui hind on alati 199€ või 299€ vastavalt valikule
        $hind = 0;

        if ($_POST["algajatele_koolitus"] != "none") {
            $hind += 199;
        }

        if ($_POST["edasijoudnutele_koolitus"] != "none") {
            $hind += 299;
        }

        echo "<p class='text-success'>Kokku maksumus: " . $hind . "€</p>";
    }
}
?>
