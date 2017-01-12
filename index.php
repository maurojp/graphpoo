<?php
    include($_SERVER['DOCUMENT_ROOT'] .'/src/graphpoo.php');
    
    $grafico = new graphpoo;
    
    $grafico->setWidth(200);
    
    $grafico->setHeight(150);
    
    //$grafico->style->setBackgroudColor("FFFFFF");
    
    $grafico->setStyle(5,"#CCCCCC","#CCBB44","#000000");
    
    if ($grafico->renderToFile('prueba.png'))
    {
        echo "<img src='prueba.png'>";
    } 
?>