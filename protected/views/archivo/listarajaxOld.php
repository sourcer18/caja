<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1>Listar Ajax</h1>
<?php
    if(empty($archivos))
        echo "No hay archivos con ese padre ";
    else
        echo "hay archivos ";
        foreach ($archivos as $row){
            echo '<br> nombre -> '.$row->nombre.' tipo ->'.$row->tipo.' ';
        }
    if($id===null)
        echo "id = null";
    else
        echo "id = ".$id;
    
    
?>

