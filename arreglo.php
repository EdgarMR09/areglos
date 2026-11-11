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
        <form method="POST">
        <input type="hidden" name="numeros_serializados" value="<?php echo htmlspecialchars(serialize($numeros)); ?>">
        <button type="submit" name="ver_mayores">Mostrar los 3 números más grandes</button>
    </form>

        <?php
        // ESTE ES EL PHP
        $numeros = [];

        for ($i = 0; $i < 50; $i++) {
            $numeros[] = rand(1, 100);
        }

        echo implode(', ', $numeros);
        ?>
    
    <?php
    if (isset($_POST['ver_mayores'])) {
        $numeros_actuales = unserialize($_POST['numeros_serializados']);
        
        rsort($numeros_actuales);
        
        $tres_mayores = array_slice($numeros_actuales, 0, 3);
        
        echo '<div class="destacado">';
        echo "Los tres números más grandes son: " . implode(', ', $tres_mayores);
        echo '</div>';
    }
    ?>
    </div>
</div>

</body>

</html>