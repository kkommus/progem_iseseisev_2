<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["arvuta"])) {
      $algajatele_koolitus = $_POST["algajatele_koolitus"];
      $edasijoudnutele_koolitus = $_POST["edasijoudnutele_koolitus"];
  
      $algajatele_hind = 0;
      $edasijoudnutele_hind = 0;
  
      // Määra hinnad vastavalt valitud teenustele
      if ($algajatele_koolitus === 'sisulooja' || $algajatele_koolitus === 'turundus' || $algajatele_koolitus === 'reklaamvideo' || $algajatele_koolitus === 'graafiline_disain') {
          $algajatele_hind = 199;
      }
  
      if ($edasijoudnutele_koolitus === 'sisulooja2' || $edasijoudnutele_koolitus === 'turundus2' || $edasijoudnutele_koolitus === 'reklaamvideo2' || $edasijoudnutele_koolitus === 'graafiline_disain2') {
          $edasijoudnutele_hind = 299;
      }
  
      // Arvuta kokkuhind
      $kokkuhind = $algajatele_hind + $edasijoudnutele_hind;
      // Kuvame tulemuse otse veebilehel "Arvuta" nupu kõrval
      echo '<script>document.getElementById("hind-tulemus").innerHTML = "<div class=\'container mt-3\'><div class=\'row\'><div class=\'col-md-6 offset-md-6\'><div class=\'alert alert-success\'>Kokkuhind: ' . $kokkuhind . ' €</div></div></div></div>";</script>';
  }
  ?>