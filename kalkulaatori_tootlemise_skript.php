<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["arvuta"])) {
    $hind = 0;

    if ($_POST["algajatele_koolitus"] != "none") {
        $hind += 199;
    }

    if ($_POST["edasijoudnutele_koolitus"] != "none") {
        $hind += 299;
    }

    echo "Kokku maksumus: " . $hind . "€";
}
?>
