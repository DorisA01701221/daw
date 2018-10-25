<?php
   include_once'scripts.php';
   echo'
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset = "UTF-8" />
        <title>A01701221_lab9</title>
    </head>
    <body>';
    echo' <h1> ejercicio 1 </h1> <br>';
        $arreglo=[6.4,7.8,7.8,9.8,8.9];
            echo 'el promedio es: '.promedio($arreglo).'<br>';
    echo' <h1> ejercicio 2 </h1> <br>';
            echo 'la mediana es: '.mediana($arreglo).'<br>';
    echo'<h1> ejercicio 3 </h1> <br>';
            imprimeArreglo($arreglo).'<br>';
    echo'<h1> ejercicio 4</h1><br>';
            tabla().'<br>';
    echo'<h1> ejercicio 5: </h1><h3>inverso de un array</h3><br>';
            $arreglo=[6.4,7.8,7.8,9.8,8.9];
            echo 'el arreglo es: '.json_encode($arreglo).'<br>';
            inverso($arreglo);
   echo'
        <footer>
              <p>hecho por: Doris Gopar Calvo</p>
              <p>Contacto: <a href="mailto:a01701221@itesm.mx">a01701221@itesm.mx</itesm></a>.</p>
        </footer>
    </body>
</html>
   ';
?>
