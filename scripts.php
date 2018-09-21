<?php
    function promedio($arr){
        $suma=0;
        foreach($arr as $element){
            $suma += $element;
        }
        return $suma/sizeof($arr);
    }
    function mediana($arr){
        if (sort($arr)){
            return $arr[sizeof($arr)/2];
        }
    }
    function imprimeArreglo($arr){
        echo '<ul>';
            echo '<li>el promedio es: '.promedio($arr).'</li>';
            echo'<li>la mediana es: '.mediana($arr).'</li>';
        echo '</ul>';

        echo '<ul> <h2>lista de menor a mayor</h2>';
            if(sort($arr)){
                foreach($arr as $element){
                    echo '<li>'.$element.'</li>';
                }
        echo '</ul>';
            }
            echo '<ul> <h2>lista de mayor a menor</h2>';
                if(rsort($arr)){
                    foreach($arr as $element){
                        echo '<li>'.$element.'</li>';
                    }
                }
            echo '</ul>';
    }
    function tabla(){
        echo'<table>
            <thead>
            <tr><th>numero</th>
                <th>cuadrado</th>
                <th>cubo</th>
            </tr>
            </thead>
            <tbody>';

        for($n=1;$n<5;$n++){
            $doble=$n*$n;
            $triple=$n*$n*$n;
                 echo'<tr> <td>'.$n.'</td>
                            <td>'.$doble.'</td>
                            <td>'.$triple.'</td>
                        </tr>';
        }
        echo'</tbody>';
        echo'</table>';
    }
    function inverso($arreglo){
        $len=sizeof($arreglo);
        $inverse="";
            while($len>=0){
                $inverse=$inverse.$arreglo[$len];
                $len--;
            }
            echo'el inverso es: '.$inverse;
    }

?>
