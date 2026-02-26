<?php
// URL de la API
$url = "https://official-joke-api.appspot.com/random_joke";

// Inicializar cURL
$ch = curl_init();

// Configurar opciones
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición
$response = curl_exec($ch);

// Cerrar cURL
curl_close($ch);

// Convertir JSON a array PHP
$joke = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Chiste Aleatorio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8404c0;
            text-align: center;
            padding: 40px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(150, 128, 4, 0.1);
        }
        .setup {
            font-size: 18px;
            font-weight: bold;
        }
        .punchline {
            margin-top: 15px;
            color: #e52ce5;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>😂 Chiste del día</h2>
    <p class="setup">
        <?php echo $joke['setup']; ?>
    </p>
    <p class="punchline">
        <?php echo $joke['punchline']; ?>
    </p>
    <br>
    <a href="">🔄 Otro chiste</a>
</div>

</body>
</html>