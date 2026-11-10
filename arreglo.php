<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo</title>
    
    
</head>
<body>

<div class="container">
    <h2>Arreglo de 50 números aleatorios</h2>
    <div class="resultado">
        <?php
        // ESTE ES EL PHP
        $numeros = [];

        for ($i = 0; $i < 50; $i++) {
            $numeros[] = rand(1, 100);
        }

        echo implode(', ', $numeros);
        ?>
    </div>
</div>

</body>

</html>