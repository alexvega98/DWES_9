<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dato Curioso de Gatos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap');

        body {
            font-family: 'Fredoka', sans-serif;
            background-image: url('https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 20px;
            max-width: 500px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            position: relative;
        }

        h1 {
            color: #5b3c11;
            margin-bottom: 20px;
            font-size: 28px;
        }

        p {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #ff9f68;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #ff7f36;
        }

     
    </style>
</head>
<body>

<?php
/**
 * Realiza una petición a la API catfact.ninja y devuelve un dato curioso sobre gatos.
 *
 * @return string|null Devuelve el texto del dato si la API responde correctamente, o null si falla.
 */
function obtenerDatoGato() {
    $json = file_get_contents("https://catfact.ninja/fact");
    $data = json_decode($json, true);

    return $data["fact"] ?? null;
}

$dato = obtenerDatoGato();
?>

<main class="card">
    <main class="cat-ears"></main>
    <h1>Dato curioso sobre gatos 😺</h1>

    <?php if ($dato): ?>
        <p><?= htmlspecialchars($dato) ?></p>
    <?php else: ?>
        <p>No se pudo obtener el dato.</p>
    <?php endif; ?>

    <a href="cat.php">Otro dato gatuno 🐾</a>
</main>

</body>
</html>
