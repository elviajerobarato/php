<?php
session_start();

// Catálogo de artículos
$articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);

// Inicializar carrito si no existe
if (!isset($_SESSION["carro"])) {
    $_SESSION["carro"] = array();
}

// Vaciar carro
if (isset($_GET["vaciar"])) {
    $_SESSION["carro"] = array();
}

// Si llega un id por GET, añadir al carro
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);

    // Buscar artículo por id
    foreach ($articulos as $articulo) {
        if ($articulo["id"] == $id) {
            $_SESSION["carro"][] = $articulo;
            break;
        }
    }
}

// Mostrar lista de artículos
echo "<h2>Catálogo</h2>";
foreach ($articulos as $articulo) {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?id=' . $articulo["id"] . '">'
        . $articulo["nombre"] . " (" . $articulo["precio"] . " €)"
        . "</a><br>";
}

// Mostrar carrito
echo "<h2>Carro de la compra</h2>";

if (empty($_SESSION["carro"])) {
    echo "Carro vacío<br>";
} else {
    $total = 0;

    foreach ($_SESSION["carro"] as $item) {
        echo "- " . $item["nombre"] . " (" . $item["precio"] . " €)<br>";
        $total += $item["precio"];
    }

    echo "<strong>Total comprado: $total €</strong><br>";
}

echo '<br><a href="' . $_SERVER["PHP_SELF"] . '?vaciar=1">Vaciar carro</a>';
?>
