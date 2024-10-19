<?php include_once("./header/header.php") ?>
<?php
include "./var-global.php";
$ar = array("yair" => "Es cristiano", "Bossio" => "Es un nombre Italiano", "arr" => [1, 2, 3]);
$numero = 5;
$edad = 12;

?>


<?= $html1 ?>
<br>
<img src="<?= imgn ?>" alt="">

<ul>
    <?php foreach ($nArray as $key => $value) : ?>
        <?= $key . " " . $value * 2 ?> <br>
    <?php endforeach; ?>
</ul>
<?php
echo ($nombre) ? "Si eres" : "No eres";
echo count($ar, COUNT_RECURSIVE);
echo "<br>";
$ar["yair"] = "Eres mas que vencedor" . " " . 1;
echo $ar["yair"];

foreach ($ar["arr"] as $key => $value) {
    echo "<li>$value</li>";
};
$numero += 10;
echo  $numero;

$nom = "Fernando";

$cambio1 = $nom;

echo $cambio1;

$nom = "Carlos";
$cambio = $nom;

echo $cambio;
$valor_camisa = 100000;
$n_camisas = 3;
$total_c = $n_camisas * $valor_camisa;
$total = ($n_camisas >= 3) ?  $total_c - ($total_c * 0.20) : $total_c - ($total_c * 0.10);
echo "El valor a pagar es: " . $total;

$v_dia = "2";
echo $v_dia;
if ($v_dia == 1) {
    echo "Es Lunes";
} else if ($v_dia == 2) {
    echo "Es Martes";
} else if ($v_dia == 3) {
    echo "Es Miercoles";
} else if ($v_dia == 4) {
    echo "Es Jueves";
} else if ($v_dia == 5) {
    echo "Es Viernes";
} else if ($v_dia == 6) {
    echo "Es Sabado";
} else if ($v_dia == 7) {
    echo "Es Domingo";
} else {
    echo "Hay un error";
}

//Ejercicio de descuento por compra de computadoras
$n_computadoras = 11;
$p_computadoras = 700;
$t_cuenta = $n_computadoras * $p_computadoras;

if ($n_computadoras < 5) {
    $t_cuenta = $t_cuenta - ($t_cuenta * 0.10);
} else if ($n_computadoras >= 5 && $n_computadoras < 10) {
    $t_cuenta = $t_cuenta - ($t_cuenta * 0.20);
} else {
    $t_cuenta = $t_cuenta - ($t_cuenta * 0.40);
}
echo $t_cuenta;

switch ($v_dia) {
    case "1":
        echo "Es lunes";
        break;
    case "2":
        echo "Es Martes";
        break;
    case "3":
        echo "Es Miercoles";
        break;
    default:
        echo "Error";
        break;
}

$resultado = match ($v_dia) {
    1 => "Es Lunes de la primera semana",
    2 => "Es Martes",
    3 => "Es Miercoles",
    default => "No es correcto el valor ingresado"
};

echo $resultado;
$c = 1;
$m = 5;
// while($c <11){
//     $t = $m * $c; 
//     echo "$m * $c = $t <br>";
//     $c++;
// }

for ($i = 1; $i < 10; $i++) {
    $t = $m * $i;
    echo "$t <br>";
}
$numbe = 1055021;
$numbe = number_format($numbe, 1, ".", ",");
echo "Este es el numero formateado: " . $numbe;
echo "<br>";
$clave = "yair123";
$claveP = password_hash($clave, PASSWORD_BCRYPT, ["cost" => 12]);
echo $claveP;
echo "<br>";
echo password_verify($clave, $claveP)
?>

<?php

echo "<br>";
echo $_FILES["Archi"]["name"];
echo "<br>";
echo $_FILES["Archi"]["tmp_name"];
echo "<br>";
echo $_FILES["Archi"]["type"];
echo "<br>";
echo $_FILES["Archi"]["size"];






























// echo "<br>";
// echo  $_FILES["F"]["tmp_name"];
// echo "<br>";
// echo $_FILES["F"]["name"];
// echo "<br>";
// echo $_FILES["F"]["error"];
// echo "<br>";
// echo $_FILES["F"]["size"];
// echo "<br>";
// echo $_FILES["F"]["type"];
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "Ejemplo";

// if (mime_content_type($_FILES["F"]["tmp_name"]) != "application/pdf") {
//     echo "El archivo enviado no es correcto";
//     exit();
// }

// if ($_FILES["F"]["size"] / 10 > 20) {
//     echo "El tamaño supera lo aceptado";
//     exit();
// }

// if (!file_exists("archivo")) {
//     if (!mkdir("archivo")) {
//         echo "No se pudo crear el archivo";
//     } else {
//         echo "Archivo creado con exito";
//     }
// }

// if (!move_uploaded_file($_FILES["F"]["tmp_name"], "archivo/" . $_FILES["F"]["name"])) {
//     echo "No se pudo almacenar el archivo";
// } else {
//     echo "Archivo almacenado con exito";
// }

?>
<?php if ($edad < 18) : ?>

    <h1>Es menor</h1>
<?php endif ?>