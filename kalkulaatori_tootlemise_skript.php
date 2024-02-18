<?php
if (isset($_POST['arvuta'])) {
    $algajatele_koolitus = $_POST['algajatele_koolitus'];
    $edasijoudnutele_koolitus = $_POST['edasijoudnutele_koolitus'];

    $algajatele_hind = 0;
    $edasijoudnutele_hind = 0;

    // Määra hinnad vastavalt valitud teenustele
    if ($algajatele_koolitus === 'sisulooja' || $algajatele_koolitus === 'turundus' || $algajatele_koolitus === 'reklaamvideo' || $algajatele_koolitus === 'graafiline_disain') {
        $algajatele_hind = 199;
    }

    if ($edasijoudnutele_koolitus === 'sisulooja2' || $edasijoudnutele_koolitus === 'turundus2' || $edasijoudnutele_koolitus === 'reklaamvideo2' || $edasijoudnutele_koolitus === 'graafiline_disain2') {
        $edasijoudnutele_hind = 299;
    }

    // Arvuta kokkuhind ja kuva see otse vormi all
    $kokkuhind = $algajatele_hind + $edasijoudnutele_hind;
    echo '<div class="alert alert-success mt-3">Kokkuhind: ' . $kokkuhind . ' €</div>';
}
?>
