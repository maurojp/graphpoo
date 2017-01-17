<?php
    include($_SERVER['DOCUMENT_ROOT'] .'/src/graphpoo.php');
    
    $grafico = new graphpoo;
    
    $grafico->setWidth(200);
    
    $grafico->setHeight(150);
    
    $grafico->setBGColor("#CCCCCC");
    
    $serie1 = new serie;
    
    $serie1->setColor("#006600");
    
    $serie1->setData([3,2,7,4,5,6]);
    
    $grafico->addSerie($serie1);
    
    if ($grafico->renderToFile('prueba.png'))
    {
        echo "<img src='prueba.png'>";
    } 
?>