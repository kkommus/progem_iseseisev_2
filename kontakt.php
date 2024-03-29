<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minu Veebileht</title>
    <!-- Lisame Bootstrapi stiilifaili -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Stiilireegel, et peita piltide ümber olevad jooned */
        .card {
            border: none;
        }
    </style>
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

<!-- Ülesanne 1: Oskuste ribad -->
<section class="container mt-4">
    <h2 class="text-center">Minu oskused</h2>
    <div class="container">
        <?php
        // Massiiv oskustest
        $skills = ["HTML", "CSS", "Bootstrap", "PHP"];

        // Massiiv värviklassidest
        $colors = ["primary", "secondary", "success", "danger", "warning", "info", "dark"];

        // Genereeri oskuste ribad
        foreach ($skills as $key => $skill) {
            $value = rand(10, 100);
            $color = $colors[array_rand($colors)];
            echo "
            <div class='mb-3'>
                <div class='d-flex justify-content-between'>
                    <span>{$skill}</span>
                    <span>{$value}%</span>
                </div>
                <div class='progress'>
                    <div class='progress-bar bg-{$color}' role='progressbar' style='width: {$value}%' aria-valuenow='{$value}' aria-valuemin='0' aria-valuemax='100'></div>
                </div>
            </div>";
        }
        ?>
    </div>
</section>

<!-- Töötajate profiilifotod -->
<section class="container mt-4">
    <h2 class="text-center">Meie töötajad</h2>
    <div class="row row-cols-1 row-cols-md-6 g-4">
        <?php
        // Kataloog töötajate profiilifotodega
        $images = ["devlin.jpg", "freeland.jpg", "gabriel.jpg", "pete.jpg", "peterus.jpg", "prentice.jpg"];

        // Genereeri töötajate profiilifotod ja andmed
        foreach ($images as $image) {
            $filename = pathinfo($image, PATHINFO_FILENAME);
            $name = ucfirst($filename);
            $email = $filename . "@sinunimi.ee";

            echo "
            <div class='col text-center'>
                <div class='card h-100'>
                    <img src='{$image}' alt='Minu Pilt' class='img-fluid'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$name}</h5>
                        <p class='card-text'>{$email}</p>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>
</section>



<!-- Lisame Bootstrapi skriptifaili (vajalik Bootstrapi komponentide jaoks) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
