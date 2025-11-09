<?php
//Estructura del código: separación entre la lógica del lado del servidor y el HTML
//Utilizo un array de arrays asociativos para separar cada producto
$productos = [
    //producto 1
    [
        "id" => 1,
        "nombre" => "Iphone 13",
        "descripcion" => "El iPhone 13 es un smartphone con una pantalla OLED Super Retina XDR de 6.1 pulgadas, un potente chip A15 Bionic y un sistema de cámara dual avanzado. Su diseño incluye bordes planos, una cubierta de vidrio Ceramic Shield resistente a caídas, y resistencia al agua y polvo con certificación IP68. Además, ofrece conectividad 5G, una mayor duración de la batería y modos de cámara como el cinematográfico y el modo noche.",
        "precio" => 745,
        "disponibilidad" => true,
        "imagen" => "imagenes/iphone.jpg"
    ],

    //producto 2
    [
        "id" => 2,
        "nombre" => "MacBook Air 13",
        "descripcion" => "Pantalla de 13.3 pulgadas (diagonal) retroiluminada por LED con tecnología IPS; resolución nativa de 2560 x 1600 a 227 pixeles por pulgada compatible con millones de colore Intel Core i3 de doble núcleo y 1.1 GHz (Turbo Boost de hasta 3.2 GHz) con 4 MB de caché L3. Configurable con Intel Core i5 de 4 núcleos y 1.1 GHz (Turbo Boost de hasta 3.5 GHz) con 6 MB de caché L3, o Intel Core i7 de 4 núcleos y 1.2 GHz (Turbo Boost de hasta 3.8 GHz) con 8 MB de caché L3",
        "precio" => 1570,
        "disponibilidad" => true,
        "imagen" => "imagenes/ordenador.jpg"
    ],

    //producto 3
    [
        "id" => 3,
        "nombre" => "AirPods Max (2020)",
        "descripcion" => "La garantía comercial protege contra todo tipo de fallos durante 1 año. No se aplica en caso de rotura por accidente o problemas de software, pero puedes contratar un seguro con BackUp para estos casos. Desde las almohadillas hasta la diadema, el diseño integral de los AirPods Max tiene un ajuste excepcional que se adapta a la forma de tu cabeza y crea un aislamiento acústico óptimo. El resultado es una experiencia de audio realmente inmersiva, que te sacará una sonrisa de oreja a oreja.",
        "precio" => 588,
        "disponibilidad" => false,
        "imagen" => "imagenes/airpods.jpg"
    ]
];

function formateoPrecio($precio){
    //la variable de precio_formateado es local, ya que sólo existe dentro de la función

    //aquí uso number_format(una función propia de php) formatea un número con decimales y separadores
    //(2 decimales, "," para decimales y "." para miles)
    $precio_formateado = number_format($precio, 2, ',', '.');

    //aqui retorno la variable anterior concatenado del signo del euro
    return $precio_formateado . "€";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo productos</title>
    <link rel="stylesheet" href="catalogo.css">
</head>

<body>
    <header>Catálogo de productos</header>
    <section class="galeria">
    <!--Aquí uso un foreach para darle dinamismo al html, recorrerá cada producto y agregará cada propiedad de mi array de php -->
        <?php foreach ($productos as $producto): ?>

        <article class="producto">
            <h2><?= $producto['nombre']; ?></h2>
            <img src="<?= $producto['imagen']; ?>" alt="<?= $producto['nombre']; ?>">

            <p class="descripcion">
                <?= $producto['descripcion'];?>
            </p>
            <p class="precio"> <?= formateoPrecio($producto['precio']);?></p> 

        <!--Aquí incluí la lógica condicional para que cada vez que cambiara el estado del producto
        la presentación fuese diferente (me ayudé también con css para darle stilo y que las letras
        salieran rojas o verdes según de la disponibilidad-->
            <?php if ($producto['disponibilidad']): ?>  
                <p class="disponibilidad disponible">¡Disponible!</p>
            <?php else: ?>
                <p class="disponibilidad agotado"> ¡Agotado!</p>
            <?php endif; ?>

            <p class="id">ID: <?= (int)$producto['id']; ?></p> <!--aquí hago uso de la conversión de tipos explícita, haciendo un casting a id -->
            <button>Añadir al carrito</button>
        </article>
        
        <?php endforeach; ?>
    </section>


</body>

</html>