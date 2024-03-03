<?php 
echo "<h3>Lista invertida</h3>";
# 1. Problema de Lista Invertida:Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso.

function invertir_lista($lista){
    $invertir_lista = array_reverse($lista);# array_reverse (función de PHP que invierte el orden de los datos).
    return $invertir_lista;
}
$array_numbers= [30, 27, 25, 20, 9, 0];# Números a ordenar.
$lista_invertida = invertir_lista($array_numbers);
echo "Lista invertida ". implode(", ", $lista_invertida) . "<br>";# implode (convierte un array en cadena separado por ',') también se puede hacer con foreach.
/* echo "Lista invertida ";
foreach ($lista_invertida as $numero) {
    echo $numero . ", ";
} */

echo "<h3>Sumar numeros pares ingresados en el array</h3>";

#2. Problema de Suma de Números Pares: Crea un script que sume todos los números pares en un array de números enteros.

$num_par = [2, 3, 4, 6, 10, 7, 9, 8];# Números a sumar
$pares = array_filter($num_par, function($numero) {
    return $numero % 2 == 0; # Verfica si es par
});

$suma_num_pares = array_sum($pares);# Array sum(suma los valores).
echo "La suma de los numeros pares ingresados en el array es: " . $suma_num_pares . "<br>";

echo "<h3>Frecuencia de caracteres</h3>";

# 3. Problema de Frecuencia de Caracteres: Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.
function frecuencia($cadena){
    $caracteres = str_split($cadena);# str_split (convierte la cadena en array, cada elemento es un caracter).
    
   # Cuenta la cantidad que se repite 
    $frecuencia = array_count_values($caracteres);
    
   
    unset($frecuencia[' ']);# Eliminar los espacios en blanco.
    
    return $frecuencia;
}
$cadena = "mi nombre es Mirna Zuleyma";
$result = frecuencia($cadena); # Se llama la función y se le pasa la cadena de texto como argumento.
print_r($result);

/* echo "<br>Frecuencia de caracteres: " . "<br>"; # Mostrar de manera más clara y verticalmente.
foreach ($result as $caracter => $frecuencia) {
    echo "$caracter = $frecuencia \n" . "<br>";
} */


echo "<h3>Bucles Anidado</h3>";
#4. Problema de Bucle Anidado: Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.
function imprimirPiramide($altura) {
    // Bucle que controla la altura de la pirámide.
    for ($i = 1; $i <= $altura; $i++) {
        for ($espacios = 1; $espacios <= $altura - $i; $espacios++) {
            echo " "; # Agregar espacios en blanco.
        }
        for ($asteriscos = 1; $asteriscos <= 2 * $i - 1; $asteriscos++) {
            echo "*";
        }
        echo "<br>"; # Salto de línea después de cada fila.
    }
}
$altura = 10; # Altura de la pirámide.

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de Datos PHP</title>
    <style>
        .container { /* Centrar la pirámide */
            text-align: center; 
            margin-top: 3px; 
        }
        body{
            padding: 47px;
            text-align: center;
            background: #d9a7c7;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fffcdc, #d9a7c7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #fffcdc, #d9a7c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        h3{
            color:brown;
        }
    </style>
</head>
<body>   
    <div class="container">
        <?php
             imprimirPiramide($altura);# Imprimir la pirámide centrada.
        ?>
    </div>
</body>
</html>

