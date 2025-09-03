<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo</title>
    <style>
        body {
            background-color: #050066cc;
            color: #cccccc;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            align-items: center;
            gap: 40px; /* Espacio entre texto e imagen */
            text-align: left;
        }
        h1 {
            font-size: 2rem;
        }
        img {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
            max-width: 250px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Hola Mundo desde CodeIgniter con una vista! 🚀</h1>
        <img src="<?= base_url('images/arbol.jpg') ?>" alt="Árbol bonito">
    </div>
</body>
</html>

