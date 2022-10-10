<?php

declare(strict_types = 1);

function pesetas2euros(int $pesetas, float $cotizacion = 166.36): float {

    return round($pesetas / $cotizacion, 2);

}

function euros2pesetas(int $euros, float $cotizacion = 166.36): float {

    return round($euros * $cotizacion, 2);

}

?>