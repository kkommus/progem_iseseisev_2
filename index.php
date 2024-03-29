<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minu Veebileht</title>
  <!-- Lisame Bootstrapi stiilifaili -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<!-- Päis koos e-posti aadressiga -->
<header>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-end">
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
          </svg> sinu@nimi.ee <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
            <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5"/>
          </svg> +372 5555 6666 | <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
          </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg>

        </div>
      </div>
    </div>
</header>
  

<!-- Bänner nuppude ja tekstiga -->
<section class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h1>Keiti Kõmmus</h1>
    </div>
    <div class="col-md-6">
      <nav>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Avaleht</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tooted</a>
          </li>
          <li class="nav-item">
            <a id="teenusedNupp" class="nav-link" href="#">Teenused</a>
          </li>
          <li class="nav-item">
            <a id="kontaktNupp" class="nav-link" href="#">Kontakt</a>

          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<!-- Esimene konteiner -->
<section class="container mt-4">
  <div class="row align-items-start">
    <div class="col-md-6">
      <!-- Pilt vasakule -->
      <img src="bs1man.jpg" alt="Minu Pilt" class="img-fluid">
    </div>
    <div class="col-md-6">
      <!-- Tekst paremale -->
      <div>
        <h2 class="fs-1 text-start">Tõestan, et oskan Bootstrappi</h2>
        <h2 class="fs-5 text-start">Tegelikult oskan täiega HTML, CSS ja Bootstrap APIt. Kahjuks olen liiga laisk!</h2>
      </div>
    </div>
  </div>
</section>
  
<!-- Teine konteiner -->
<section class="container mt-4">
  <h2 class="text-center">Meie teenused</h2>
  <p class="text-center">Otsingu luubil saan klikkida ja kuvatakse hüpikmenüü otsingukast.</p>
</section>

<!-- Kolmas konteiner -->
<section class="container mt-4">
  <div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 25rem;">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-currency-euro" viewBox="0 0 16 16">
                        <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936q-.002-.165.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.6 6.6 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                    </svg>
                    <p class="card-text text-start fs-6">Lorem ipsum</p>
                    <h5 class="card-title text-start">Business</h5>
                    <p class="card-text text-start fs-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos porro sapiente, consequuntur reiciendis illum molestiae odit velit est. Libero natus tenetur quisquam dolore adipisci officiis sint dolorum architecto repellat fugit!.</p>
                </div>
                <div class="d-flex justify-content-end align-items-end">
                    <a href="#" class="btn btn-primary" style="background-color: red; border-color: red;">Loe siit</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
      <div class="card bg-dark" style="width: 25rem;">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" style="fill: blue;" class="bi bi-suitcase-lg-fill" viewBox="0 0 16 16">
              <path d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z"/>
            </svg>
            <p class="card-text text-start text-light fs-6">Lorem ipsum</p>
            <h5 class="card-title text-start text-light">Business</h5>
            <p class="card-text text-start text-light fs-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos porro sapiente, consequuntur reiciendis illum molestiae odit velit est. Libero natus tenetur quisquam dolore adipisci officiis sint dolorum architecto repellat fugit!.</p>
          </div>
          <div class="d-flex justify-content-end align-items-end">
            <a href="#" class="btn btn-primary" style="background-color: blue; border-color: blue;">Loe siit</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 25rem;">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-car-front-fill" viewBox="0 0 16 16">
              <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
            </svg>
            <p class="card-text text-start fs-6">Lorem ipsum</p>
            <h5 class="card-title text-start">Business</h5>
            <p class="card-text text-start fs-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos porro sapiente, consequuntur reiciendis illum molestiae odit velit est. Libero natus tenetur quisquam dolore adipisci officiis sint dolorum architecto repellat fugit!.</p>
          </div>
          <div class="d-flex justify-content-end align-items-end">
            <a href="#" class="btn btn-primary" style="background-color: green; border-color: green;">Loe siit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Neljas konteiner -->
<section class="container mt-4">
  <h2 class="text-center">Meie tehtud tööd</h2>
  <p class="text-center">Seekord pääsesin selliselt</p>
</section>

<!-- Lisame Bootstrapi skriptifaili (vajalik Bootstrapi komponentide jaoks) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Lisame JavaScript-koodi uue lehe avamiseks -->
<!-- Lisame JavaScript-koodi uue lehe avamiseks -->
<!-- Lisame Bootstrapi skriptifaili (vajalik Bootstrapi komponentide jaoks) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Lisame JavaScript-koodi uue lehe avamiseks -->
<!-- Lisa skript nuppude avamiseks -->
<script>
 // Funktsioon Teenused nupu klikkimiseks
function avaNuppTeenused() {
    // Muuda allpool olevat URL-i vastavalt soovitud lehele
    window.location.href = "teenused.php";
}

// Funktsioon Kontakt nupu klikkimiseks
function avaNuppKontakt() {
    // Muuda allpool olevat URL-i vastavalt soovitud lehele
    window.location.href = "kontakt.php";
}

// Kuula Teenused nupu klikki
document.getElementById("teenusedNupp").addEventListener("click", avaNuppTeenused);

// Kuula Kontakt nupu klikki
document.getElementById("kontaktNupp").addEventListener("click", avaNuppKontakt);

</script>

</body>
</html>

