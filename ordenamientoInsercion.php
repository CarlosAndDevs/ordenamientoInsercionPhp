<!DOCTYPE html>
<html>
<body>

<?php
$arreglo = [5,2,4,1,3];
 //Recorrer el arreglo
   for ($i = 1; $i < count($arreglo); $i++)
   {	   
       $clave = $arreglo[$i];
       $j = $i-1;
       //Comparar el valor seleccionado con todos los valores anteriores
       while ($j >= 0 && $arreglo[$j] > $clave)
       {
		   //Insertar el valor donde corresponda
		   $arreglo[$j+1] = $arreglo[$j];
           $j = $j-1;
       }
       $arreglo[$j+1] = $clave;
       mostrarLista($arreglo, count($arreglo));
   }    
   mostrarLista($arreglo, count($arreglo));    
//Función para mostrar estado de la lista
function mostrarLista($lista, $lon)
{
   for ($i=0; $i< $lon; $i++)
   {
       echo $lista[$i]." ";
   }
   echo "<br />";   
}

?>

</body>
</html>
